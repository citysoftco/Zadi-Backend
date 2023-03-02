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
                  <h4 class="card-title">{{ __('keywords.Add Image')}}</h4>
                  <form class="forms-sample" action="{{route('admin-images.store')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                </div>
                <div class="card-body">

                    <div class="row" style="display:none !important">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Parent Category')}}</label>
                          <select name="parent_id" class="form-control" required>
                              <option value="0">{{ __('keywords.no parent category')}}</option>
                          </select>
                        </div>
                      </div>
                    </div>

                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Image Name')}}</label>
                          <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
                        </div>
                      </div>
                           <div class="col-md-6">
                        <label class="bmd-label-floating">{{ __('keywords.Image')}}<b>({{ __('keywords.It Should Be Less Then 1000 KB')}})</b></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image" required/>
                            <label class="custom-file-label" for="customFile">{{__('keywords.Choose_File')}}</label>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form">
                          <label class="bmd-label-floating">{{ __('keywords.Description')}}</label>
                          <textarea name="description" class="form-control">{{old('description')}}</textarea>
                        </div>
                        </div>
                    </div>
                    
                    <br>
                    <button type="submit" class="btn btn-primary pull-center">{{ __('keywords.Submit')}}</button>
                    <a href="{{route('admin-images.index')}}" class="btn">{{ __('keywords.Close')}}</a>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
			</div>
          </div>

@endsection
