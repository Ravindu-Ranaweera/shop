<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<style>
.carosel {
  min-height: 500px;
  width: 100%;
  padding: 20px 0 20px;
  background: #fff;
  color: #014a6a;
  text-align: center;
  position: relative;
}

.carosel__image-wrapper {
  position: relative;
  width: 100%;
  height: 400px;
  margin: 20px auto;
  box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
  overflow-x: hidden;
}
.carosel__image-wrapper img {
 
  width: 100%;
  height: 400px;
  /*min-width: 320px;*/
  object-fit: cover;
  /*display: inline-block;*/
}
.arrow-left {
  position: absolute;
  border-bottom: 3px solid #014a6a;
  border-left: 3px solid #014a6a;
  height: 30px;
  width: 30px;
  left: 30px;
  top: 50%;
  transform: translateY(-150%) rotate(45deg);
  cursor: pointer;
  z-index: 20;
}

.arrow-right {
  position: absolute;
  border-top: 3px solid #014a6a;
  border-right: 3px solid #014a6a;
  height: 30px;
  width: 30px;
  right: 30px;
  top: 50%;
  transform: translateY(-150%) rotate(45deg);
  cursor: pointer;
  z-index: 20;
}

.carosel__image-wrapper-image {
  height: auto;
  width: 400px;
  min-width: 320px;
  transition: all .8s;
  display: inline-block;
}

.slide-right {
  animation: right;
  animation-duration: .7s;
}

@keyframes right {
  from {
    left: 100px;
    opacity: .4;
  }
  to{
    left: 0;
    opacity: 1;
  }
}
</style>
<body>
	 <section class="carosel">
    <div class="arrow-left" onclick="plusSlides(1)"></div>
    <div class="carosel__image-wrapper">
      <img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=673&q=80" alt="" class="carosel__image-wrapper-image slide-right">
      <img src="https://images.unsplash.com/photo-1501876725168-00c445821c9e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="carosel__image-wrapper-image slide-right">
      <img src="https://cdn.shopify.com/s/files/1/0264/6972/8316/files/bg-2.jpg?v=1566547839" alt="" class="carosel__image-wrapper-image slide-right">
    </div>
    <div class="arrow-right" onclick="plusSlides(1)"></div>
  </section>

  <script type="text/javascript">
  	/*
document.querySelector(".arrow-right").addEventListener("click", () => {
  document.querySelectorAll(".carosel__image-wrapper-image")[0].classList.add("slide-right");
});

document.querySelector(".arrow-left").addEventListener("click", () => {
  document.querySelectorAll(".carosel__image-wrapper-image")[0].classList.remove("slide-right");
});
*/

let slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = document.querySelectorAll(".carosel__image-wrapper-image");
  
  if(n > slides.length) {
    slideIndex = 1;
  }
  
  for (i=0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  slides[slideIndex - 1].style.display = "block";
}


  </script>
</body>
</html>