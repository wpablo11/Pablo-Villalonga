(function ($) {
    "use strict";

    var $maphelp = $('.ct-googleMap--accordion .ct-googleMap');
    $(".ct-googleMap--accordion .ct-js-mapToogle").on("click", function () {
        var $this = $(this);
        var $map = $this.parent().find('.ct-googleMap-container');
        $this.html($this.html() == '<i class="fa fa-map-marker"></i> Hide map' ? '<i class="fa fa-map-marker"></i> Show map' : '<i class="fa fa-map-marker"></i> Hide map');

        if ($map.height() != "0") {
            $map.animate({height: '0px'}, 500);
        } else {
            $map.animate({height: $maphelp.data("height") + "px"}, 500);
            setTimeout(function () {
                $('html, body').animate({
                    scrollTop: $map.offset().top - 180
                }, 2000);
            }, 500);
        }
    });
    /* ============================================= */
    /* ==== GOOGLE MAP ==== */

    function initmap() {

        if (($(".ct-googleMap").length > 0) && (typeof google === 'object' && typeof google.maps === 'object')) {
            $('.ct-googleMap').each(function () {
                var atcenter = "";
                var $this = $(this);
                var location = $this.data("location");
                var zoom = $this.data("zoom");

                var offset = -30;

                if (validatedata($this.data("offset"))) {
                    offset = $this.data("offset");
                }

                if (validatedata(location)) {
                    $this.gmap3({
                        marker: {
                            //latLng: [40.616439, -74.035540],
                            //address: location, options: {
								values:[
      {latLng:[48.8620722, 2.352047], data:"Paris !"},
      {address:"86000 Poitiers, France", data:"Poitiers : great city !"},
      {address:"66000 Perpignan, France", data:"Perpignan ! GO USAP !"}], options: {
							//visible: false
                                icon: new google.maps.MarkerImage("assets/images/marker.png")
                            }, callback: function (marker) {
                                atcenter = marker.getPosition();
                            }
                        },
                        map: {
                            options: {
                                //maxZoom:11,
                                zoom: zoom,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                                // ('ROADMAP', 'SATELLITE', 'HYBRID','TERRAIN');
                                scrollwheel: false,
                                disableDoubleClickZoom: false,
                                draggable: false,
                                //disableDefaultUI: true,
                                mapTypeControlOptions: {
                                    //mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.HYBRID],
                                    //style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                                    //position: google.maps.ControlPosition.RIGHT_CENTER
                                    mapTypeIds: []
                                },
                                styles: [

                                    {
                                        "featureType": "landscape",
                                        "stylers": [
                                            {"saturation": -100},
                                            {"lightness": 65},
                                            {"visibility": "on"}
                                        ]
                                    },
                                    {
                                        "featureType": "poi",
                                        "stylers": [
                                            {"saturation": -100},
                                            {"lightness": 51}, {"visibility": "simplified"}
                                        ]
                                    },
                                    {
                                        "featureType": "road.highway",
                                        "stylers": [
                                            {"saturation": -100},
                                            {"visibility": "simplified"},

                                        ]
                                    },
                                    {
                                        "featureType": "road.arterial",
                                        "stylers": [
                                            {"saturation": -100},
                                            {"lightness": 30},
                                            {"visibility": "on"}
                                        ]
                                    },
                                    {
                                        "featureType": "road.local",
                                        "stylers": [
                                            {"saturation": -100},
                                            {"lightness": 40},
                                            {"visibility": "on"},

                                        ]
                                    },
                                    {
                                        "featureType": "transit",
                                        "stylers": [
                                            {"saturation": -100},
                                            {"visibility": "simplified"}
                                        ]
                                    },
                                    {
                                        "featureType": "administrative.province",
                                        "stylers": [
                                            {"visibility": "off"}
                                        ]
                                    },
                                    {
                                        "featureType": "water",
                                        "elementType": "labels",
                                        "stylers": [
                                            {"visibility": "on"},
                                            {"lightness": -25}, {"saturation": -100}
                                        ]
                                    },
                                    {
                                        "featureType": "water",
                                        "elementType": "geometry",
                                        "stylers": [{"hue": "#ffff00"},
                                            {"lightness": -25},
                                            {"saturation": -97}
                                        ]
                                    }
                                ]

                            },
                            events: {
                                idle: function () {
                                    if (!$this.data('idle')) {
                                        $this.gmap3('get').panBy(0, offset);
                                        $this.data('idle', true);
                                    }
                                }
                            }
                        },
                        overlay: {
                            //latLng: [40.616439, -74.035540],
                            //address: location,
							latLng:[48.8620722, 2.352047],
                            options: {
                                //content: '<div class="customMarker"><div class="address">' + location + '</div><div class="marker"><img src="assets/images/custom-marker.png"></div></div>',
                                offset: {
                                    y: -100,
                                    x: -25
                                }
                            }
                        }
                        //},"autofit"
                    });

                    // center on resize
                    google.maps.event.addDomListener(window, "resize", function () {
                        //var userLocation = new google.maps.LatLng(53.8018,-1.553);
                        setTimeout(function () {
                            $this.gmap3('get').setCenter(atcenter);
                            $this.gmap3('get').panBy(0, offset);
                        }, 400);

                    });

                    // set height
                    $this.css("min-height", $this.data("height") + "px");
                }

                if ($this.parent().parent().hasClass('hidemap')) {
                    $this.parent().animate({height: '0px'}, 500);
                }

            })
        }
    }

    initmap();
})(jQuery);