@extends('store.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        @if (is_array(session()->get('success')))
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
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first() }}
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
                        <h4 class="card-title">{{ __('keywords.Edit Zone') }}</h4>
                        <form class="forms-sample" action="{{ route('store-zones.update',$zone->id) }}"
                            method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @method("put")
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.Zone Name') }}</label>
                                    <input type="text" required value="{{ $zone->name }}" name="name"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">{{ __('keywords.Status') }}</label>
                                    <select name="status" class="form-control" required>
                                        <option disabled>{{ __('keywords.Status') }}
                                        </option>
                                        <option @if($zone->status == 1) selected @endif value="1">
                                            {{ __('keywords.Account On') }}
                                        </option>
                                        <option @if($zone->status == 0) selected @endif value="0">
                                            {{ __('keywords.Account Off') }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                     <div class="row">
                       <h1 class="col-md-12">{{__("keywords.Set Zone")}}</h1>
                        <div class="col-md-6">
                            <div class="instructions-image mt-1">
                                    <img style="width:400px" src={{asset('assets/img/instructions.gif')}} alt="instructions">
                                </div>
                        </div>
                        <div class="map-warper overflow-hidden rounded col-md-6">
                                    <input id="pac-input" class="controls rounded initial-8" title="{{__('search_your_location_here')}}" type="text" placeholder="{{__('search_here')}}"/>
                                    <div id="map-canvas" class="h-100 m-0 p-0"></div>
                        </div>
                        <div hidden class="form-group mb-3">
                                    <label class="input-label"
                                        for="exampleFormControlInput1">{{__('Coordinates')}}<span class="input-label-secondary" title="{{__('draw_your_zone_on_the_map')}}">{{__('draw_your_zone_on_the_map')}}</span></label>
                                        <textarea type="text" rows="8" name="coordinates"  id="coordinates" class="form-control" readonly></textarea>
                        </div>
                    </div>
                        <br>

                        <button type="submit" class="btn btn-primary">{{ __('keywords.Save') }}</button>
                        <a href="{{ route('store-zones.index') }}"
                            class="btn">{{ __('keywords.Close') }}</a>
                        <div class="clearfix"></div>
                    </div><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.45.8&key={{ config('settings.map_api_key') }}&libraries=drawing,places"></script>
<script>
    auto_grow();
    function auto_grow() {
        let element = document.getElementById("coordinates");
        element.style.height = "5px";
        element.style.height = (element.scrollHeight)+"px";
    }

</script>
<script>
        var myLatlng = { 100,100 };

        const map2 = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: myLatlng,
        });
        var zonePolygon = null;
        let infoWindow = new google.maps.InfoWindow({
            content: "Click the map to get Lat/Lng!",
            position: myLatlng,
        });
        var bounds = new google.maps.LatLngBounds();

        var marker = new google.maps.Marker({
            position:myLatlng,
            title: "Current Location",
        });

        function initMap() {
        marker.setMap(map2);
            // infoWindow.open(map2);

            // Create the search box and link it to the UI element.
            const input = document.getElementById("pac-input");
            //console.log(input);
            const searchBox = new google.maps.places.SearchBox(input);
            map2.controls[google.maps.ControlPosition.TOP_CENTER].push(input);
            let markers = [];
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();

                if (places.length == 0) {
                return;
                }
                // Clear out the old markers.
                markers.forEach((marker) => {
                marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();
                places.forEach((place) => {
                if (!place.geometry || !place.geometry.location) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                const icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25),
                };
                // Create a marker for each place.
                markers.push(
                    new google.maps.Marker({
                    map2,
                    icon,
                    title: place.name,
                    position: place.geometry.location,
                    })
                );

                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
                });
                map2.fitBounds(bounds);

            });
        }
        initMap();


        $(document).on('ready', function() {
                    map2.addListener('click', function(mapsMouseEvent) {
                        infoWindow.close();
                        // Create a new InfoWindow.
                        infoWindow = new google.maps.InfoWindow({
                            position: mapsMouseEvent.latLng,
                            content: JSON.stringify(mapsMouseEvent.latLng.toJSON(),
                                null, 2),
                        });
                        var coordinates = JSON.stringify(mapsMouseEvent.latLng.toJSON(), null,
                            2);
                        var coordinates = JSON.parse(coordinates);

                        document.getElementById('latitude').value = coordinates['lat'];
                        document.getElementById('longitude').value = coordinates['lng'];


                          marker.setMap(null);

                           marker = new google.maps.Marker({
                              position: {lat:coordinates['lat'],lng:coordinates['lng']},
                              title: "Current Location",
                                });

                         marker.setMap(map2);


                        // infoWindow.open(map2);


                    });
        });
    </script>

