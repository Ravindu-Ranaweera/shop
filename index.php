<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>home</title>
</head>
<style>
	body{
		margin: 0;
		padding: 0;
	}


.container {

  display: flex;
  flex-wrap: wrap;
	justify-content: space-between;
	padding: 25px;
}
.part{
	flex-basis: 33.3%;
	margin: auto;
	text-align: center;
}
.headericon i{
	padding-left: 30px;
	font-size: 20px;
}
.searchbar {
    float: left;
    /*background-color: #fff;*/
    letter-spacing: 1px;
    color: #000;
    padding: 6px 10px;
    width: 90px;
    border: none;
    margin: 2px 30px;
    font-family: "Segoe UI Light","Segoe UI","Segoe",Tahoma,Helvetica,Arial,sans-serif;
    font-size: 1em;
    font-weight: bold;
    border-bottom: white solid 2px;
    transition: 0.3s;
}

.searchbar::placeholder {
    color: #262626;
    font-family: "Segoe UI Light","Segoe UI","Segoe",Tahoma,Helvetica,Arial,sans-serif;
    font-size: 1em;
    font-weight: bold;
    /* transition: 0.2s; */
}

.searchbar:focus {
    width: 250px;
    font-family: "Segoe UI Light","Segoe UI","Segoe",Tahoma,Helvetica,Arial,sans-serif;
    font-size: 1em;
    font-weight: bold;
    transition: 0.3s;
    /* Stops the input box from inheriting the styling from the inputs on the request form */
    border-bottom: white solid 2px;
    outline: none;
}

.btn-search {
    cursor: pointer;
    color: #262626;
    text-decoration: none !important;
    font-family: "Segoe UI Light","Segoe UI","Segoe",Tahoma,Helvetica,Arial,sans-serif;
    font-size: 1.5em;
    padding-top: 5px;
    margin-right: 10px;
}
header{
    width: 100%;
    height: 50px;
    /*padding: 2px 0;    */
}

#nav{
    background-color: #ffF;
    
}

#nav ul{
    position: relative;
    list-style: none;
}
#nav li{
    display: inline-block;
}
#nav a{
    text-decoration: none;
    padding: 12px 0;
    margin-left: 50px;
    color: #000;
    letter-spacing: 1px;
    font-family: 'Open sans', sans-serif;  
    font-size: 18px;

}
#nav ul li a:hover{
    /*background-color: #fff;*/
    color: #1cc0a0;
    border-bottom: 2px solid #1cc0a0;
}
/* drop down */ 
#nav .dropdown{
    position: absolute;
    margin-top: 7px;
    background-color: #fff;
    display: none;
    z-index: 30;
}
#nav .dropdown li{
    display: block;
    margin-left: -40px;
    text-align: center;
    padding: 10px 5px;
}
.dropdown li:hover{
    /*background-color: #fff;*/
    color: 
}

#nav li:hover > .dropdown, li:hover{
    display: block;
}

.imgcon{
	height: 600px;
	display: grid;
  grid-template-columns: repeat(17, 1fr);
  grid-template-rows: repeat(4, 1fr);
  margin-bottom: 40px;
}
.imgcon .img1{
	/*margin: 10px;*/
	/*padding: 20px;*/
		/*overflow: hidden;*/

	grid-row: 1 /span 4;
  grid-column: 3/span 5;

}.imgcon .img2{
	/*margin: 10px;*/
	/*padding: 20px;*/
		
	
	grid-row: 1/span 2;
  grid-column: 8/span 8;

}.imgcon .img3{
	/*margin: 10px;*/
	/*padding: 20px;*/
		/*overflow: hidden;*/

	grid-row: 3 /span 2;
  grid-column: 8/span 4;

}.imgcon .img4{
	/*margin: 10px;*/
	/*padding: 20px;*/
		/*overflow: hidden;*/

	grid-row: 3 /span 2;
  grid-column: 12/span 4;

}
.imgcon .img1 img{
		object-fit: cover;
		width: 100%;
		height: 600px;

}.imgcon .img2 img{
		object-fit: cover;
		width: 100%;
		height: 290px;

}.imgcon .img3 img{
		object-fit: cover;
		width: 100%;
		height: 310px;

}.imgcon .img4 img{
		object-fit: cover;
		width: 100%;
		height: 290px;

}
@import url(https://fonts.googleapis.com/css?family=Raleway:400,500,700);
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
figure.snip1477 {
  font-family: 'Raleway', Arial, sans-serif;
  position: relative;
  overflow: hidden;
  margin: 0;
 
  width: 100%;
  color: #ffffff;
  /*padding: 20px;*/
  text-align: center;
  /*padding: 10px;*/
  font-size: 16px;

  background-color: #fff;
}
figure.snip1477 *,
figure.snip1477 *:before,
figure.snip1477 *:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.55s ease;
  transition: all 0.55s ease;
}
figure.snip1477 img {
  width: 100%;
  margin: 20px; 
  backface-visibility: hidden;
  vertical-align: top;
  opacity: 0.9;
}
figure.snip1477 .title {
  position: absolute;
  top: 58%;
  left: 25px;
  padding: 5px 10px 10px;
}

