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
      <h4 class="card-title ">Title</h4>
    </div>
        <div class="card-header card-header-secondary">
   
       </div>
<div class="container"> <br> 
<table id="datatableDefault" class="table text-nowrap w-100 table-striped">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>{{ __('keywords.Product Name')}}</th>
            <th>{{ __('keywords.Quantity')}}</th>
            <th>{{ __('keywords.Product Price')}}</th>
            <th>{{ __('keywords.Total')}}</th>
            <th>{{ __('keywords.Category')}}</th>

        </tr>
    </thead>
    <tbody>
           {{-- @if(count($ord)>0) --}}
          @php $i=1; @endphp
        <tr>
            <td class="text-center">{{$i}}</td>
            <td>سكر 10 كيلو</td>
            <td>{{number_format(300)}}</td>
            <td>{{number_format(1000)}}</td>
            <td>{{number_format(30000)}}</td>
            <td>سكر</td>

            
        </tr>
          @php $i++; @endphp
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
</div>  
</div>
</div>
</div>
</div>
<div>
    </div>

    @endsection
    
</div>