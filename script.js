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
var text1 = document.getElementsByClassName("navtext2");
var text2 = document.getElementsByClassName("navtext3");
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
			text1[slideIndex-1].style.display = "block";
			text2[slideIndex-1].style.display = "block";
}

function check_value(fieldvalue)
    {    
        switch(fieldvalue)
        {
            case 1:
                document.getElementById("imagetest1").innerHTML = "<img src='iPhone5select.png'>";
				document.getElementById("iPhonetoggle1").innerHTML = "<display:none>";
                    break;
            case 2:
                document.getElementById("imagetest1").innerHTML = "<img src='iPhone5select1.png'>";
				document.getElementById("iPhonetoggle1").innerHTML = "<display:none>"; 
                    break;
            case 3:
                document.getElementById("imagetest1").innerHTML = "<img src='iPhone5select2.png'>";
				document.getElementById("iPhonetoggle1").innerHTML = "<display:none>";
                    break;
			case 4:
                document.getElementById("imagetest2").innerHTML = "<img src='iPhone6Select.png'>";
				document.getElementById("iPhonetoggle2").innerHTML = "<display:none>";
                    break;
			case 5:
                document.getElementById("imagetest2").innerHTML = "<img src='iPhone6Select1.png'>";
				document.getElementById("iPhonetoggle2").innerHTML = "<display:none>";
                    break;
			case 6:
                document.getElementById("imagetest2").innerHTML = "<img src='iPhone6Select2.png'>";
				document.getElementById("iPhonetoggle2").innerHTML = "<display:none>";
                    break;
			case 7:
                document.getElementById("imagetest2").innerHTML = "<img src='iPhone6Select3.png'>";
				document.getElementById("iPhonetoggle2").innerHTML = "<display:none>";
                    break;
			case 8:
                document.getElementById("imagetest3").innerHTML = "<img src='iPhone7Select.png'>";
				document.getElementById("iPhonetoggle3").innerHTML = "<display:none>";
                    break;
            case 9:
                document.getElementById("imagetest3").innerHTML = "<img src='iPhone7Select1.png'>";
				document.getElementById("iPhonetoggle3").innerHTML = "<display:none>"; 
                    break;
            case 10:
                document.getElementById("imagetest3").innerHTML = "<img src='iPhone7Select2.png'>";
				document.getElementById("iPhonetoggle3").innerHTML = "<display:none>";
                    break;
			case 11:
                document.getElementById("imagetest3").innerHTML = "<img src='iPhone7Select3.png'>";
				document.getElementById("iPhonetoggle3").innerHTML = "<display:none>";
                    break;
			case 12:
                document.getElementById("imagetest3").innerHTML = "<img src='iPhone7Select4.png'>";
				document.getElementById("iPhonetoggle3").innerHTML = "<display:none>";
                    break;
			case 13:
                document.getElementById("imagetest3").innerHTML = "<img src='iPhone7Select5.png'>";
				document.getElementById("iPhonetoggle3").innerHTML = "<display:none>";
                    break;	
        }
    }