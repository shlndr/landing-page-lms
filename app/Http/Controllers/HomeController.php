<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getLeads(Request $request)
    {
        // $leads = Lead::all()->toArray();;

        // $result = json_encode(array_values($leads));
        // // var_dump($result);
        // return $result;
        $columns = array( 
                            0 => 'id', 
                            1 => 'name',
                            2 => 'city',
                            3 => 'contact',
                            4 => 'email',
                            5 => 'utm_source',
                            6 => 'utm_medium',
                            7 => 'utm_campaign',
                            8 => 'utm_term',
                            9 => 'utm_content',
                            10 => 'created_at',
                        );




        
        $totalData = Lead::count();
            
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
            
        if(empty($request->input('search.value')))
        {            
            $leads = lead::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 

            $leads =  lead::where('id','LIKE',"%{$search}%")
                            ->orWhere('name', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = Lead::where('id','LIKE',"%{$search}%")
                             ->orWhere('name', 'LIKE',"%{$search}%")
                             ->count();
        }

        $data = array();
        if(!empty($leads))
        {
            foreach ($leads as $lead)
            {
                // $show =  route('leads.show',$lead->id);
                // $edit =  route('leads.edit',$lead->id);

                $nestedData['id'] = $lead->id;
                $nestedData['name'] = $lead->name;
                $nestedData['city'] = $lead->city;
                $nestedData['contact'] = $lead->contact;
                $nestedData['email'] = $lead->email;
                $nestedData['utm_source'] = $lead->utm_source;
                $nestedData['utm_medium'] = $lead->utm_medium;
                $nestedData['utm_campaign'] = $lead->utm_campaign;
                $nestedData['utm_term'] = $lead->utm_term;
                $nestedData['utm_content'] = $lead->utm_content;
                $nestedData['created_at'] = date('j M Y h:i a',strtotime($lead->created_at));
                /*$nestedData['options'] = "&emsp;<a href='{$show}' title='SHOW' ><span class='glyphicon glyphicon-list'></span></a>
                                          &emsp;<a href='{$edit}' title='EDIT' ><span class='glyphicon glyphicon-edit'></span></a>";*/
                $data[] = $nestedData;

            }
        }
          
        $json_data = array(
                    "draw"            => intval($request->input('draw')),  
                    "recordsTotal"    => intval($totalData),  
                    "recordsFiltered" => intval($totalFiltered), 
                    "data"            => $data 
                    );
            
        echo json_encode($json_data); 
    }

    public function allLeads(Request $request)
    {
        $from   = $request->input("from");
        $to     = $request->input("to");
        $search = $request->input("search");
        $limit  = 20;
        $orderCol = 'id';
        $orderType = 'DESC';
        if(!empty($to))
        {
        $to = date('Y-m-d',strtotime($to . "+1 days"));
        }
        // if($from == $to)
        // {
        //     $to = "";
        // }

        if(!empty($from) && empty($to) && empty($search))
        {
            $allleads = DB::table('leads')
                    ->whereNull('deleted_at')
                    ->where('created_at',">=",$from)
                    ->orderby($orderCol,$orderType)
                    ->paginate($limit);
        }elseif (empty($from) && !empty($to) && empty($search)) {
            $allleads = DB::table('leads')
                    ->whereNull('deleted_at')
                    ->where('created_at',"<=",$to)
                    ->orderby($orderCol,$orderType)
                    ->paginate($limit);
        }elseif (!empty($from) && !empty($to) && empty($search)) {
            $allleads = DB::table('leads')
                    ->whereNull('deleted_at')
                    ->where('created_at',">=",$from)
                    ->where('created_at',"<=",$to)
                    ->orderby($orderCol,$orderType)
                    ->paginate($limit);
        }elseif (empty($from) && empty($to) && !empty($search)) {
            DB::enableQueryLog();
            $allleads = DB::table('leads')
                    ->whereRaw('`deleted_at` is null and (`id` LIKE ? or `email` LIKE ? or `utm_source` LIKE ? or `utm_medium` LIKE ? or `utm_campaign` LIKE ? or `utm_term` LIKE ? or `utm_content` LIKE ?)')
                    ->setBindings(["%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%"])
                    // ->whereNull('deleted_at')
                    // ->where('contact',"LIKE","%".$search."%")
                    // ->orwhere('id',"LIKE","%".$search."%")
                    // ->orwhere('name',"LIKE","%".$search."%")
                    // ->orwhere('pincode',"LIKE","%".$search."%")
                    // ->orwhere('email',"LIKE","%".$search."%")
                    // ->orwhere('code',"LIKE","%".$search."%")
                    // ->orwhere('city',"LIKE","%".$search."%")
                    // ->orwhere('utm_source',"LIKE","%".$search."%")
                    // ->orwhere('utm_medium',"LIKE","%".$search."%")
                    // ->orwhere('utm_campaign',"LIKE","%".$search."%")
                    // ->orwhere('utm_term',"LIKE","%".$search."%")
                    // ->orwhere('utm_content',"LIKE","%".$search."%")
                    ->orderby($orderCol,$orderType)
                    ->paginate($limit);
        }elseif (!empty($from) && !empty($to) && !empty($search)) {
            // DB::enableQueryLog();
            $allleads = DB::table('leads')
                    ->whereRaw('`deleted_at` is null and `created_at` >= ? and `created_at` <= ? and (`id` LIKE ? or `email` LIKE ? or `utm_source` LIKE ? or `utm_medium` LIKE ? or `utm_campaign` LIKE ? or `utm_term` LIKE ? or `utm_content` LIKE ?)')
                    ->setBindings([$from, $to, "%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%"])
                    // ->where('contact',"LIKE","%".$search."%")
                    // ->whereNull('deleted_at')
                    // ->where('created_at',">=",$from)
                    // ->where('created_at',"<=",$to)
                    // ->orwhere('id',"LIKE","%".$search."%")
                    // ->orwhere('name',"LIKE","%".$search."%")
                    // ->orwhere('pincode',"LIKE","%".$search."%")
                    // ->orwhere('email',"LIKE","%".$search."%")
                    // ->orwhere('code',"LIKE","%".$search."%")
                    // ->orwhere('city',"LIKE","%".$search."%")
                    // ->orwhere('utm_source',"LIKE","%".$search."%")
                    // ->orwhere('utm_medium',"LIKE","%".$search."%")
                    // ->orwhere('utm_campaign',"LIKE","%".$search."%")
                    // ->orwhere('utm_term',"LIKE","%".$search."%")
                    // ->orwhere('utm_content',"LIKE","%".$search."%")
                    ->orderby($orderCol,$orderType)
                    ->paginate($limit);
                    // var_dump(DB::getQueryLog());
        }else{
            $allleads = DB::table('leads')->whereNull('deleted_at')->orderby($orderCol,$orderType)->paginate($limit);
        }


        return $allleads;
    }

    public function export(Request $request)
    {

        $from   = $request->input("from");
        $to     = $request->input("to");
        $search = $request->input("search");
        $i      = 1;
        $limit  = 20;
        $orderCol = 'id';
        $orderType = 'DESC';
        if(!empty($to))
        {
        $to = date('Y-m-d',strtotime($to . "+1 days"));
        }
        // var_dump($from,$to,$search);die();

        if(!empty($from) && empty($to) && empty($search))
        {
            $allleads = DB::table('leads')
                    ->whereNull('deleted_at')
                    ->where('created_at',">=",$from)
                    ->orderby($orderCol,$orderType)
                    ->get();
        }elseif (empty($from) && !empty($to) && empty($search)) {
            $allleads = DB::table('leads')
                    ->whereNull('deleted_at')
                    ->where('created_at',"<=",$to)
                    ->orderby($orderCol,$orderType)
                    ->get();
        }elseif (!empty($from) && !empty($to) && empty($search)) {
            $allleads = DB::table('leads')
                    ->whereNull('deleted_at')
                    ->where('created_at',">=",$from)
                    ->where('created_at',"<=",$to)
                    ->orderby($orderCol,$orderType)
                    ->get();
        }elseif (empty($from) && empty($to) && !empty($search)) {
            $allleads = DB::table('leads')
                    ->whereRaw('`deleted_at` is null and (`id` LIKE ? or `email` LIKE ? or `utm_source` LIKE ? or `utm_medium` LIKE ? or `utm_campaign` LIKE ? or `utm_term` LIKE ? or `utm_content` LIKE ?)')
                    ->setBindings(["%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%"])
                    // ->where('id',"LIKE","%".$search."%")
                    // ->orwhere('name',"LIKE","%".$search."%")
                    // ->orwhere('pincode',"LIKE","%".$search."%")
                    // ->orwhere('email',"LIKE","%".$search."%")
                    // ->orwhere('contact',"LIKE","%".$search."%")
                    // ->orwhere('code',"LIKE","%".$search."%")
                    // ->orwhere('city',"LIKE","%".$search."%")
                    // ->orwhere('utm_source',"LIKE","%".$search."%")
                    // ->orwhere('utm_medium',"LIKE","%".$search."%")
                    // ->orwhere('utm_campaign',"LIKE","%".$search."%")
                    // ->orwhere('utm_term',"LIKE","%".$search."%")
                    // ->orwhere('utm_content',"LIKE","%".$search."%")
                    ->orderby($orderCol,$orderType)
                    ->get();
        }elseif (!empty($from) && !empty($to) && !empty($search)) {
            $allleads = DB::table('leads')
                    ->whereRaw('`deleted_at` is null and (`id` LIKE ? or `email` LIKE ? or `utm_source` LIKE ? or `utm_medium` LIKE ? or `utm_campaign` LIKE ? or `utm_term` LIKE ? or `utm_content` LIKE ?)')
                    ->setBindings(["%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%", "%".$search."%"])
                    // ->where('created_at',">=",$from)
                    // ->where('created_at',"<=",$to)
                    // ->where('id',"LIKE","%".$search."%")
                    // ->orwhere('name',"LIKE","%".$search."%")
                    // ->orwhere('pincode',"LIKE","%".$search."%")
                    // ->orwhere('email',"LIKE","%".$search."%")
                    // ->orwhere('contact',"LIKE","%".$search."%")
                    // ->orwhere('code',"LIKE","%".$search."%")
                    // ->orwhere('city',"LIKE","%".$search."%")
                    // ->orwhere('utm_source',"LIKE","%".$search."%")
                    // ->orwhere('utm_medium',"LIKE","%".$search."%")
                    // ->orwhere('utm_campaign',"LIKE","%".$search."%")
                    // ->orwhere('utm_term',"LIKE","%".$search."%")
                    // ->orwhere('utm_content',"LIKE","%".$search."%")
                    ->orderby($orderCol,$orderType)
                    ->get();
        }else{
            $allleads = DB::table('leads')->whereNull('deleted_at')->orderby($orderCol,$orderType)->get();
        }

        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Set document properties
        $spreadsheet->getProperties()->setCreator('LMS')
            ->setLastModifiedBy('LMS')
            ->setTitle('Leads from LMS')
            ->setSubject('Leads export')
            ->setDescription('LMS Leads Data')
            ->setKeywords('leads')
            ->setCategory('Data');


    // $spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
    // $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
    // $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
    $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);

        // Add some data
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'ID')
            ->setCellValue('B1', 'Email')
            ->setCellValue('C1', 'Media Link')
            ->setCellValue('D1', 'Story')
            ->setCellValue('E1', 'UTM Source')
            ->setCellValue('F1', 'UTM Medium')
            ->setCellValue('G1', 'UTM Campaign')
            ->setCellValue('H1', 'UTM Term')
            ->setCellValue('I1', 'UTM Content')
            ->setCellValue('J1', 'Date');

        $sheet = $spreadsheet->getActiveSheet();

        foreach ($allleads as $leads) {
           $sheet->setCellValue('A'.($i+1), $leads->id);
           $sheet->setCellValue('B'.($i+1), $leads->email);
           $sheet->setCellValue('C'.($i+1), env('APP_URL') .'uploads/selfie/'. $leads->media);
           $sheet->setCellValue('D'.($i+1), $leads->message);
           $sheet->setCellValue('E'.($i+1), preg_replace("/[^0-9a-zA-Z -]/", "", $leads->utm_source));
           $sheet->setCellValue('F'.($i+1), preg_replace("/[^0-9a-zA-Z -]/", "", $leads->utm_medium));
           $sheet->setCellValue('G'.($i+1), preg_replace("/[^0-9a-zA-Z -]/", "", $leads->utm_campaign));
           $sheet->setCellValue('H'.($i+1), preg_replace("/[^0-9a-zA-Z -]/", "", $leads->utm_term));
           $sheet->setCellValue('I'.($i+1), preg_replace("/[^0-9a-zA-Z -]/", "", $leads->utm_content));
           $sheet->setCellValue('J'.($i+1), $leads->created_at);
           $i++;
        }

        // // Miscellaneous glyphs, UTF-8
        // $spreadsheet->setActiveSheetIndex(0)
        //     ->setCellValue('A4', 'Miscellaneous glyphs')
        //     ->setCellValue('A5', 'éàèùâêîôûëïüÿäöüç');

        // Rename worksheet
        $spreadsheet->getActiveSheet()->setTitle('leads-'.time());

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $spreadsheet->setActiveSheetIndex(0);

        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="leads-'.time().'.xlsx"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;
    }
}