figure.snip1477 h2,
figure.snip1477 h4 {
  margin: 0;
  text-transform: uppercase;
}
figure.snip1477 h2 {
  font-weight: 400;
}
figure.snip1477 h4 {
  display: block;
  font-weight: 700;
  background-color: #ffffff;
  padding: 5px 10px;
  color: #000000;
}
figure.snip1477 figcaption {
  position: absolute;
  bottom: 42%;
  left: 25px;
  text-align: left;
  opacity: 0;
  padding: 5px 60px 5px 10px;
  font-size: 0.8em;
  font-weight: 500;
  letter-spacing: 1.5px;
}
figure.snip1477 figcaption p {
  margin: 0;
}
figure.snip1477 a {
  position: absolute;
  /*padding: 20px;*/
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
figure.snip1477:hover img,
figure.snip1477.hover img {
  zoom: 1;
  filter: alpha(opacity=35);
  -webkit-opacity: 0.35;
  opacity: 0.8;
}
figure.snip1477:hover .title:before,
figure.snip1477.hover .title:before,
figure.snip1477:hover .title:after,
figure.snip1477.hover .title:after,
figure.snip1477:hover .title div:before,
figure.snip1477.hover .title div:before,
figure.snip1477:hover .title div:after,
figure.snip1477.hover .title div:after {
  -webkit-transform: translate(0, 0);
  transform: translate(0, 0);
}
figure.snip1477:hover .title:before,
figure.snip1477.hover .title:before,
figure.snip1477:hover .title:after,
figure.snip1477.hover .title:after {
  -webkit-transition-delay: 0.15s;
  transition-delay: 0.15s;
}
figure.snip1477:hover figcaption,
figure.snip1477.hover figcaption {
  opacity: 1;
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}



/* FOOTER */
.footer {
	width: 100%;
	background: #00121b;
	display: block;
 }

 .inner-footer {
	 width: 95%;
	 margin: auto;
	 padding: 30px 10px;
	 display: flex;
	 flex-wrap: wrap;
	 box-sizing: border-box;
	 justify-content: center;
 }

.footer-items {
	width: 25%;
	padding: 10px 20px;
	box-sizing: border-box;
	color: #fff;
}

.footer-items p {
	font-size: 16px;
	text-align: justify;
	line-height: 25px;
	color: #fff;
}

.footer-items h1 {
	color: #fff;
}

.border1 {
	height: 3px;
	width: 40px;
	background: #ff9800;
	color: #ff9800;
	background-color: #ff9800;
	border: 0px;
}

ul {
	list-style: none;
	color: #fff;
	font-size: 15px;
	letter-spacing: 0.5px;	
 }

ul a {
	text-decoration: none;
	outline: none;
	color: #fff;
	transition: 0.3s;
}

ul a:hover {
	color: #ff9800;
}

ul li {
	margin: 10px 0;
	height: 25px;
}

li i {
	margin-right: 20px;
}

.social-media {
	width: 100%;
	color: #fff;
	text-align: center;
	font-size: 20px;
}

.social-media a {
	text-decoration: none;
}

.social-media i {
	height: 25px;
	width: 25px;
	margin: 20px 10px;
	padding: 4px;
	color: #fff;
	transition: 0.5s;
}

.social-media i:hover {
	transform: scale(1.5);
}

.footer-bottom {
	padding: 10px;
	background: #00121b;
	color: #fff;
	font-size: 12px;
	text-align: center;
}

/* for tablet mode view */

@media screen and (max-width: 1275px) {
	.footer-items {
		width: 50%;
	}
}

/* for mobile screen view */

@media screen and (max-width: 660px) {
	.footer-items {
		width: 100%;
	}
}

/* you can toggle the media screen view accordingly by changing the (max-width: px) to your convenience */

/* Thanks to Computer Conversations */
</style>
<body>
	<div class="container">
		<dev class="part search">	
			 <input id="searchBar" class="searchbar" type="text" placeholder="Search in...">
  <a id="btnSearch" class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></a>
		</dev>
		<div class="part logo">	
			<img src="//cdn.shopify.com/s/files/1/0264/6972/8316/files/logo_456ad61d-ba6f-4e2b-98b4-824f533cc1e2_120x@2x.png?v=1571044369" alt="">
		</div>
		<div class="part headericon">	
			<i class="fa fa-user-circle" aria-hidden="true"></i>
			<i class="fa fa-heart" aria-hidden="true"></i>
			<i class="fa fa-shopping-cart" aria-hidden="true"></i>

		</div>
 
	</div>

	<hr>	
  <header>
      <div id="nav">
           <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">Category</a>
            <ul class="dropdown">
                <li><a href="">Technology</a></li>
                <li><a href="">Photography</a></li>
                <li><a href="">Graphics</a></li>
            </ul>
        </li>
        <li><a href="">About us</a></li>
        <li><a href="">Contact</a></li>
    </ul>  
      </div>
    </header>
    <hr>	
    
   <div class="imgcon">	
			 <figure class="snip1477 img1">
  <img src="https://cdn.shopify.com/s/files/1/0264/6972/8316/files/banner-1_f172658a-dcdd-4532-b2f1-6ca8d303c2d3.jpg?v=1567480733" alt="sample38" />
  <div class="title">
    <div>
      <h2>TRENDING NOW</h2>
      <h4>Discover Now </h4>
    </div>
  </div>
  <figcaption>
    <p>The Focus and Accent On Your Spring Wardrobe</p>
  </figcaption>
  <a href="#"></a>
</figure>
<figure class="snip1477 img2">
  <img src="https://cdn.shopify.com/s/files/1/0264/6972/8316/files/banner-2_ee88c516-9e51-4dba-aa76-64f330600796.jpg?v=1567480742" alt="sample38" />
  <div class="title">
    <div>
      <h2>TRENDING NOW</h2>
      <h4>Discover Now </h4>
    </div>
  </div>
  <figcaption>
    <p>The Focus and Accent On Your Spring Wardrobe</p>
  </figcaption>
  <a href="#"></a>
</figure>
<figure class="snip1477 img3">
  <img src="https://cdn.shopify.com/s/files/1/0264/6972/8316/files/banner-4_d73896b4-82aa-47dd-9a34-b96b3505c008.jpg?v=1582702186" alt="sample38" />
  <div class="title">
    <div>
      <h2>TRENDING NOW</h2>
      <h4>Discover Now </h4>
    </div>
  </div>
  <figcaption>
    <p>The Focus and Accent On Your Spring Wardrobe</p>
  </figcaption>
  <a href="#"></a>
</figure>
<figure class="snip1477 img4">
  <img src="https://cdn.shopify.com/s/files/1/0264/6972/8316/files/banner-5_bb00c4f0-0215-4ab1-aa94-1ab99bdcb709.jpg?v=1568970552" alt="sample38" />
  <div class="title">
    <div>
      <h2>TRENDING NOW</h2>
      <h4>Discover Now </h4>
    </div>
  </div>
  <figcaption>
    <p>The Focus and Accent On Your Spring Wardrobe</p>
  </figcaption>
  <a href="#"></a>
</figure>
   </div>

    <?php include("service.php"); ?>
    <?php include("slie.php"); ?>
    <!-- <img src="https://cdn.shopify.com/s/files/1/0264/6972/8316/files/banner-1_f172658a-dcdd-4532-b2f1-6ca8d303c2d3.jpg?v=1567480733" alt=""> -->
    <?php include("product.php"); ?>
    <div class="footer">
  <div class="inner-footer">

<!--  for company name and description -->
    <div class="footer-items">
      <h1>Company Name</h1>
      <p>Description of any product or motto of the company.</p>
    </div>

<!--  for quick links  -->
    <div class="footer-items">
      <h3>Quick Links</h3>
      <div class="border1"></div> <!--for the underline -->
        <ul>
          <a href="#"><li>Home</li></a>
          <a href="#"><li>Search</li></a>
          <a href="#"><li>Contact</li></a>
          <a href="#"><li>About</li></a>
        </ul>
    </div>

<!--  for some other links -->
    <div class="footer-items">
      <h3>Recipes</h3>
      <div class="border1"></div>  <!--for the underline -->
        <ul>
          <a href="#"><li>Indian</li></a>
          <a href="#"><li>Chinese</li></a>
          <a href="#"><li>Mexican</li></a>
          <a href="#"><li>Italian</li></a>
        </ul>
    </div>

<!--  for contact us info -->
    <div class="footer-items">
      <h3>Contact us</h3>
      <div class="border1"></div>
        <ul>
          <li><i class="fa fa-map-marker" aria-hidden="true"></i>XYZ, abc</li>
          <li><i class="fa fa-phone" aria-hidden="true"></i>123456789</li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i>xyz@gmail.com</li>
        </ul> 
      
<!--   for social links -->
        <div class="social-media">
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-google-plus-square"></i></a>
        </div> 
    </div>
  </div>
  
<!--   Footer Bottom start  -->
  <div class="footer-bottom">
    Copyright &copy; Food and Burps 2020.
  </div>
</div>
  
<!--   Footer Bottom end -->
  
<!--   FOOTER END -->
</body>
</html>
