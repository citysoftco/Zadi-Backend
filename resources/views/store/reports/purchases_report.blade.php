@extends('store.layout.app')
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
      <h4 class="card-title ">{{__("keywords.Purchases Report")}}</h4>
    </div>
        <div class="card-header card-header-secondary">
      <form class="forms-sample" action="{{ route('purchases_report.post') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{ __('keywords.From Date') }}</label><br>
                                        <input  type="date" value="{{$fromDate}}" name="from_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{ __('keywords.To Date') }}</label><br>
                                        <input type="date" value="{{$toDate}}" name="to_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4"><br>
                                    <div class="form-group">
                                        <label></label><br>
                                        <button type="submit" value="SUBMIT"
                                            class="btn btn-primary">{{ __('keywords.Show Purchases') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form> 
                               </div>


<div class="container"> <br> 
       <a target="_blank"  href="{{route('print_purchases_report',[$fromDate,$toDate])}}" class="btn btn-dark offset-1">{{__("keywords.Print")}}</a>

<table id="datatableDefault" class="table text-nowrap w-100 table-striped">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>{{ __('keywords.Product Name')}}</th>
             <th>{{ __('keywords.Category')}}</th>
            <th>{{ __('keywords.Quantity')}}</th>    
             <th>{{ __('keywords.Unit')}}</th>
            <th>{{ __('keywords.Product Price')}}</th>
            <th>{{ __('keywords.Total Price')}}</th>
            <th>{{ __('keywords.Delivery Date')}}</th>

        </tr>
    </thead>
    <tbody>
        @php $i=1; 
          $totalPrice = 0;
          $totalQty = 0;
          @endphp
           @if(count($orders)>0)
        
          @foreach ($orders as $order )
        <tr>
            <td class="text-center">{{$i}}</td>
            <td>{{$order->product_name}}</td>
            <td>{{$order->category_name}}</td>
            <td>{{number_format($order->qty)}}</td>
            <td>{{$order->unit}}</td>
            <td>{{number_format($order->base_price)}}</td>
            <td>{{number_format($order->total_price)}}</td>
            <td>{{$order->delivery_date}}</td>
              
        </tr>
          @php 
          $i++;
          $totalPrice += $order->total_price;
          $totalQty += $order->qty
           @endphp
              @endforeach
          @endif
                  {{-- @else
                    <tr>
                      <td>{{ __('keywords.No data found')}}</td>
                      @for ($i = 1; $i < 3; $i++)
                        <td style="display:none"></td>    
                      @endfor
                    </tr>
                  @endif --}}
    </tbody>
</table>
<br>
<h1 class="text-black">{{__("keywords.Total")}} = {{number_format($totalPrice)}}</h1>
<h1 class="text-black">{{__("keywords.Total Quantity")}} = {{number_format($totalQty)}}</h1>
<br>

</div>  
</div>
</div>
</div>
</div>
<div>
    </div>

    @endsection
    
</div>

