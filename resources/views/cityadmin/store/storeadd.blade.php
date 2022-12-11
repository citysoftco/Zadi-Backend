
@extends('cityadmin.layout.app')

@section('preload-section')

@if($mapset->mapbox == 1 && $mapset->google_map == 0)
  @include('cityadmin.plugins.mapbox_preload')
@else
  @include('cityadmin.plugins.gmaps_preload')
@endif

@endsection

@section ('content')

<div class="row">
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
                  <h4 class="card-title">{{ __('keywords.Store Profile')}}</h4>
                </div>
                <div class="card-body">
                  <form class="forms-sample" action="{{route('storeadd')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}

                     <div class="row">
                      <div class="col-md-12">
                           <label class="bmd-label-floating">{{ __('keywords.Store Image')}} <b>({{ __('keywords.It Should Be Less Then 1000 KB')}})</b></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image" accept="image/*" required/>
                            <label class="custom-file-label" for="customFile">{{__('keywords.Choose_File')}}</label>
                          </div>
                        
                      </div>
                    </div>
  
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Store Name')}}</label>
                          <input type="text" name="store_name" class="form-control" value="{{old('store_name')}}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Employee Name')}}</label>
                          <input type="text" name="emp_name" class="form-control"  value="{{old('emp_name')}}">
                        </div>
                      </div>
                       
                     <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Store Number')}}</label>
                          <input type="number" name="number" class="form-control" value="{{old('number')}}">
                        </div>
                      </div>
                      
                      
                    </div>
                    
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Admin Share')}} (%)</label>
                          <input type="number" name="share" class="form-control" value="{{old('share')}}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Email')}}</label>
                          <input type="text" name="email" class="form-control"  value="{{old('email')}}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Password')}}</label>
                          <input type="text" name="password" class="form-control" value="{{old('password')}}">
                        </div>
                      </div>
                    </div>
                      
                    <div class="row">
                        <div class="col-md-4">
                        <div class="form">
                           <label class="bmd-label-floating"> {{ __('keywords.Select ID')}}</label>
                          <select name="id_name" class="form-control">
                              <option disabled selected>{{ __('keywords.ID')}}</option>
                              @foreach($id as $ids)
                              <option value="{{$ids->name}}">{{$ids->name}}</option>
                              @endforeach
                         </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>{{ __('keywords.ID Number')}}</label><br>
                          <input type="number" name="id_numb" class="form-control" placeholder="ID number">
                        </div>
                      </div>
                       <div class="col-md-4">
                        <label class="bmd-label-floating">{{ __('keywords.ID')}} {{ __('keywords.Image')}} <b>({{ __('keywords.It Should Be Less Then 1000 KB')}})</b></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="id_img" accept="image/*"/>
                            <label class="custom-file-label" for="customFile">{{__('keywords.Choose_File')}}</label>
                          </div>
                      </div>
                    </div><br>
                    
                     <div class="row">
                        <div class="col-md-6">
                        <div class="form">
                           <label class="bmd-label-floating"> {{ __('keywords.Select City')}}</label>
                          <select name="city" class="form-control">
                              <option disabled selected>{{ __('keywords.City')}}</option>
                              @foreach($city as $cities)
                              <option value="{{$cities->city_name}}">{{$cities->city_name}}</option>
                              @endforeach
                         </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>{{ __('keywords.Delivery Range')}} (KM)</label><br>
                          <input type="number" name="range" class="form-control" placeholder="Delivery Range in KM"  value="{{old('range')}}">
                        </div>
                      </div>
                    </div><br>
                    @if($mapset->mapbox == 0 && $mapset->google_map == 1)
                         <div class="row">                    
                            <div class="col-md-12">
                           <div class="form-group">
                            <label for="autocomplete"> {{ __('keywords.Store Address')}} </label>
                            <input type="text" name="address" id="autocomplete" class="form-control" value="{{old('address')}}">
                        </div>
                          </div>
                      </div>
                      @endif
                     @if($mapset->mapbox == 1 && $mapset->google_map == 0) 
                      <div class="row">                    
                            <div class="col-md-12">
                           <div class="form-group">
                            <label for="autocomplete"> {{ __('keywords.Store Address')}} </label>
                       <div class="autocomplete" style="width:100%;">
                           <input id="lng" type="hidden" name="lng">
                              <input id="lat" type="hidden" name="lat">
                            <input id="myInput" type="text" name="address" placeholder="address"  value="{{old('address')}}">
                             
                        </div>
                         </div>
                          </div>
                      </div>
                      @endif

                       <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>{{ __('keywords.Orders')}}</label><br>
                          <input type="number" name="orders" class="form-control" placeholder="Order Per Time Slot"  value="{{old('orders')}}">
                        </div>
                      </div>
                    </div><br>
                       <div><b>{{ __('keywords.Time Slot')}}</b><br><br>
                      <div class="row"><br>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>{{ __('keywords.Start Time')}}</label>
                          <input type="time" name="start_time" class="form-control" value="{{old('start_time')}}">
                        </div>
                      </div>
                     <div class="col-md-4">
                        <div class="form-group">
                          <label>{{ __('keywords.End Time')}}</label>
                          <input type="time" name="end_time" class="form-control"  value="{{old('end_time')}}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>{{ __('keywords.Time Slot Interval')}}</label>
                          <input type="number" name="interval" class="form-control" value="{{old('interval')}}">
                        </div>
                      </div>

                    </div></div><br>
                    <button type="submit" class="btn btn-primary pull-center">{{ __('keywords.Submit')}}</button>
                     <a href="{{route('cityad-storelist')}}" class="btn">{{ __('keywords.Close')}}</a>
                    <div class="clearfix"></div>
                  
                </div>
              </div>
            </div>
			</div>
          </div>
          </form>

  @endsection 

@section('postload-section')

@if($mapset->mapbox == 1 && $mapset->google_map == 0)
    @include('cityadmin.plugins.mapbox_postload')
@else
    @include('cityadmin.plugins.gmaps_postload')
@endif

@endsection
