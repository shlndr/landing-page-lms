<?php

namespace App\Http\Controllers;

use App\Lead;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\URL;
use Session;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function validateCode(Request $request,$code = "")
    {
        $type = "";

        if(empty($code)){
            $code = $request->input('code');
            $type = $request->input('type');
        }

        if(!empty($code))
        {
            $code = DB::table('codes')->where(["code"=>$code,"type"=>$type])->first();
            if(!empty($code))
            {
                $code = "valid";
            }else{
                $code = "invalid";
            }
        }else{
            $code = "invalid";
        }
        return $code;
    }

    public function validatePincode(Request $request)
    {

        if(empty($code)){
            $code = $request->input('pincode');
        }

        if(!empty($code))
        {
            $code = DB::table('pincodes')->where(["pincode"=>$code])->first();
            if(!empty($code))
            {
                $code = trim(str_replace("Division", "", $code->division));
            }else{
                $code = "invalid";
            }
        }else{
            $code = "invalid";
        }
        return $code;
    }

    // public function sendMail($name)
    // {
    //         $details = [
    //             'title' => 'TATA AIA Life Insurance',
    //             'body' => 'This is for testing email using smtp',
    //             'name' => $name
    //         ];
           
    //         \Mail::to('shailendra.s@logicserve.com')->send(new \App\Mail\RegisterMail($details));
           
    //         return true;
    // }


    public function thankYou(Request $request)
    {
        $url = explode("?", $request->fullurl());
        if(!empty($url[1]))
        {
            $url = $url[1];
        }else{
            $url = "";
        }

        $uuid = Session::get('uuid');

        $leadsCheck = DB::table('leads')
                ->where('uuid',"=",$uuid)
                ->where('is_disabled',false)
                ->first();

        $imageurl = env('APP_URL').'/public/uploads/selfie/';
        $url = env('APP_URL').'/'.Session::get('uuid');
                // var_dump($leadsCheck);die();
        if(!empty($leadsCheck)){

        }else{
            $uuid = "";
            $leadsCheck = "";
        }

        
        return view('thankyou',['uuid'=>$uuid,'details' => $leadsCheck,'url'=>$url,'imageurl'=>$imageurl]);
    }


    public function welcome(Request $request)
    {
        $url = explode("?", $request->fullurl());
        if(!empty($url[1]))
        {
            $url = $url[1];
        }else{
            $url = "";
        }
        
        return view('welcome',['url'=>urlencode(env('APP_URL').'?'.$url)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        
        // read more on validation at http://laravel.com/docs/validation

        // var_dump($request->input('name'));
        // var_dump($request->input('city'));
        // var_dump($request->input('contact'));
        // var_dump($request->input('email'));

        $validator = Validator::make($request->all(), [
                'email'       => 'required',
                'media'       => 'mimes:jpeg,png,jpg,gif,mp4,mkv,mov',
        ]);

        // process the login
        if ($validator->fails()) {
            // return Redirect::to('nerds/create')
            //     ->withErrors($validator)
            //     ->withInput(Input::except('password'));
            // return json_encode($validator->errors());
            // return response()->json(["message"=>$validator->errors()], 400);
            return response(json_encode(["message"=>$validator->errors(),"status"=>400]), 400);
        } else {

            // if(empty($_COOKIE['otp']))
            // {
            //     return response(json_encode(["message"=>"invalid","status"=>200]), 200); 
            // }

            // if($_COOKIE['otp'] != $request->input('otp'))
            // {
            //     return response(json_encode(["message"=>"invalid","status"=>200]), 200); 
            // }

            $employee = $request->input('employee');
            if(!empty($employee) && $employee == "1")
            {
                $employee   = 1;
            }else{
                $employee   = 0;
            }

            // if(!empty($request->input('l'))){$code = $request->input('l');}
            // elseif(!empty($request->input('e'))){$code = $request->input('e');}
            // elseif(!empty($request->input('b'))){$code = $request->input('b');}
            // else{$code = "";}
            $code = $this->seoUrl($request->input('email'));
            // if(!empty($request->input('c'))){$code = $request->input('c');}
            $mobile = $request->input('email');

            if ($files = $request->file('media')) {
               $destinationPath = 'public/uploads/selfie/'; // upload path
               $selfieName = $this->seoUrl($request->input('email')) . "." . $files->getClientOriginalExtension();
               $files->move($destinationPath, $selfieName);
            }else{
                $selfieName = "";
            }

            // $fetchEmail = DB::table('leads')
            //             ->where('email',$request->email)
            //             ->count();

            // if( $fetchEmail > 0){

            //     $message = "emailexists";
            //     return response(json_encode(["message"=>$message,"status"=>200]), 200);
            // }

            // $fetchMobile = DB::table('leads')
            //             ->where('contact',$request->mobile)
            //             ->count();

            // if( $fetchMobile > 0){

            //     $message = "mobileexists";
            //     return response(json_encode(["message"=>$message,"status"=>200]), 200);
            // }          


            // store
            $lead               = new Lead;
            // $lead->name         = $request->input('name');
            // $lead->pincode      = $request->input('pincode');
            // $lead->contact      = $request->input('mobile');
            $lead->email        = $request->input('email');
            $lead->media        = $selfieName;
            $lead->employee     = $employee;
            // $lead->uuid         = $code;
            $lead->message      = $request->input('message');
            $lead->utm_source   = $request->input('utm_source');
            $lead->utm_medium   = $request->input('utm_medium');
            $lead->utm_campaign = $request->input('utm_campaign');
            $lead->utm_term     = $request->input('utm_term');
            $lead->utm_content  = $request->input('utm_content');
            $lead->created_at   = date("Y-m-d H:i:s");
            $lead->save();

            // redirect
            // Session::flash('message', 'Successfully created nerd!');
            //$this->sendMail($request->input('name'),$request->input('email'),$request);
            //$this->sendThank($mobile);

            $message = "success";
            Session::put('uuid',$code);
            return response(json_encode(["message"=>$message,"status"=>200]), 200);
            // return Redirect::to('leads');
        }
    }

    public function seoUrl($string) {
        //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
        //
    }

    public function uuid($uuid,Request $request)
    {
        $leadsCheck = DB::table('leads')
                ->where('uuid',"=",$uuid)
                ->where('is_disabled',false)
                ->first();

        $imageurl = env('APP_URL').'/public/uploads/selfie/';
        $url = env('APP_URL').'/'.Session::get('uuid');
                // var_dump($leadsCheck);die();
        if(!empty($leadsCheck)){
            return view('profile', ['uuid'=>$uuid,'details' => $leadsCheck,'url'=>$url,'imageurl'=>$imageurl]);
        }else{

            if($uuid == "about")
            {
                return redirect('about');
            }else{
                // return redirect('thank-you');
            }
        }
    }

    public function unsubscribe(Request $request)
    {
        $email = $request->input('email');
        // var_dump($email);
        if(!empty($email))
        {
            $lead = DB::table('leads')
                    ->where('email',$email)
                    ->limit(5)
                    ->get();
                // var_dump(empty($lead[0]));
            if(!empty($lead[0]))
            {
                $update = DB::table('leads')
                ->where('email', $email)
                ->update(['unsubscribe' => '1']);

                return view('unsubscribe',['title'=>'UNSUBSCRIBE SUCCESSFUL','body'=>'You’ll no longer receive email marketing from this list.','status'=>'success']);
            }else{
                return view('unsubscribe',['title'=>'UNSUBSCRIBE','body'=>'Your email is not present in our database','status'=>'notfound']);
            }      
        }else{
            return view('unsubscribe',['title'=>'UNSUBSCRIBE','body'=>'Enter your email ID','status'=>'noemail']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        //
    }
}
