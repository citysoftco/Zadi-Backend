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
      <h4 class="card-title ">{{ __('keywords.Store Earnings')}}</h4>
      <!--<p class="card-category">List Of Categories</p>-->
    </div>
<div class="container"> <br> 
<table id="datatableDefault" class="table text-nowrap w-100 table-striped">
    <thead class="thead-light">
        <tr>
            <th class="text-center">#</th>
            <th>{{ __('keywords.Store')}}</th>
            <th>{{ __('keywords.Address')}}</th>
            <th>{{ __('keywords.Total Revenue')}}</th>
            <th>{{ __('keywords.Already Paid')}}</th>
            <th>{{ __('keywords.Pending Balance')}}</th>
        </tr>
    </thead>
    <tbody>
      @if(count($total_earnings)>0)
      @php $i=1; @endphp
       @foreach($total_earnings as $total_earning)
        <tr>
          <td class="text-center">{{$i}}</td>
          <td>{{$total_earning->store_name}}<p style="font-size:14px">({{$total_earning->phone_number}})</p></td>
          <td>{{$total_earning->address}}</td>
          <td>{{round($total_earning->sumprice,2)}}</td>
        
          @if($total_earning->paid != NULL)
          <td>{{round($total_earning->paid,2)}}</td>
        @else
          <td>0</td>
        @endif

        @if($total_earning->paid != NULL)
          <td>{{round(($total_earning->sumprice - $total_earning->paid),2) }}</td>
        @else
          <td>{{round($total_earning->sumprice,2)}}</td>
        @endif

        </tr>      
        @php $i++; @endphp
       @endforeach
      @else
        <tr>
          <td>{{ __('keywords.No data found')}}</td>
          @for ($i = 1; $i < 6; $i++)
            <td style="display:none"></td>    
          @endfor
        </tr>
      @endif  
    </tbody>
</table><br />
<div class="pull-right mb-1" style="float: right;">
  {{ $total_earnings->render("pagination::bootstrap-4") }}
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