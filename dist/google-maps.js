/******/ (() => { // webpackBootstrap
/*!*******************************!*\
  !*** ./src/js/google-maps.js ***!
  \*******************************/
(function ($) {
  /**
   * initMap
   *
   * Renders a Google Map onto the selected jQuery element
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   jQuery $el The jQuery element.
   * @return  object The map instance.
   */
  function initMap($el) {
    // Find marker elements within map.
    var $markers = $el.find('.marker');
    var styles = [{
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#28446a"
      }]
    }, {
      "elementType": "labels.icon",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#f9f8f6"
      }]
    }, {
      "elementType": "labels.text.stroke",
      "stylers": [{
        "color": "#adadad"
      }, {
        "weight": 0.5
      }]
    }, {
      "featureType": "administrative.neighborhood",
      "elementType": "labels",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "administrative.province",
      "elementType": "geometry.stroke",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "poi",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#192a44"
      }]
    }, {
      "featureType": "poi.business",
      "elementType": "geometry",
      "stylers": [{
        "color": "#192a44"
      }]
    }, {
      "featureType": "poi.medical",
      "elementType": "geometry",
      "stylers": [{
        "color": "#192a44"
      }]
    }, {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [{
        "color": "#375179"
      }]
    }, {
      "featureType": "poi.sports_complex",
      "elementType": "geometry",
      "stylers": [{
        "color": "#192a44"
      }]
    }, {
      "featureType": "road",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#183954"
      }, {
        "visibility": "on"
      }]
    }, {
      "featureType": "road",
      "elementType": "geometry.stroke",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "road.arterial",
      "elementType": "geometry",
      "stylers": [{
        "color": "#193a56"
      }]
    }, {
      "featureType": "road.highway.controlled_access",
      "elementType": "geometry.stroke",
      "stylers": [{
        "visibility": "off"
      }]
    }, {
      "featureType": "road.local",
      "elementType": "geometry",
      "stylers": [{
        "color": "#193a56"
      }]
    }, {
      "featureType": "transit",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#202c3e"
      }]
    }, {
      "featureType": "transit.station.airport",
      "elementType": "geometry.fill",
      "stylers": [{
        "color": "#202c3e"
      }]
    }, {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [{
        "color": "#192331"
      }]
    }, {
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [{
        "color": "#f9f8f6"
      }]
    }];

    // Create gerenic map.
    var mapArgs = {
      zoom: $el.data('zoom') || 12,
      styles: styles,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      zoomControlOptions: {
        position: google.maps.ControlPosition.LEFT_TOP
      },
      streetViewControlOptions: {
        position: google.maps.ControlPosition.LEFT_TOP
      },
      fullscreenControl: false,
      //mapTypeControl: false,
      mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        position: google.maps.ControlPosition.TOP_RIGHT,
        mapTypeIds: ["roadmap", "terrain"]
      }
    };
    var map = new google.maps.Map($el[0], mapArgs);

    // Add markers.
    map.markers = [];
    $markers.each(function () {
      initMarker($(this), map);
    });

    // Center map based on markers.
    centerMap(map);

    // Return map instance.
    return map;
  }

  /**
   * initMarker
   *
   * Creates a marker for the given jQuery element and map.
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   jQuery $el The jQuery element.
   * @param   object The map instance.
   * @return  object The marker instance.
   */
  function initMarker($marker, map) {
    // Get position from marker.
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = {
      lat: parseFloat(lat),
      lng: parseFloat(lng)
    };

    // Create marker instance.
    var marker = new google.maps.Marker({
      position: latLng,
      map: map,
      icon: {
        url: "https://boccogroup.com/wp-content/uploads/icon.png"
      }
    });

    // Append to reference for later use.
    map.markers.push(marker);

    // If marker contains HTML, add it to an infoWindow.
    if ($marker.html()) {
      // Create info window.
      var infowindow = new google.maps.InfoWindow({
        content: $marker.html()
      });

      // Show info window when marker is clicked.
      google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
      });
    }
  }

  /**
   * centerMap
   *
   * Centers the map showing all markers in view.
   *
   * @date    22/10/19
   * @since   5.8.6
   *
   * @param   object The map instance.
   * @return  void
   */
  function centerMap(map) {
    // Create map boundaries from all map markers.
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function (marker) {
      bounds.extend({
        lat: marker.position.lat(),
        lng: marker.position.lng()
      });
    });

    // Case: Single marker.
    if (map.markers.length == 1) {
      map.setCenter(bounds.getCenter());
      // Case: Multiple markers.
    } else {
      map.fitBounds(bounds);
    }
  }

  //prevent google fonts request
  function removeGoogleMapFont() {
    var head = document.getElementsByTagName('head')[0];
    // Save the original method
    var insertBefore = head.insertBefore;
    // Replace it!
    head.insertBefore = function (newElement, referenceElement) {
      if (newElement.href && newElement.href.indexOf('//fonts.googleapis.com/css?family=Roboto') > -1 || newElement.href && newElement.href.indexOf('//fonts.googleapis.com/css?family=Google+Sans+Text') > -1) {
        //console.info('Prevented Roboto and Google Sans Text from loading!');
        return;
      }
      insertBefore.call(head, newElement, referenceElement);
    };
  }

  // Render maps on page load.
  $(document).on('ready', function () {
    $('.acf-map').each(function () {
      removeGoogleMapFont();
      var map = initMap($(this));
    });
  });
})(jQuery);
/******/ })()
;
//# sourceMappingURL=google-maps.js.map