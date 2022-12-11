@extends('cityadmin.layout.app')

@section('preload-section')
  <link href="{{url('assets/theme_assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
    
    <link href="{{url('assets/theme_assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/theme_assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/theme_assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{url('assets/theme_assets/plugins/bootstrap-table/dist/bootstrap-table.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
<div class="container-fluid">
    
 <div class="row">
<div class="col-lg-12">
    @if (session()->has('success'))
   <div class="alert alert-success">
    @if(is_array(session()->get('success')))
            <ul>
                @foreach (session()->get('success') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
            @else
                {{ session()->get('success') }}
            @endif
        </div>
    @endif
     @if (count($errors) > 0)
      @if($errors->any())
        <div class="alert alert-danger" role="alert">
          {{$errors->first()}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
    @endif
    </div>
<div class="col-lg-12">
<div class="card">  

<div class="card-header card-header-primary">
       <div class="row">
    <div class="col-md-6">
      <h5 class="card-title"><b>{{ __('keywords.Delivery Boy')}} {{ __('keywords.Incentive')}} {{ __('keywords.List')}}</b></h5>
      </div>
       <div class="col-md-6">
      {{-- <a href="{{route('cityad-dboyadd')}}" class="btn btn-primary p-1 ml-auto" style="width:15%;float:right;padding: 3px 0px 3px 0px;">{{ __('keywords.Add')}}</a> --}}
      </div>
       </div>
    </div>
    
<div class="container"><br> 
<table id="datatableDefault" class="table text-nowrap w-100 table-striped">
    <thead class="thead-light">
        <tr>
            <th> # </th>
            <th class="text-center">{{ __('keywords.Boy Name')}}</th>
            {{-- <th>{{ __('keywords.Boy Phone')}}</th> --}}
            {{-- <th>{{ __('keywords.Status')}}</th> --}}
            <th class="text-right">{{ __('keywords.Actions')}}</th>
        </tr>
    </thead>
    <tbody>
           @if(count($delivery_boy)>0)
          @php $i=1; @endphp
          @foreach($delivery_boy as $d_boys)
        <tr>
            <td class="text-center">{{$i}}</td>
            <td class="text-center">{{$d_boys->boy_name}}</td>
            
            <td class="td-actions text-right">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal1{{$d_boys->dboy_id}}"><i class="fas fa-money-bill"></i> {{ __('keywords.Review Incentive')}}</button>
            </td>
        </tr>
          @php $i++; @endphp
                 @endforeach
                  @else
                    <tr>
                      <td>{{ __('keywords.No data found')}}</td>
                      @for ($i = 1; $i<3; $i++)
                        <td style="display:none"></td>
                      @endfor
                    </tr>
                  @endif
    </tbody>
</table><br />
<div class="pull-right mb-1" style="float: right;">
{{ $delivery_boy->links("pagination::bootstrap-4") }}
</div>
</div>
</div>
</div>
</div>
</div>
<div>
    </div>

@foreach($delivery_boy as $cities)  
<div class="modal fade" id="exampleModal1{{$cities->dboy_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="container">
     
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title" id="exampleModalLabel"><b>{{$cities->boy_name}} {{ __('keywords.Profile')}}</b> 
              (@if($cities->status==1)
                <span style="color:green">{{ __('keywords.Active')}}</span>
              @else
                <span style="color:red">{{ __('keywords.Suspended')}}</span>
              @endif)</h5>
    					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    						<span aria-hidden="true">&times;</span>
    					</button>
    			</div>
        <div class="material-datatables">
          <form role="form" method="post" action="{{route('cityad-dboyadd-commisions', $cities->dboy_id)}}" >
            {{csrf_field()}}
            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" data-background-color="purple">
                <tbody>
                     <tr>
                        <td colspan="3">
                            <table class="table">
                                <tr>
                                  <td align="center" valign="top" style="width:100%">
                                      @if($cities->earned_till_now>0) 
                                        <span style="color: green"><strong>{{ __('keywords.Earned_until_now')}}: {{$cities->earned_till_now }}</strong></span><br />
                                        <span style="color: black"><strong>{{ __('keywords.Paid_until_now')}}: {{$cities->paid_till_now }}</strong></span><br />
                                        <span style="color: red"><strong>{{ __('keywords.Remaining')}}: {{$cities->{{ __('keywords.Remaining')}} }}</strong></span><br />
                                      @else
                                        <span style="color: blue"><strong>{{ __('keywords.Earned_until_now')}}: 0</strong></span><br />
                                      @endif
                                    </td>
                                    <td align="center" valign="top" style="width:100%">
                                      @if($cities->earned_till_now>0)
                                        <strong> {{ __('Review Incentive')}}: </strong>
                                      @else
                                        <strong> {{ __('keywords.Add')}} {{ __('keywords.Incentive')}}: </strong>
                                      @endif                    
                                        <input type="number" min="0" name="add_tip" id="tip" placeholder="Enter Commision">
                                        <button type="submit" class="btn btn-primary">{{ __('keywords.Apply_Incentive')}}</button>
                                    </td>
                                   
                                    
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table class="table">
                                <tr>
                                    <td valign="top" style="width:100%">
                                    <strong> {{ __('keywords.Driver Name')}} : </strong> {{$cities->boy_name}}
                                    <br />
                                    <strong>  {{ __('keywords.city')}} : </strong>{{$cities->boy_city}}
                                    <br />
                                    </td>
                                   
                                    
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <th>{{ __('keywords.ID')}}</th>
                        <th>{{ __('keywords.ID number')}}</th>
                        <th>{{ __('keywords.ID photo')}}</th>
                    </tr>
                    <tr>
                        <td>{{$cities->id_name}}</td>
                        <td>{{$cities->id_no}}</td>
                        <td><a class="btn btn-default" href="{{$url_aws.$cities->id_photo}}" target="_blank">{{ __('keywords.See_ID_Photo')}}</a></td>
                    </tr>
                </tbody>
            </table>
            </form>
        </div>
         <div class="modal-footer">
       <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">{{ __('keywords.Close')}}</button>
      </div>
    </div>
    
    <!-- end content-->
</div></div>
                            <!--  end card  -->
		</div>
	</div>

    @endforeach

@endsection

@section('postload-section')

<script>
  $('#datatableDefault').DataTable({
    dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-right'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'mr-auto'i><'mb-0'p>>",
     responsive: true,
    lengthMenu: false,
    autoWidth:true,
    select: true,
    scrollX: true,
    processing:true,
    ordering:true,
   paging:false,
    buttons: [
      { extend: 'print', className: 'btn btn-default' },
      { extend: 'csv', className: 'btn btn-default' }
    ]
  });
</script>

@endsection