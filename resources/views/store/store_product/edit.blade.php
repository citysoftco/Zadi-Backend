@extends('store.layout.app')

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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('keywords.Edit')}} {{ __('keywords.Product')}}</h4>
                  <form class="forms-sample" action="{{route('storeUpdateProduct', $product->product_id)}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                </div>
                <div class="card-body">
 
                     <div class="row">
                      <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.Category') }}</label>
                                    <select name="cat_id" class="form-control">
                                        <option disabled selected>{{ __('keywords.Select') }} {{ __('keywords.Category') }}
                                        </option>
                                        @foreach ($category as $categorys)
                                            <option @if($categorys->cat_id == $product->cat_id) selected @endif value="{{ $categorys->cat_id }}">
                                                @if ($categorys->level == 1)
                                                    -
                                                    @endif @if ($categorys->level == 2)
                                                        --
                                                    @endif {{ $categorys->title }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Product')}} {{ __('keywords.Name')}}</label>
                          <input type="text" value="{{$product->product_name}}" name="product_name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.Weight') }}</label>
                                    <input type="number" value="{{$product->weight}}" name="weight" class="form-control" 
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.Unit') }} (gm/Kg/Ltrs/Ml/pcs)</label>
                                    <select name="unit" class="form-control">
                                        <option @if($product->unit == "gm") selected @endif value="gm">gm</option>
                                        <option @if($product->unit == "Kg") selected @endif value="Kg">Kg</option>
                                        <option @if($product->unit == "Ltrs") selected @endif value="Ltrs">Ltrs</option>
                                        <option @if($product->unit == "Ml") selected @endif value="Ml">Ml</option>
                                        <option @if($product->unit == "pcs") selected @endif value="pcs">pcs</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.Quantity') }}</label>
                                    <input value="{{$product->initial_quantity}}" type="number" name="quantity" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.barcode') }}</label>
                                    <input type="text" name="barcode" value="{{$product->barcode}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.MRP') }}</label>
                                    <input type="number" step="0.01" name="base_mrp" value="{{$product->base_mrp}}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.Price') }}</label>
                                    <input type="number" step="0.01" name="base_price" value="{{$product->base_price}}"
                                        class="form-control" required>
                                </div>
                            </div>
                        <div class="col-md-6">
                      <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Tags')}}</label>
                           <input type="text" data-role="tagsinput" class="form-control" name="tags">
                           <strong>Tags:</strong>
                          @foreach($tags as $tagssss)
                               @if($tagssss->product_id == $product->product_id)
                              <label class="label label-info">{{$tagssss->tag}}</label>
                              @endif
                          @endforeach
                        </div>
                        </div>
                    </div>
                     <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.Description') }}</label>
                                    <textarea type="text" name="description" class="form-control">{{$product->description}}</textarea>
                                </div>
                            </div>
             <img src="{{url($product->product_image)}}" alt="image" name="old_image" style="width:100px;height:100px; border-radius:50%">
                    {{-- <img src="{{$url_aws.$product->product_image}}" alt="image" name="old_image" style="width:100px;height:100px; border-radius:50%"> --}}
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form">
                          <label class="bmd-label-floating">{{ __('keywords.Product')}} {{ __('keywords.Image')}} <b> ({{ __('keywords.It Should Be Less Then 1000 KB')}})</b></label>
                          <input type="file"name="product_image" class="form-control" accept="image/*">
                        </div>
                      </div>

                    </div>
                    <div class="row">
                      
                        <label class="bmd-label-floating"> {{ __('keywords.Product')}} {{ __('keywords.Images')}} <b>({{ __('keywords.Each Should Be Less Then 1000 KB')}})</b></label><br>
                         <div class="col-md-12">
                         @foreach($images as $im)
                              
                               {{-- <img src="{{$url_aws.$im->image}}" alt="image" style="float:left;width:50px;height:50px; border-radius:50%;border:2px solid black"> --}}
                               <img src="{{url($im->image)}}" alt="image" style="float:left;width:50px;height:50px; border-radius:50%;border:2px solid black">
                            
                          @endforeach
                        </div>
                         <div class="col-md-12">
                        <div class="custom-file" style="margin-top:10px">
                            <input type="file" class="custom-file-input" id="customFile" name="images[]" accept="image/*" multiple/>
                            <label class="custom-file-label" for="customFile">{{__('keywords.Choose_File')}}</label>
                          </div>

                        </div>
                      </div><br>
                    <button type="submit" class="btn btn-primary pull-center">{{ __('keywords.Submit')}}</button>
                     <a href="{{route('storeproductlist')}}" class="btn">{{ __('keywords.Close')}}</a>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
			</div>
          </div>

@endsection
