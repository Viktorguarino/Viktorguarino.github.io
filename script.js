/*jshint unused:false*/
function myMap() {
	'use strict';	
	var mapProp =  {
    	center:new google.maps.LatLng(55.702145,13.178157),
    	zoom:16,
	};
	var map = new google.maps.Map(document.getElementById("googleMap"),mapProp); 
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