/*jshint unused:false*/
	function myMap() {
		"use strict";
        var myLatLng = {lat: 55.702145, lng: 13.178157};
        var map = new google.maps.Map(document.getElementById('googleMap'), {
          zoom: 16,
          center: myLatLng
        });

        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading" style="padding:0;">Polhemskolan</h1>'+
            '<div id="bodyContent">'+
            '<p><b>Polhemskolan</b> är en kommunal gymnasieskola i <b>Lund</b>. ' +
            'Skolan är Sveriges största gymnasieskola med sina 2 400 elever. '+
            'Eftersom vi inte har ett huvudkontor har vi varit '+
            'använt våran skola som adress för den. '+
            'Det är möjligt för intresserade kunder att hitta oss här, men det är nog '+
            'ett svårt alternativ. Ni kan gärna kontakta oss genom informationen vi har angivit '+
			'ovan. Om ni vill hellre hitta oss går vi går i klass TE15D, och är oftast i byggnad 2.'+
			'<p>Källförteckning: Polhemskolan, <a href="https://sv.wikipedia.org/wiki/Polhemskolan,_Lund">'+
            'https://sv.wikipedia.org/wiki/Polhemskolan,_Lund</a> '+
            '(besöktes November 4, 2017).</p>'+
            '</div>'+
            '</div>';
		
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Click me!'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
}

 $(document).ready(function () {
	 'use strict';
	 $("#sidebar").niceScroll({
     	cursorcolor: '#53619d',
        cursorwidth: 4,
        cursorborder: 'none'
	 });
     $('#dismiss, .overlayside').on('click', function () {
     	$('#sidebar').removeClass('active');
        $('.overlayside').fadeOut();
	 });

     $('#sidebarCollapse').on('click', function () {
     	$('#sidebar').addClass('active');
        $('.overlayside').fadeIn();
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
	 });
});