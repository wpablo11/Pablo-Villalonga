window.onload = function(){
	  
	 var styles = [ { "featureType": "water", "stylers": [ { "visibility": "on" }, { "color": "#ffffff" } ] },{ "featureType": "landscape.natural", "elementType": "geometry.fill", "stylers": [ { "color": "#c0c0c0" } ] },{ "featureType": "transit", "stylers": [ { "visibility": "off" } ] },{ "featureType": "road", "stylers": [ { "visibility": "off" } ] },{ "featureType": "poi", "stylers": [ { "visibility": "off" } ] },{ "featureType": "administrative", "elementType": "labels", "stylers": [ { "visibility": "off" } ] },{ "elementType": "geometry.stroke", "stylers": [ { "color": "#ffffff" } ] },{ "featureType": "administrative", "elementType": "geometry", "stylers": [ { "visibility": "off" } ] },{ "featureType": "administrative.country", "elementType": "geometry", "stylers": [ { "visibility": "on" } ] },{ } ];
	  
    var options = {
        zoom: 2
        , center: new google.maps.LatLng(23,7)
        ,mapTypeControlOptions: {
		mapTypeIds: [ 'Styled']
	}
        ,mapTypeId: 'Styled'
        , backgroundColor: '#ffffff'
        , noClear: true
        , disableDefaultUI: true
        , keyboardShortcuts: false
        , disableDoubleClickZoom: true
        , draggable: false
        , scrollwheel: false
        , draggableCursor: 'pointer'
        , draggingCursor: 'pointer'
 
        , mapTypeControl: false
        , navigationControl: false
        , streetViewControl: false
        , navigationControlOptions: {
            position: google.maps.ControlPosition.TOP_RIGHT
            , style: google.maps.NavigationControlStyle.ANDROID
        }
        , scaleControl: false
        
    };
    var map = new google.maps.Map(document.getElementById('map'), options);
    var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
    map.mapTypes.set('Styled', styledMapType);
    
    
    
    var branches = new Object();
    var works = new Object();
    
    
   	 branches['Branches'] = new google.maps.LatLng(-46,-25); 
     branches['Spain'] = new google.maps.LatLng(35.86055076110332,-3.3837640624999494);
     branches['Mexico'] = new google.maps.LatLng(15.445874,-100.135361);
     branches['Peru'] = new google.maps.LatLng(-17.30870280690517,-76.289037499999955);  
     branches['Colombia'] = new google.maps.LatLng(-1.3118143600837042,-73.71826312500093); 
   //  branches['Panama'] = new google.maps.LatLng(4.705623478800176,-79.32126406249995);
     
     works['Works'] = new google.maps.LatLng(-46,5);
     works['Algeria'] =  new google.maps.LatLng(31.791691, 3.050537); 
     works['Ecuador'] = new google.maps.LatLng(-7.013683438455307,-79.98044374999995); 
     works['Uruguay'] = new google.maps.LatLng(-36.985026988391716,-56.32687929687495); 
     works['Libya'] =  new google.maps.LatLng(24.73484411914781,16.91897031250005); 
     works['Montenegro'] =  new google.maps.LatLng(39.08912999022695,19.13820859375005); 
     works['Nicaragua'] = new google.maps.LatLng(9.501061877638396,-85.64938906249995); 
     
   

    var markers = new Object(); 
    
    markers['branches']= branches;
    markers['works']= works;
    
   for (var j in markers){	
    for(var i in markers[j]){
        var marker = new MarkerWithLabel({
            position: markers[j][i]
            ,draggable: false
            ,raiseOnDrag: false
            ,map: map
            ,labelContent: i
       			,labelAnchor: new google.maps.Point(-7,22)
       			,labelClass: "labels" // the CSS class for the label
       			,labelStyle: {opacity: 0.50}
            ,icon: 'images/icons/' + j + '.png'
            ,url: ''
        });
			 google.maps.event.addListener(marker, 'click', function() {
        window.location.href = this.url;
        });
    }
   }
    
};