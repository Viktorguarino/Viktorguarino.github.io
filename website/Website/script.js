// JavaScript Document
function myFunction() {
	alert("hello");
}
			
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  	showSlides(slideIndex += n);
}

function currentSlide(n) {
  	showSlides(slideIndex = n);
}	
	
function showDiv() {
var x = document.getElementById("dropdowncontent");
    if (x.style.display === "none") 
	{
       	x.style.display = "block";
    } else {
       	x.style.display = "none";
    }
}
			
function showSlides(n) {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("bar");
  	if (n > slides.length) {slideIndex = 1}    
  		if (n < 1) {slideIndex = slides.length}
  			for (i = 0; i < slides.length; i++) 
			{
      		slides[i].style.display = "none";  
  			}
  			for (i = 0; i < dots.length; i++) 
			{
      		dots[i].className = dots[i].className.replace(" active", "");
  			}
  			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
}