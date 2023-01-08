<html>
    <head>    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Invoice</title>
        <style>


.centered {
    text-align: center;
    align-content: center;
}



img {
    max-width: inherit;
    width: inherit;
}

@media print {
    .hidden-print,
    .hidden-print * {
        display: none !important;
    }
}  </style>

  @if (app()->getLocale() == 'ar')
        <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet" />
    @endif
    </head>
    <body>
        

        <br>
        <br>

    <div class="d-flex justify-content-center align-items-center">
    <h5>{{__("keywords.Date")}} : {{now()->toDateString()}}</h5>
    <br>
    <br>
    </div>
             <table  class="table">
             
    <thead class="">
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
      
    </tbody>
</table>
<br>
<h5 class="text-black">{{__("keywords.Total")}} = {{number_format($totalPrice)}}</h5>
<h5 class="text-black">{{__("keywords.Total Quantity")}} = {{number_format($totalQty)}}</h5>
<br>




    
<script>
    window.onload = ()=>{
        print();
    }
</script>
</body>
</html>