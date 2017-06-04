<div id="slider w3-display-container"><!--start slider here-->
	  <img class="mySlides" src="images\slider.jpg" style="width:100%">
	  <img class="mySlides" src="images\slider2.jpg" style="width:100%">
	  <img class="mySlides" src="images\slider3.jpg" style="width:100%">
	  <img class="mySlides" src="images\slider4.jpg" style="width:100%">

	  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
	  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>

    <div class="clear"></div>
    
</div><!--end slider here-->

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
