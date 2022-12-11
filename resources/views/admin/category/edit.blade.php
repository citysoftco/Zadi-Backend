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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('keywords.Edit')}} {{ __('keywords.Category')}}</h4>
                  <form class="forms-sample" action="{{route('UpdateCategory', $cat->cat_id)}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                </div>
                <div class="card-body">
                     <div class="row" align="center">
                      <img src="{{$url_aws.$cat->image}}" alt="image" name="old_image" style="width:100px;height:100px; border-radius:50%">
                      </div>
                      <div class="row" style="display:none !important">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Parent Category')}}</label>
                          <select name="parent_id" class="form-control">
                              <option value="0">{{ __('keywords.no parent category')}}</option>
                          </select>
                        </div>
                      </div>
                    </div>

                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Title')}}</label>
                          <input type="text" value="{{$cat->title}}" name="cat_name" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Tax')}}</label>
                          <select name="type" class="form-control">
                              
                              <option value="1" @if($cat->tax_type==1)selected @endif>{{ __('keywords.Exclusive')}}</option>
                               <option value="0" @if($cat->tax_type==0)selected @endif>{{ __('keywords.Inclusive')}}</option>
                          </select>
                        </div>
                      </div>
                    </div>
                   
                     <div class="row">
                       <div class="col-md-6">
                        <label class="bmd-label-floating">{{ __('keywords.Image')}}<b>({{ __('keywords.It Should Be Less Then 1000 KB')}})</b></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="cat_image" accept="image/*"/>
                            <label class="custom-file-label" for="customFile">{{__('keywords.Choose_File')}}</label>
                          </div>
                      </div>
                         <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Tax Name')}}</label>
                            <select name="tax" class="form-control">
                               
                              @foreach($tax as $taxes) 
                              <option value="{{$taxes->tax_id}}" @if($cat->tx_id == $taxes->tax_id)selected @endif>{{$taxes->name}}</option>
                               @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                       <div class="row">
                      <div class="col-md-6">
                        <div class="form">
                          <label class="bmd-label-floating">{{ __('keywords.Description')}}</label>
                          <textarea name="desc" class="form-control">{{$cat ->description}}</textarea>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Tax Percentage')}}</label>
                          <input type="number" name="tax_per"  value="{{$cat->tax_per}}" step="0.01"  class="form-control">
                        </div>
                      </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary pull-center">{{ __('keywords.Submit')}}</button>
                    <a href="{{route('catlist')}}" class="btn">{{ __('keywords.Close')}}</a>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
			</div>
          </div>
          
  @endsection
