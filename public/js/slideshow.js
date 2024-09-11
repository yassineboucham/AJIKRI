var images = ["images/slideshow1.png", "images/slideshow3.png", "images/slideshow4.png"];
var captionsText = ["La modernité", "La facilité", "La simplicité"];
var currentImageIndex = 0;
var slideImage = document.getElementById("slide-img");
var captionLocation = document.getElementById("text");

var myTimer;
myTimer = setInterval(nextSlide, 5000);

function prevSlide(){
  currentImageIndex--;
  if (currentImageIndex < 0) {
    currentImageIndex = images.length - 1;
  }
  slideImage.src = images[currentImageIndex];
  captionLocation.innerText = captionsText[currentImageIndex];
}

function nextSlide(){
  currentImageIndex++;
  if (currentImageIndex >= images.length) {
    currentImageIndex = 0;
  }
  slideImage.src = images[currentImageIndex];
  captionLocation.innerText = captionsText[currentImageIndex];
}
