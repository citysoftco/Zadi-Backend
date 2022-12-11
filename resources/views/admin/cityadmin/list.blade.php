@extends('admin.layout.app')

@section('preload-section')
  
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
      <h5 class="card-title"><b>{{ __('keywords.CityAdminers')}} {{ __('keywords.List')}}</b></h5>
      </div>
       <div class="col-md-6">
      <a href="{{route('CityAdAdd')}}" class="btn btn-primary p-1 ml-auto" style="width:15%;float:right;padding: 3px 0px 3px 0px;">{{ __('keywords.Add')}}</a>
      </div>
       </div>
    </div>
    
<div class="container"><br> 
<table id="datatableDefault" class="table text-nowrap w-100 table-striped">
    <thead class="thead-light">
        <tr>
            <th> # </th>
            <th>{{ __('keywords.CityAdName')}}</th>
            <th>{{ __('keywords.CityAdPhone')}}</th>
            <th>{{ __('keywords.CityAdEmail')}}</th>
            <th>{{ __('keywords.CityAdDetails')}}</th>
            <th class="text-right">{{ __('keywords.CityAdActions')}}</th>
        </tr>
    </thead>
    <tbody>
           @if(count($cityadminers)>0)
          @php $i=1; @endphp
          @foreach($cityadminers as $d_boys)
        <tr>
            <td class="text-center">{{$i}}</td>
            <td>{{$d_boys->name}}</td>
           
            <td>{{$d_boys->phone}}</td>
       
            <td>{{$d_boys->email}}</td>
             <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1{{$d_boys->id}}">{{ __('keywords.Details')}}</button>
                                </td>    
            <td class="td-actions text-right">
                <a href="{{route('CityAdEdit',$d_boys->id)}}" rel="tooltip" class="btn btn-success">
                    <i class="fa fa-edit"></i>
                </a>
               <a href="{{route('CityAdDelete',$d_boys->id)}}" onClick="return confirm('Are you sure you want to permanently remove this Store.')" rel="tooltip" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
          @php $i++; @endphp
                 @endforeach
                  @else
                    <tr>
                      <td>{{ __('keywords.No data found')}}</td>
                      @for ($i = 1; $i<6; $i++)
                        <td style="display:none"></td>
                      @endfor
                    </tr>
                  @endif
    </tbody>
</table><br />
<div class="pull-right mb-1" style="float: right;">
{{ $cityadminers->links("pagination::bootstrap-4") }}
</div>
</div>
</div>
</div>
</div>
</div>
<div>
    </div>
@foreach($cityadminers as $admin_modal)  
<div class="modal fade" id="exampleModal1{{$admin_modal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="container">
     
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title" id="exampleModalLabel"><b>{{$admin_modal->name}} {{ __('keywords.Profile')}}</b></h5>
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
                            <strong> {{ __('keywords.CityAdName')}} : </strong> {{$admin_modal->name}}
                          <br />
                            <strong>{{ __('keywords.CityAdPhone')}} : </strong>{{$admin_modal->phone}}<br/> 
                          <br />
                            <strong>  {{ __('keywords.Address')}} : </strong>{{$admin_modal->address}}
                          <br />
                            <strong>{{ __('keywords.CityAdEmail')}} : </strong>{{$admin_modal->email}}<br/>
                          </td>     
                      </tr>
                    </table>
                  </td>
                </tr>
                    <tr>
                        <th>{{ __('keywords.CityAdName')}}</th>
                        <th>{{ __('keywords.CityAdPhone')}}</th>
                        <th>{{ __('keywords.ID photo')}}</th>
                    </tr>
                    <tr>
                        <td>{{$admin_modal->name}}</td>
                        <td>{{$admin_modal->phone}}</td>
                        <td><a class="btn btn-default" href="{{$url_aws.$admin_modal->id_photo}}" target="_blank">{{ __('keywords.See_ID_Photo')}}</a></td>
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