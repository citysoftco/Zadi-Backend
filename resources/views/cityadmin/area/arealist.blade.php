@extends('cityadmin.layout.app')

@section('preload-section')
  <link href="{{url('assets/theme_assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
  <link href="{{url('assets/theme_assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
  <link href="{{url('assets/theme_assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
  <link href="{{url('assets/theme_assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
  <link href="{{url('assets/theme_assets/plugins/bootstrap-table/dist/bootstrap-table.min.css')}}" rel="stylesheet" />
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
<div class="card">    

<div class="card-header card-header-primary">
     <div class="row">
    <div class="col-md-6">
      <h1 class="card-title"><b>{{ __('keywords.Area')}} {{ __('keywords.List')}}</b></h1>
      </div>
       <div class="col-md-6">
      <a href="{{route('cityad-areadd')}}" class="btn btn-primary p-1 ml-auto" style="width:15%;float:right;padding: 3px 0px 3px 0px;">{{ __('keywords.Add')}}</a>
      </div>
       </div>
    </div>
    <div class="container"> <br> 

<table id="datatableDefault" class="table text-nowrap w-100 table-striped">
    <thead class="thead-light">
        <tr>
            <th class="text-center">#</th>
            <th>{{ __('keywords.Society')}} {{ __('keywords.Name')}}</th>
            <th>{{ __('keywords.City')}} {{ __('keywords.Name')}}</th>
            <th class="text-center">{{ __('keywords.Actions')}}</th>
        </tr>
    </thead>
    <tbody>
           @if(count($city)>0)
          @php $i=1; @endphp
          @foreach($city as $cities)
        <tr>
            <td class="text-center">{{$i}}</td>
            <td>{{$cities->society_name}}</td>
            <td>{{$cities->city_name}}</td>

            <td class="td-actions text-center">
                <a href="{{route('cityad-areaedit', $cities->society_id)}}" rel="tooltip" class="btn btn-success">
                    <i class="fa fa-edit"></i>
                </a>
               <a href="{{route('cityad-areadelete', $cities->society_id)}}"  onClick="return confirm('Are you sure you want to permanently remove this Society/Area.')" rel="tooltip" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
          @php $i++; @endphp
                 @endforeach
                  @else
                    <tr>
                      <td>{{ __('keywords.No data found')}}</td>
                      @for ($i = 1; $i < 4; $i++)
                        <td style="display:none"></td>    
                      @endfor
                    </tr>
                  @endif
    </tbody>
</table><br />
<div class="pull-right mb-1" style="float: right;">
{{ $city->links("pagination::bootstrap-4") }}
</div>
</div>
</div>
</div>
</div>
</div>
<div></div>
</div>
@endsection

@section('postload-section')
<script src="{{url('assets/theme_assets/plugins/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{url('assets/theme_assets/plugins/moment/min/moment.min.js')}}"></script>
<script src="{{url('assets/theme_assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{url('assets/theme_assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/theme_assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('assets/theme_assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('assets/theme_assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{url('assets/theme_assets/plugins/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{url('assets/theme_assets/plugins/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('assets/theme_assets/plugins/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('assets/theme_assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('assets/theme_assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('assets/theme_assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('assets/theme_assets/plugins/bootstrap-table/dist/bootstrap-table.min.js')}}"></script>
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