@extends('admin.layout.app')

@section('preload-section')
<link href="{{url('assets/select/styles/multiselect.css')}}" rel="stylesheet"/>
<script src="{{url('assets/select/scripts/multiselect.min.js')}}"></script> 
<style>
#testSelect1_multiSelect {
	width: 100%;
}
.multiselect-wrapper .multiselect-list {
  padding: 5px;
  min-width: 91%;
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
            <div class="col-md-5">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('keywords.Select')}} {{ __('keywords.Products')}}</h4>
                  
         <form class="forms-sample" action="{{route('trendadded_product')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                </div>
                <div class="card-body">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Select Products Which You have to set on Trending Search')}}</label><br>
                        <select id='testSelect1' name="prod[]"  class="form-control" multiple>
                          @foreach($products as $product)
                          <option value="{{$product->varient_id}}">{{$product->product_name}}({{$product->quantity}}{{$product->unit}})</option>
                          @endforeach
                        </select>

                        </div>
                      </div>

                    </div>

                    <button type="submit" class="btn btn-primary pull-center">{{ __('keywords.Submit')}}</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
             <div class="col-md-7">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('keywords.Selected Products')}}</h4>
                 </div>
                     <table id="datatableDefault" class="table text-nowrap w-100">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th style="width:33.33%">{{ __('keywords.Product')}} {{ __('keywords.Name')}}</th>
                                <th class="text-right" style="width:33.33%">{{ __('keywords.Actions')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                             
                              @if(count($selected)>0)
                      @php $i=1; @endphp
                      @foreach($selected as $sel)
                    <tr>
                        <td class="text-center">{{$i}}</td>
                        <td><p>{{$sel->product_name}}({{$sel->quantity}} {{$sel->unit}})</p></td>
                        <td class="td-actions text-right">
                           <a href="{{route('trenddelete_product1', $sel->trend_id)}}" rel="tooltip" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
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
                    </table>  
                </div>
              </div>
            </div>
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

	document.multiselect('#testSelect1')
		.setCheckBoxClick("checkboxAll", function(target, args) {
			console.log("Checkbox 'Select All' was clicked and got value ", args.checked);
		})
		.setCheckBoxClick("1", function(target, args) {
			console.log("Checkbox for item with value '1' was clicked and got value ", args.checked);
		});

	function enable() {
		document.multiselect('#testSelect1').setIsEnabled(true);
	}

	function disable() {
		document.multiselect('#testSelect1').setIsEnabled(false);
	}

</script>

@endsection

