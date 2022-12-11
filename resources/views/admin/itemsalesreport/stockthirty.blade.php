@extends('admin.layout.app')

@section('preload-section')
<style>
.material-icons{
  margin-top:0px !important;
  margin-bottom:0px !important;
}
.dt-buttons > button.btn.btn-secondary {
  background-color: grey;
  margin: 1px;
  border-radius: 5px;
  color: white;
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
   
<div class="card">    
<div class="card-header card-header-primary">
      <h4 class="card-title ">{{ __('keywords.Total')}} {{ __('keywords.Item Sales Report')}} ({{ __('keywords.Last 30 Days')}})</h4>
    </div>

<div class="container"> <br> 
<table id="datatableDefault" class="table text-nowrap w-100 table-striped">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>{{ __('keywords.Product')}} {{ __('keywords.Name')}}</th>
            <th>{{ __('keywords.Stock')}}</th>
        </tr>
    </thead>
    <tbody>
           @if(count($ord)>0)
          @php $i=1; @endphp
          @foreach($ord as $ords)
        <tr>
            <td class="text-center">{{$i}}</td>
            <td>{{$ords->product_name}}</td>
            
            <td>@foreach($det as $dets)
                @if($dets->product_id == $ords->product_id)
                {{$dets->quantity}}{{$dets->unit}} * {{$dets->count* $dets->sumqty}}<b>({{$dets->quantity*$dets->count*$dets->sumqty}}{{$dets->unit}})</b> |
                @endif
                @endforeach</td>

            
        </tr>
          @php $i++; @endphp
                 @endforeach
                  @else
                    <tr>
                      <td>{{ __('keywords.No data found')}}</td>
                      @for ($i = 1; $i < 3; $i++)
                        <td style="display:none"></td>    
                      @endfor
                    </tr>
                  @endif
    </tbody>
</table><br />
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