<script>
    var map; // Global declaration of the map
    var lat_longs = new Array();
    var drawingManager;
    var lastpolygon = null;
    var bounds = new google.maps.LatLngBounds();
    var polygons = [];


    function resetMap(controlDiv) {
        // Set CSS for the control border.
        const controlUI = document.createElement("div");
        controlUI.style.backgroundColor = "#fff";
        controlUI.style.border = "2px solid #fff";
        controlUI.style.borderRadius = "3px";
        controlUI.style.boxShadow = "0 2px 6px rgba(0,0,0,.3)";
        controlUI.style.cursor = "pointer";
        controlUI.style.marginTop = "8px";
        controlUI.style.marginBottom = "22px";
        controlUI.style.textAlign = "center";
        controlUI.title = "Reset map";
        controlDiv.appendChild(controlUI);
        // Set CSS for the control interior.
        const controlText = document.createElement("div");
        controlText.style.color = "rgb(25,25,25)";
        controlText.style.fontFamily = "Roboto,Arial,sans-serif";
        controlText.style.fontSize = "10px";
        controlText.style.lineHeight = "16px";
        controlText.style.paddingLeft = "2px";
        controlText.style.paddingRight = "2px";
        controlText.innerHTML = "X";
        controlUI.appendChild(controlText);
        // Setup the click event listeners: simply set the map to Chicago.
        controlUI.addEventListener("click", () => {
            lastpolygon.setMap(null);
            $('#coordinates').val('');

        });
    }

    function initialize() {

      var  myLatlng = new google.maps.LatLng({{$zone->coordinates != null?trim(explode(' ',$zone->coordinates)[0], 'POINT()'):15.5007 }}, {{$zone->coordinates != null?trim(explode(' ',$zone->coordinates)[1], 'POINT()'):32.5599 }});

        var myOptions = {
            zoom: 13,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

        const polygonCoords = [
        @if ($zone->coordinates)
            @foreach($zone->coordinates[0] as $coords)
            { lat: {{$coords->getLat()}}, lng: {{$coords->getLng()}} },
            @endforeach
        @endif
        ];

        var zonePolygon = new google.maps.Polygon({
            paths: polygonCoords,
            strokeColor: "#050df2",
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillOpacity: 0,
        });


        zonePolygon.setMap(map);

        zonePolygon.getPaths().forEach(function(path) {
            path.forEach(function(latlng) {
                bounds.extend(latlng);
                map.fitBounds(bounds);
            });
        });



        drawingManager = new google.maps.drawing.DrawingManager({
            drawingMode: google.maps.drawing.OverlayType.POLYGON,
            drawingControl: true,
            drawingControlOptions: {
            position: google.maps.ControlPosition.TOP_CENTER,
            drawingModes: [google.maps.drawing.OverlayType.POLYGON]
            },
            polygonOptions: {
            editable: true
            }
        });
        drawingManager.setMap(map);

        google.maps.event.addListener(drawingManager, "overlaycomplete", function(event) {
            var newShape = event.overlay;
            newShape.type = event.type;
        });

        google.maps.event.addListener(drawingManager, "overlaycomplete", function(event) {
            if(lastpolygon)
                {
                    lastpolygon.setMap(null);
                }
                $('#coordinates').val(event.overlay.getPath().getArray());
                lastpolygon = event.overlay;
                auto_grow();
        });
        const resetDiv = document.createElement("div");
        resetMap(resetDiv, lastpolygon);
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(resetDiv);

        // Create the search box and link it to the UI element.
        const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });
            let markers = [];
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();

                if (places.length == 0) {
                return;
                }
                // Clear out the old markers.
                markers.forEach((marker) => {
                marker.setMap(null);
                });
                markers = [];
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();
                places.forEach((place) => {
                if (!place.geometry || !place.geometry.location) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                const icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25),
                };
                // Create a marker for each place.
                markers.push(
                    new google.maps.Marker({
                    map,
                    icon,
                    title: place.name,
                    position: place.geometry.location,
                    })
                );

                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
                });
                map.fitBounds(bounds);
            });
    }
    google.maps.event.addDomListener(window, 'load', initialize);

</script>






@endsection
