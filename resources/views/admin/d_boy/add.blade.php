@extends('admin.layout.app')

@section('preload-section')
	<link href="{{url('assets/select/styles/multiselect.css')}}" rel="stylesheet"/>
	<script src="{{url('assets/select/scripts/multiselect.min.js')}}"></script>
	<style>
		/* example of setting the width for multiselect */
		#testSelect1_multiSelect {
			width: 100%;
		}
		.multiselect-wrapper .multiselect-list {
    padding: 5px;
    min-width: 91%;
}
	</style>

@if($mapset->mapbox == 1 && $mapset->google_map == 0)
  @include('admin.plugins.mapbox_preload')
@else
  @include('admin.plugins.gmaps_preload')
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
                  <h4 class="card-title">{{ __('keywords.Add')}} {{ __('keywords.Delivery Boy')}}</h4>
                  <form class="forms-sample" action="{{route('AddNewD_boy')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                </div>
                <div class="card-body">
 
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Boy Name')}}</label>
                          <input type="text" name="boy_name" class="form-control"  value="{{old('boy_name')}}" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Boy Phone')}}</label>
                          <input type="text" name="boy_phone" class="form-control"  value="{{old('boy_phone')}}" required>
                        </div>
                      </div>
                    </div>
                     
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Password')}}</label>
                          <input type="text" name="password" class="form-control"  value="{{old('password')}}" required>
                        </div>
                      </div>
                    
                      <div class="col-md-6">
                        <div class="form-group">
                             <label class="bmd-label-floating">{{ __('keywords.Select City')}}</label>
                          <select name="city" class="form-control" required>
                              <option disabled selected>{{ __('keywords.Select City')}}</option>
                              @foreach($city as $cities)
                              <option value="{{$cities->city_name}}">{{$cities->city_name}}</option>
                              @endforeach
                         </select>
                        </div>
                    </div>
                    </div>
                     <div class="row">
                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Select')}} {{ __('keywords.ID')}}</label>
                            <select name="id_name" class="form-control" required>
                               <option disabled selected>{{ __('keywords.Select')}} {{ __('keywords.ID')}}</option>
                              @foreach($id_types as $taxes) 
                              <option value="{{$taxes->name}}">{{$taxes->name}}</option>
                               @endforeach
                          </select>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.ID Number')}}</label>
                          <input type="text" name="id_no" class="form-control" value="{{old('id_no')}}" required>
                        </div>
                      </div>
                     <div class="col-md-6">
                        <label class="bmd-label-floating">{{ __('keywords.ID')}} {{ __('keywords.Image')}}</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="images" accept="image/png, image/jpeg"/ required>
                            <label class="custom-file-label" for="customFile">{{__('keywords.Choose_File')}}</label>
                          </div>
                      </div>
                    </div>
                     @if($mapset->mapbox == 0 && $mapset->google_map == 1)
                         <div class="row">                    
                            <div class="col-md-12">
                           <div class="form-group">
                            <label for="autocomplete"> {{ __('keywords.Boy Address')}} </label>
                            <input type="text" name="boy_loc" id="autocomplete" class="form-control" required>
                        </div>
                          </div>
                      </div>
                      @endif
                     @if($mapset->mapbox == 1 && $mapset->google_map == 0) 
                      <div class="row">                    
                            <div class="col-md-12">
                           <div class="form-group">
                            <label for="autocomplete"> {{ __('keywords.Boy Address')}} </label>
                       <div class="autocomplete" style="width:100%;">
                           <input id="lng" type="hidden" name="lng">
                              <input id="lat" type="hidden" name="lat">
                            <input id="myInput" type="text" name="boy_loc" placeholder="address" required>
                        </div>
                         </div>
                          </div>
                      </div>
                      @endif
                      <div class="form-group">
                      <label class="bmd-label-floating" for="exampleInputName1">{{ __('keywords.All_Stores')}}</label>
                        <select id='testSelect1'  class="form-control" name="selectedstore[]" multiple>
                              @foreach($stores as $category)
                           <option value="<?= $category->id ?>"><?= $category->store_name ?>
                                </option>
                          @endforeach
                      </select>

                        </div>
                 
                    <br>
                
                    <button type="submit" class="btn btn-primary pull-center">{{ __('keywords.Submit')}}</button>
                    <a href="{{route('d_boylist')}}" class="btn">{{ __('keywords.Close')}}</a>
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
  @include('admin.plugins.mapbox_postload')
@else
  @include('admin.plugins.gmaps_postload')
@endif

  <script>
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
