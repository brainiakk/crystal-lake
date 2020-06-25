/*==============================================================*/
// Nivo Map  JS
/*==============================================================*/
(function($) {
    "use strict"; // Start of use strict
    var marker;

    window.initMap = function() {
        var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: {lat: 5.702147, lng: 6.812939} 
        });

        marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: {lat: 5.707017, lng: 6.810782}
        });
        marker.addListener('click', toggleBounce);
    }

    function toggleBounce() {
        if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
        } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }
}(jQuery)); // End of use strict