@extends('admin.layout.app')

@section('preload-section')
<style>
    .a {
        width:500px !important;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: scroll;
}
</style>
@endsection

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
    
    <br>
   </div> 
<div class="col-lg-12">
<div class="card">    
<div class="card-header card-header-primary">
   <div class="row">
    <div class="col-md-4">
      <h1 class="card-title"><b>{{ __('keywords.Drivers')}}  {{ __('keywords.Notification')}} {{ __('keywords.List')}}</b></h1>
      </div>
       <div class="col-md-8">
           
      <a href="{{route('delete_all_driver_not')}}"  onClick="return confirm('Are you sure you want to permanently remove all Driver Notifications')" rel="tooltip" class="btn btn-danger p-1 ml-auto" style="float:right;"><i class="fa fa-trash"></i> {{ __('keywords.All')}}</a> &nbsp; &nbsp;
      
      </div>
       </div>
</div>
<div class="container"> <br>     
<table id="datatableDefault" class="table table-responsive table-striped text-nowrap w-100">
    <thead class="thead-light">
        <tr>
            <th class="text-center" style="width:10% !important">#</th>
            <th class="text-center" style="width:25% !important">{{ __('keywords.Title')}}</th>
             <th class="text-center" style="width:20% !important">{{ __('keywords.image')}}</th>
            <th  class="text-center" style="width:20% !important">{{ __('keywords.Driver')}}</th>
             <th  class="text-center" style="width:25% !important">{{ __('keywords.Notification Text')}}</th>
           
        </tr>
    </thead>
    <tbody>
           @if(count($notification)>0)
          @php $i=1; @endphp
          @foreach($notification as $not)
        <tr>
            <td class="text-center">{{$i}}</td>
            <td>{{$not->not_title}}</td>
            <td>@if($not->image != NULL)<img src="{{$url_aws.$not->image}}" alt="category image" style="width:50px; height:50px; border-radius:50%;"/>@else <p style="color:red"><b>No Image</b></p> @endif</td>
            <td>{{$not->boy_name}}</td>
           <td  class="truncate"><span class="a">{{$not->not_message}}</span></td>
          
           
        </tr>
          @php $i++; @endphp
                 @endforeach
                  @else
                    <tr>
                      <td colspan="5">{{ __('keywords.No data found')}}</td>
                      @for ($i = 1; $i < 5; $i++)
                        <td style="display:none"></td>    
                      @endfor
                    </tr>
                  @endif
    </tbody>
</table><br />
   <div class="pull-right mb-1" style="float: right;">
  {{ $notification->render("pagination::bootstrap-4") }}
</div>
</div>
</div>
</div>
</div>
</div>
<div>
</div>
</div>

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