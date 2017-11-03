function myMap() {
var mapProp= {
    center:new google.maps.LatLng(55.702145,13.178157),
    zoom:16,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}