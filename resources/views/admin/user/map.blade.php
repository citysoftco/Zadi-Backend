<div id="map"></div>
<style>
    /* Set the size of the div element that contains the map */
    #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
    }

    button[title="Close"] {
        display: none !important
    }
</style>

<!--
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsE5KDJqjPpbTHsQFqSjnJHclQuCBw8c4&callback=initMap&v=weekly"
    defer></script>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        const uluru = {
            lat: 15.4654821,
            lng: 32.5165888
        };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: uluru,
        });
        // // The marker, positioned at Uluru
        // const marker = new google.maps.Marker({
        //     position: uluru,
        //     map: map,
        // });
        let users = '{!! json_encode($users->items()) !!}';
        users = JSON.parse(users);
        // console.log(users);
        const infoWindow = new google.maps.InfoWindow();
        infoWindow.focus();


        for (const user of users) {
            // console.log(user["lat"]);
            const latLng = new google.maps.LatLng(user["lat"], user["lng"]);

            let marker = new google.maps.Marker({
                position: latLng,
                map: map,
            });

            marker.addListener("mouseover", () => {
                map.setZoom(8);
                // map.setCenter(marker.getPosition());
                infoWindow.close();

                infoWindow.setContent(
                    "<div style='direction:rtl;font-size:15px;font-weight:bold' class='text-right'>الإسم: " +
                    user["name"] +
                    "<br>رقم الهاتف:" +
                    user["user_phone"] +
                    "</div>");
                infoWindow.open({
                    "anchor": marker,
                    map
                });


            });
        }
        // for (let i = 0; i < users.length; i++) {
        //     const latLng = new google.maps.LatLng(users[i][], coords[0]);

        //     new google.maps.Marker({
        //         position: latLng,
        //         map: map,
        //     });
        // }
    }

    window.initMap = initMap;
</script>
