
@extends('admin.layout.app')

@section('preload-section')
@if($mapset->mapbox == 1 && $mapset->google_map == 0)
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
<style>
        * {
            box-sizing: border-box;
        }

        body {
            font: 16px Arial;
        }

        /*the container must be positioned relative:*/
        .autocomplete {
            position: relative;
            display: inline-block;
        }

        input {
            border: 1px solid transparent;
            background-color: #f1f1f1;
            padding: 10px;
            font-size: 16px;
        }

        input[type=text] {
            width: 100%;
        }

        input[type=submit] {
            background-color: DodgerBlue;
            color: #fff;
            cursor: pointer;
        }

        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>
    @endif
  @if($mapset->mapbox == 0 && $mapset->google_map == 1)  
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <style>
      #map {
        height: 100%;
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
    </style>
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
                  <form class="forms-sample" action="{{route('store-subscription-renewal-submit')}}" method="post" enctype="multipart/form-data">
                      {{csrf_field()}}
                    <input type="text" name="store_id" value="{{$storeId}}" hidden>
                      <div class="row">
                      <div class="col-md-4"> 
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('keywords.Subscription Plan')}}</label>
                         <select class="form-control" name="plan_id" id="">
                            <option  value="0">غير مشترك</option>
                          @foreach ($subscriptionPlans as $subscriptionPlan )
                            <option @if($subscriptionPlan->id == $storeSubscription->plan_id) selected @endif value="{{$subscriptionPlan->id}}">{{$subscriptionPlan->name}} = {{number_format($subscriptionPlan->price)}}</option>
                          @endforeach

                         </select>
                        </div>
                      </div>
                    </div>
                      
                   


                       {{-- <div class="row">
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

                    </div></div><br> --}}
                    <button type="submit" class="btn btn-primary pull-center">{{ __('keywords.Submit')}}</button>
                     <a href="{{route('storeclist')}}" class="btn">{{ __('keywords.Close')}}</a>
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
<script>
    var geocodingClient = mapboxSdk({accessToken: '{{$mapbox->mapbox_api}}'});

    function autocompleteSuggestionMapBoxAPI(inputParams, callback) {
        geocodingClient.geocoding.forwardGeocode({
            query: inputParams,
            /* countries: ['US'], */
            autocomplete: true,
            limit: 5,
        })
            .send()
            .then(response => {
                const match = response.body;
                callback(match);
            });
    }

    function autocompleteInputBox(inp) {
        var currentFocus;
        inp.addEventListener("input", function (e) {
            var a, b, i, val = this.value;
            closeAllLists();
            if (!val) {
                return false;
            }
            currentFocus = -1;
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            this.parentNode.appendChild(a);

            // suggestion list MapBox api called with callback
            autocompleteSuggestionMapBoxAPI($('#myInput').val(), function (results) {
                results.features.forEach(function (key) {
                    b = document.createElement("DIV");
                    b.innerHTML = "<strong>" + key.place_name.substr(0, val.length) + "</strong>";
                    b.innerHTML += key.place_name.substr(val.length);
                    b.innerHTML += "<input type='hidden' data-lat='" + key.geometry.coordinates[1] + "' data-lng='" + key.geometry.coordinates[0] + "'  value='" + key.place_name + "'>";
                    b.addEventListener("click", function (e) {
                        let lat = $(this).find('input').attr('data-lat');
                        let long = $(this).find('input').attr('data-lng');
                        inp.value = $(this).find('input').val();
                        $(inp).attr('data-lat', lat);
                        $(inp).attr('data-lng', long);
                        document.getElementById("lat").value = lat;
                        document.getElementById("lng").value = long;
                        closeAllLists();
                        
                    });
                    a.appendChild(b);
                });
            })
        });


        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function (e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });

        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }

        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }

        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }

        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }

    autocompleteInputBox(document.getElementById("myInput"));
</script>

@endif

@if($mapset->mapbox == 0 && $mapset->google_map == 1)          
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
{{-- javascript code --}}
<script src="https://maps.googleapis.com/maps/api/js?key={{$map}}&libraries=places&callback=initMap" async defer></script>
<script>
   $(document).ready(function() {
        $("#lat_area").addClass("d-none");
        $("#long_area").addClass("d-none");
   });
</script>
<script>
   function initMap() {
       var input = document.getElementById('autocomplete');
       var autocomplete = new google.maps.places.Autocomplete(input);
       autocomplete.addListener('place_changed', function() {
           var place = autocomplete.getPlace();
           $('#latitude').val(place.geometry['location'].lat());
           $('#longitude').val(place.geometry['location'].lng());
           $("#lat_area").removeClass("d-none");
           $("#long_area").removeClass("d-none");
       });
   }
</script> 
    @endif    
  
  @endsection 
