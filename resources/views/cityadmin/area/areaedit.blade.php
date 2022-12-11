@extends('cityadmin.layout.app')
 
@section('preload-content')
    @if($mapset->mapbox == 1 && $mapset->google_map == 0)
        @include('cityadmin.plugins.mapbox_preload')
    @else
        @include('cityadmin.plugins.gmaps_preload')
    @endif
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
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('keywords.Edit')}} {{ __('keywords.Area')}}</h4>
                  <form class="forms-sample" action="{{route('cityad-areaupdate', $town->society_id)}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                </div>
                <div class="card-body">
                        <input type="hidden" name="society_id" value="{{$town->society_id}}">
                    <div class="form-group">
                    <label for="exampleFormControlSelect3">{{ __('keywords.City')}}</label>
                    <input type="text" name="city" class="form-control" value="{{$city->city_name}}" readonly style="background-color: #b0c0d1;">
                    
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                         @if($mapset->mapbox == 0 && $mapset->google_map == 1)
                         <div class="row">                    
                            <div class="col-md-12">
                           <div class="form-group">
                            <label for="autocomplete"> {{ __('keywords.Area')}} </label>
                            <input type="text" name="society" id="autocomplete" value="{{$town->society_name}}" class="form-control">
                        </div>
                          </div>
                      </div>
                      @endif
                     @if($mapset->mapbox == 1 && $mapset->google_map == 0) 
                      <div class="row">                    
                            <div class="col-md-12">
                           <div class="form-group">
                            <label for="autocomplete"> {{ __('keywords.Area')}} </label>
                       <div class="autocomplete" style="width:100%;">
                           <input id="lng" type="hidden" name="lng">
                              <input id="lat" type="hidden" name="lat">
                            <input id="myInput" type="text" name="society" value="{{$town->society_name}}"  class="form-control">
                             
                        </div>
                         </div>
                          </div>
                      </div>
                      @endif
                        
                        
                      </div>

                    </div>
                    <button type="submit" class="btn btn-primary pull-center">{{ __('keywords.Submit')}}</button>
                    <a href="{{route('cityad-arealist')}}" class="btn btn-secondary">{{__('keywords.Cancel')}}</a>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
			</div>
          </div>

@endsection

@section('postload-section')
@if($mapset->mapbox == 1 && $mapset->google_map == 0)
        @include('cityadmin.plugins.mapbox_postload')
    @else
        @include('cityadmin.plugins.gmaps_postload')
    @endif
@endsection