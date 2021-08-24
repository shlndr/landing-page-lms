@extends('layouts.master')


@section('styles')
<style type="text/css">
  .pagination>li>a, .pagination>li>span { border-radius: 50% !important;margin: 0 5px;}
  /*.table thead{background: #bbdfff;}*/
  /*.table tfoot{background: #bbdfff;}*/
  ul.pagination{cursor: pointer;}
  #count{font-weight: 600;font-size: 20px;}
  .daterange input{width: 200px;}
  @media only screen and (max-width: 600px) {
  .daterange input{width: 135px;}
  .mt-10{margin-top: 10px;}
  }
</style>
@endsection

@section('content')

    <!-- Data Table area Start-->
        <div class="data-table-area" style="min-height: 80vh;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="normal-table-list">
                          <div class="basic-tb-hd">
                                <div class="row">
                                  <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 daterange" style="display: inline-flex;">
                                    <div class="row">
                                      <div class="col-md-3 col-sm-6 col-xs-6">
                                      <input type="date" name="from" id="from" class="form-control">
                                      </div>
                                      <div class="col-md-3 col-sm-6 col-xs-6">
                                      <input type="date" name="to" id="to" class="form-control">
                                      </div>
                                      <div class="col-md-3 col-sm-6 col-xs-6  mt-10">
                                      <input type="text" name="search" placeholder="Search" autocomplete="off" class="form-control search" >
                                      </div>
                                      <div class="col-md-3 col-sm-6 col-xs-6 mt-10">
                                      <p style="margin: 5px 10px;font-size: 20px;">
                                        Count: <span id="count">0</span>
                                      </p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                        <!-- <a id="export"><button class="btn btn-primary export" style="float: right;width: 200px;" type="submit">Export</button></a> -->
                                        <div class="breadcomb-report">
                                          <a id="export">
                                            <button data-toggle="tooltip" data-placement="left" title="" class="btn waves-effect export" data-original-title="Download Report"><i class="notika-icon notika-sent"></i></button>
                                          </a>
                                        </div>
                                  </div>
                                </div>
                          </div>
            
                            <div class="bsc-tbl" style="overflow-x:auto;">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Media</th>
                                            <th>Story</th>
                                            <th>UTM Source</th>
                                            <th>UTM Medium</th>
                                            <th>UTM Campaign</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody id="leads">
                                      
                                    </tbody>
                                    <tfoot>
                                          <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Media</th>
                                            <th>Story</th>
                                            <th>UTM Source</th>
                                            <th>UTM Medium</th>
                                            <th>UTM Campaign</th>
                                            <th>Date</th>
                                          </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="basic-tb-hd">
                                  <div class="row">
                                    <ul class="pagination" id="paginate" style="float: right;">
                                    <li><a href="#" class="prev">&laquo;</a></li>
                                    <li><a href="#" class="active">1</a></li>
                                    <li><a href="#" class="next">&raquo;</a></li>
                                    </ul>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Data Table area End-->

@endsection

@section('scripts')
<script type="text/javascript">

var APPURL = "{{ url('/') }}";

$(document).ready(function(){
  getLeads();
});

$('.daterange').change(function(){
  from   = $('input[name="from"]').val();
  to     = $('input[name="to"]').val();
  search = $('input[name="search"]').val();
  console.log(from);
  getLeads(from,to,search);
});

$('.search').keyup(function(){
  from   = $('input[name="from"]').val();
  to     = $('input[name="to"]').val();
  search = $('input[name="search"]').val();
  getLeads(from,to,search);
});

$('.export').click(function(){
  from   = $('input[name="from"]').val();
  to     = $('input[name="to"]').val();
  search = $('input[name="search"]').val();
  // exportLeads(from,to,search);
  $('.export').text('Exporting...');
  $('a#export').attr('href', '{{ url("export") }}?from='+from+'&to='+to+'&search='+search);
  setTimeout(function() {
         $('.export').html('<i class="notika-icon notika-sent"></i>');
     }, 3000);
});

function paginate(url)
{
  from   = $('input[name="from"]').val();
  to     = $('input[name="to"]').val();
  search = $('input[name="search"]').val();
  getLeads(from,to,search,url);
}

function getLeads(from = '',to = '',search = '',url = "{{ url('all-leads') }}")
{

  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  // $(".postbutton").click(function(){
      $.ajax({
          /* the route pointing to the post function */
          url: url,
          type: 'GET',
          /* send the csrf-token and the input to the controller */
          data: {from: from,to: to,search: search },
          dataType: 'JSON',
          /* remind that 'data' is the response of the AjaxController */
          success: function (response) { 
            console.log(response);
              var i;
              var result = "";
              var pagevalue = "";
              // console.log(response.data[0].id);

              $('#count').text(response.total);

              for (i = 0; i < response.data.length; i++) {
                var employee = "No";
                if(response.data[i].employee == "1"){employee = "Yes";}

                result += "<tr><td>"+response.data[i].id+"</td><td>"+response.data[i].email+"</td><td><a href='"+APPURL+"/uploads/selfie/"+response.data[i].media+"' target='_blank'>"+response.data[i].media+"</a></td><td>"+response.data[i].message+"</td><td>"+response.data[i].utm_source+"</td><td>"+response.data[i].utm_medium+"</td><td>"+response.data[i].utm_campaign+"</td><td>"+response.data[i].created_at+"</td></tr>" + "";
              }

              pagevalue += "<li><a class='prev' onclick=\"paginate('"+response.first_page_url+"')\">&laquo;</a></li>";

              for (i = 1; i <= response.last_page; i++) {
                pagevalue += "<li> <a onclick=\"paginate('"+response.path+"?page="+i+"')\">"+i+"</a></li>";
              }

              pagevalue += "<li><a class='next'  onclick=\"paginate('"+response.last_page_url+"')\">&raquo;</a></li>";

              $('#leads').html(result.replace(/null/g, ""));
              $('#paginate').html(pagevalue);



          }
      }); 
}
</script>
@endsection

