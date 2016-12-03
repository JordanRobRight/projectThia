/* Google maps functions */
function delConfirm() {
    return confirm('Are you sure you want to delete this item? The cannot operation cannot be undone.');
}

function init_map() {
    var var_location = new google.maps.LatLng(43.0188183, -87.9745458);

    var var_mapoptions = {
        center: var_location,
        zoom: 14
    };

    var var_map = new google.maps.Map(document.getElementById("map-container"), var_mapoptions);
    var contentString =
        '<div id="infowindow_content">' +
        '<p><strong>Siam Thai</strong><br>' +
        '<br><a href="tel:1-414-672-7246"><b>(414) 672-7426</b></a>'
    '</div>';

    var var_infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "Click on marker to see info",
        maxWidth: 500
    });

    google.maps.event.addListener(var_marker, 'click', function() {
        var_infowindow.open(var_map, var_marker);
    });
}

google.maps.event.addDomListener(window, 'load', init_map);
/* End Google Map functions */
