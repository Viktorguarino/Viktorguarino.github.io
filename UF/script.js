/*jshint unused:false*/
function myMap() {
	"use strict";
    var myLatLng = {lat: 55.702145, lng: 13.178157};
	var newLatLng ={lat: 55.702358, lng: 13.177902};
    var map = new google.maps.Map(document.getElementById('googleMap'), {
    	zoom: 16,
        center: newLatLng
	});
    var contentString = '<div id="content">'+
    	'<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading" style="padding:0; margin-bottom:-20px;">Polhemskolan</h1>'+
        '<div id="bodyContent">'+
        '<p style="margin-bottom:-20px;"><b>Polhemskolan</b> är en kommunal gymnasieskola i <b>Lund</b>. '+
        'Skolan är Sveriges största gymnasieskola med sina 2 400 elever. '+
        'Eftersom vi inte har ett huvudkontor har vi varit '+
        'använt våran skola som adress för den. '+
        'Det är möjligt för intresserade kunder att hitta oss här, men det är nog '+
        'ett svårt alternativ. Ni kan gärna kontakta oss genom informationen vi har angivit '+
		'ovan. Om ni vill hellre hitta oss går vi går i klass <b>TE15D</b>, och är oftast i <b>byggnad 2</b>.'+
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
		animation: google.maps.Animation.DROP,
        title: 'Click me!'
    });
    marker.addListener('click', function() {
    	infowindow.open(map, marker);
    });		
}

 $(document).ready(function () {
	 'use strict';
	 $("#sidebar").niceScroll({
        cursorwidth: 0,
        cursorborder: 'none'
	 });
     $('#dismiss, .overlayside').on('click', function () {
     	$('#sidebar').removeClass('active');
		$('.btnNavbar').show('slow');
		$('.centerimage').show('fast');
        $('.overlayside').fadeOut();
	 });

     $('#sidebarCollapse').on('click', function () {
     	$('#sidebar').addClass('active');
        $('.overlayside').fadeIn();
		$('.btnNavbar').toggle('fast');
		$('.centerimage').toggle('fast');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
	 });
});

$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});