@extends('admin.layout.app')

@section ('content')
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
        <h4 class="card-title ">{{ __('keywords.Store List(Waiting for approval)')}}</h4>
    </div>
    <div class="container"> <br> 
      <table id="datatableDefault" class="table text-nowrap w-100 table-striped">
        <thead class="thead-light">
          <tr>
            <th class="text-center">#</th>
            <th>{{ __('keywords.Profile Pic')}}</th>
            <th>{{ __('keywords.Store Name')}}</th>
            <th>{{ __('keywords.City')}}</th>
            <th>{{ __('keywords.Mobile')}}</th>
            <th>{{ __('keywords.Email')}}</th>
            <th>{{ __('keywords.Admin Share')}}</th>
            <th>{{ __('keywords.Owner name')}}</th>
            <th>{{ __('keywords.Details')}}</th>
          </tr>
        </thead>
        <tbody>
          @if(count($city)>0)
           @php $i=1; @endphp
           @foreach($city as $cities)
            <tr>
              <td class="text-center">{{$i}}</td>
              <td><a href="{{$url_aws.$cities->store_photo}}"><img src="{{$url_aws.$cities->store_photo}}" style="width:50px;height:50px;border-radius:50%"  alt="image"></a></td>
              <td>{{$cities->store_name}}</td>
              <td>{{$cities->city}}</td>
              <td>{{$cities->phone_number}}</td>
              <td>{{$cities->email}}</td>
              <td>{{$cities->admin_share}} %</td>
              <td>{{$cities->employee_name}}</td>
              <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1{{$cities->id}}">{{ __('keywords.Details')}}</button>
              </td>
            </tr>      
            @php $i++; @endphp
           @endforeach
          @else
            <tr>
              <td>{{ __('keywords.No data found')}}</td>
              @for ($i = 1; $i<9; $i++)
                <td style="display:none"></td>
              @endfor
            </tr>
          @endif  
        </tbody>
      </table><br />
<div class="pull-right mb-1" style="float: right;">
  {{ $city->render("pagination::bootstrap-4") }}
</div>
</div>
</div>
</div>
</div>
</div>
<div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>  
      $(document).ready(function ($) {
        $('.image-link').magnificPopup({type:'image'});
      });
    </script>

@foreach($city as $cities)  
<div class="modal fade" id="exampleModal1{{$cities->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="container">
     
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title" id="exampleModalLabel"><b>{{$cities->store_name}} {{ __('keywords.Profile')}}</b> (@if($cities->store_status==1)
                                   <span style="color:green">{{ __('keywords.Active')}}</span>
                                    @else
                                   <span style="color:red"><b>Inactive</b></span>
                                    @endif)</h5>
    					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    						<span aria-hidden="true">&times;</span>
    					</button>
    			</div>
        <div class="material-datatables">
              <form role="form" method="post" action="" >
            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%" data-background-color="purple">

                
                <tbody>
                    <tr>
                        <td colspan="3">
                            <table class="table">
                                <tr>
                                    <td valign="top" style="width:100%">
                                    <strong> {{ __('keywords.Store Name')}} : </strong> {{$cities->store_name}}
                                    <br />
                                      <strong>{{ __('keywords.Owner Name')}} : </strong>{{$cities->employee_name}}<br/>
                                        <strong>{{ __('keywords.Contact')}} : </strong>{{$cities->phone_number}}<br/> 
                                    <strong>  {{ __('keywords.Email')}} : </strong>{{$cities->email}}
                                    <br />
                                    <strong>  {{ __('keywords.Time_Slot')}} : </strong>{{$cities->store_opening_time}} - {{$cities->store_closing_time}}
                                    <br />
                                    <strong>  {{ __('keywords.Address')}} : </strong>{{$cities->address}}
                                    <br />
                                     <strong> {{ __('keywords.Orders Per Time Slot')}} : </strong> {{$cities->orders}}
                                    <br />
                                      <strong>{{ __('keywords.Admin Share')}} : </strong>{{$cities->admin_share}} %<br/>
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
                        <td>{{$cities->id_type}}</td>
                        <td>{{$cities->id_number}}</td>
                        <td><a class="btn btn-default" href="{{$url_aws.$cities->id_photo}}" target="_blank">{{ __('keywords.See_ID_Photo')}}</a></td>
                    </tr>
                           <tr>
                                    <td valign="top" style="width:50%; float:left;">
                                     <a href="{{route('storeapproved', $cities->id)}}" button type="button" class="btn btn-success">
                                {{ __('keywords.Approve')}}
                                    </button></a>
                                     
                                    </td>
                                   <td valign="top" style="width:50%; float:right">
                                   <a href="{{route('storedelete', $cities->id)}}" button type="button" class="btn btn-danger">
                                       {{ __('keywords.Delete')}}
                                    </button></a>
                                    </td>
                                    
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
</div>
      @endforeach

    @endsection

@section('postload-section')
{{-- You must include files that have no direct efect on the load of the page and can be loaded meanwhile other tasks can be performed by user--}}
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