<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Home</title>
	<link rel="icon" type="image/x-icon" href="assets/logotab.png">
</head>
<body>
	<?php
	include 'header.html';
	include 'fixedButton.html'
	?>





<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">


    
  
	<div class="carousel-item active">
		<div class = "slidesItem" id = "s1">
			<div class = "innerSlide">
				<img src="assets/l3.png" alt="">
				<p class = "text1">HANDY MART</p>
				<p class = "text2">ART PRODUCTS</p>
				<p class = "text3">FLAT <span class = "disc"> 70% </span> OFF!</p>
				<button class = "shop">Shop Now</button>
			</div>
		</div>
    </div>


	<div class="carousel-item ">
		<div class = "slidesItem" id = "s2">
		<div class = "innerSlide" id = "is2">
				<img src="assets/l2.png" alt="">
				<p class = "text1">CREATIVE</p>
				<p class = "text2">STATUE PRODUCTS</p>
				<p class = "text3">FLAT <span class = "disc"> 20% </span> OFF!</p>
				<button class = "shop">Shop Now</button>
			</div>
		</div>
    </div>

	<div class="carousel-item">
		<div class = "slidesItem" id = "s3">
		<div class = "innerSlide">
				<img src="assets/l1.png" alt="">
				<p class = "text1">CREATIVE</p>
				<p class = "text2">HANDY CRAFTS</p>
				<p class = "text3">FLAT <span class = "disc"> 30% </span> OFF!</p>
				<button class = "shop">Shop Now</button>
			</div>
		</div>
    </div>


  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" ></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" ></span>
  </button>
</div>


<section id = "ITEMS">

	

	<div class = "items">

		<div class = "innerItems" id = "in1">
			<p class = "itemName">CLAY TOY</p>
			<p class = "itemDesc">Eu feugiat pretium nibh ipsum sed augue lacus</p>
			<Button>Shop Now</Button>
		</div>

		<div class = "innerItemsW" id = "in2">
			<p class = "itemNameW">RUNNING HORSE</p>
			<p class = "itemDescW">Eu feugiat pretium nibh ipsum sed augue lacus</p>
			<Button class = "buttonW">Shop Now</Button>
		</div>

		<div class = "innerItems" id = "in3">
			<p class = "itemName">BIRD NEST</p>
			<p class = "itemDesc">Eu feugiat pretium nibh ipsum sed augue lacus</p>
			<Button>Shop Now</Button>
		</div>

		<div class = "innerItemsW" id = "in4">
			<p class = "itemNameW">WOODEN TOY</p>
			<p class = "itemDescW">Eu feugiat pretium nibh ipsum sed augue lacus</p>
			<Button class = "buttonW">Shop Now</Button>
		</div>

		<div class = "innerItems" id = "in5">
			<p class = "itemName">ELEPHANT</p>
			<p class = "itemDesc">Eu feugiat pretium nibh ipsum sed augue lacus</p>
			<Button>Shop Now</Button>
		</div>

	</div>

</section>


<section id = "NEW_ARRIVAL">

	<div class = "heading">
		<p class = "text1">NEW ARRIVAL</p>
		<p class = "desc">Mattis ullamcorper velit sed1 ullamcorper morbi tincidunt. Nibh cras pulvinar mattis nunc sed sem et tortor.</p>

	<div class="filterButtons">
		<button>Featured</button>
		<button>Latest</button>
		<button>Best Sellers</button>
	</div>


	</div>

<div id="myCarousel" class="carousel slide container" data-bs-ride="carousel"	>
    <div class="carousel-inner w-100">


        <div class="carousel-item active">
            <div class="col-md-3">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/beggar.jpg" alt="">
						<p class = "text1">Creative Beggar Statue</p>
						<div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
						<p class = "text2">$589.00</p>
						<div class = "carDivHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item">
            <div class="col-md-3">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/chickenW.jpg" alt="">
						<p class = "text1">Multi-color Hen</p>
						<div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
						<p class = "text2">$666.00</p>
						<div class = "carDivHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item">
            <div class="col-md-3">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/fitness.jpg" alt="">
						<p class = "text1">Fitness Statue</p>
						<div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
						<p class = "text2">$459.00</p>
						<div class = "carDivHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item">
            <div class="col-md-3">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/smoking.jpg" alt="">
						<p class = "text1">Smoking Toy</p>
						<div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
						<p class = "text2">$689.00</p>
						<div class = "carDivHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item">
            <div class="col-md-3">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/empire.jpg" alt="">
						<p class = "text1">Empire Statue</p>
						<div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
						<p class = "text2">$459.00</p>
						<div class = "carDivHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item">
            <div class="col-md-3">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/bell.jpg" alt="">
						<p class = "text1">Taco Bell</p>
						<div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
						<p class = "text2">$123.00</p>
						<div class = "carDivHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item">
            <div class="col-md-3">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/jewel.jpg" alt="">
						<p class = "text1">Wooden Jewel Box</p>
						<div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
						<p class = "text2">$342.00</p>
						
						<div class = "carDivHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
                </div>
            </div>
        </div>


        
    </div>
</div>

	

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src = "image-carousel.js"></script>
<div class = "carButtonCont">
<button id = "carPrev1" class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>

    <button id = "carNext1" class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button></div>
</section>

<section id = "DISCOUNT">
	<div class = "discountCont">
		<p class = "text1">DISCOUNT FOR ALL ORDERS OVER $100</p>
		<p class = "text2">We're at 71% of our goal!</p>
		<p class = "text3">That's $56,715.00 USD pledged of our $79,600.00 USD target!</p>
		<p class = "text3">Estimated delivery: April 14-24</p>
		<button>View More</button>
	</div>
</section>


<section id = "SEPCIAL_PRODUCTS">

	<div class = "heading">
		<p class = "text1" style = "display: inline-block;
    background-repeat: no-repeat;
    -webkit-text-fill-color: transparent;
    background: -o-linear-gradient(transparent, transparent);
    -webkit-background-clip: text;
    background-image: -webkit-linear-gradient(transparent, transparent), url(//your-handi-mart.myshopify.com/cdn/shop/files/iconbox-bg_small.gif?v=1613185066);
    background-position: left;
    background-size: 125%;">SPECIAL PRODUCTS</p>
		<p class = "desc">Mattis ullamcorper velit sed1 ullamcorper morbi tincidunt. Nibh cras pulvinar mattis nunc sed sem et tortor.</p>

	</div>

<div id="myCarousel2" class="carousel slide container" data-bs-ride="carousel"	>
    <div class="carousel-inner w-100">


        <div class="carousel-item active">
            <div class="col-md-3">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/beggar.jpg" alt="">
						<p class = "text1">Creative Beggar Statue</p>
						<div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
						<p class = "text2">$589.00</p>
						<div class = "carDivHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item">
            <div class="col-md-3">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/chicken.jpg" alt="">
						<p class = "text1">Multi-Color Hen</p>
						<div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
						<p class = "text2">$589.00</p>
						<div class = "carDivHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item">
            <div class="col-md-3">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/fitness.jpg" alt="">
						<p class = "text1">Fitness Satue</p>
						<div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
						<p class = "text2">$909.00</p>
						<div class = "carDivHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item">
            <div class="col-md-3">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/smoking.jpg" alt="">
						<p class = "text1">Smoking Toy</p>
						<div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
						<p class = "text2">$589.00</p>
						<div class = "carDivHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item">
            <div class="col-md-3">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/empire.jpg" alt="">
						<p class = "text1">Empire Statue</p>
						<div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
						<p class = "text2">$589.00</p>
						<div class = "carDivHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src = "image-carousel2.js"></script>


<div class = "carButtonCont">
<button id = "carPrev2" class="carousel-control-prev" type="button" data-bs-target="#myCarousel2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>

    <button id = "carNext2" class="carousel-control-next" type="button" data-bs-target="#myCarousel2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button></div>
</section>

<section id = "NEW_COLLECTIONS">
	<div class="colDiv">
		<p class = "text1">NEW COLLECTIONS</p>
		<p class = "text2" style = "display: inline-block;
    background-repeat: no-repeat;
    -webkit-text-fill-color: transparent;
    background: -o-linear-gradient(transparent, transparent);
    -webkit-background-clip: text;
    background-image: -webkit-linear-gradient(transparent, transparent), url(//your-handi-mart.myshopify.com/cdn/shop/files/iconbox-bg_small.gif?v=1613185066);
    background-position: left;
    background-size: 125%;">CRAFTS WORK BY HANDY MART</p>
		<p class = "text3">Sed mauris pellentesque elit aliquam at lacus interdum nascetur elit ipsum. Enim ipsum hendrerit at eleifend ps mi elit Aenean porta ac sed faucibus. Nunc urna Morbi fringilla vitae orci...</p>
		<div class = "stats">
			<div class = "col-4 text-center">
				<p class = "num">499</p>
				<p class = "desc">Already Sold</p>
			</div>
			<div class = "col-4 text-center" id = "mid">
				<p class = "num">125</p>
				<p class = "desc">Preorders</p>
			</div>
			<div class = "col-4 text-center">
				<p class = "num">100</p>
				<p class = "desc">Worldwide Branches</p>
			</div>
		</div>
	</div>

</section>


<section id = "JOURNAL">

	<div class = "heading">
		<p class = "text1" style = "display: inline-block;
    background-repeat: no-repeat;
    -webkit-text-fill-color: transparent;
    background: -o-linear-gradient(transparent, transparent);
    -webkit-background-clip: text;
    background-image: -webkit-linear-gradient(transparent, transparent), url(//your-handi-mart.myshopify.com/cdn/shop/files/iconbox-bg_small.gif?v=1613185066);
    background-position: left;
    background-size: 125%;">JOURNAL</p>
		<p class = "desc">Mattis ullamcorper velit sed1 ullamcorper morbi tincidunt. Nibh cras pulvinar mattis nunc sed sem et tortor.</p>

	</div>

<div id="myCarousel3" class="carousel slide container" data-bs-ride="carousel"	>
    <div class="carousel-inner w-100">


        <div class="carousel-item active">
            <div class="col-md-4">
                <div class="card card-body">
                    <div class = "itemCar">
						<div class = "texts">
						<p class = "text1">October 11, 2002</p>
						<p class = "text2">Cute Little Angel</p>
						</div>
						<div class="action">
							<div class="name"><p class = "name">Rom M</p></div>
							<div class="name"><p class = "name">|</p></div>
							<div class="comment"><p class = "comment">2 comments</p></div>
						</div>
						<img src="assets/angel.jpg" alt="">
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item active">
            <div class="col-md-4">
                <div class="card card-body">
                    <div class = "itemCar">
						<div class = "texts">
						<p class = "text1">October 11, 2002</p>
						<p class = "text2">Naure Oil Painting</p>
						</div>
						<div class="action">
							<div class="name"><p class = "name">Rom M</p></div>
							<div class="name"><p class = "name">|</p></div>
							<div class="comment"><p class = "comment">2 comments</p></div>
						</div>
						<img src="assets/claypot.jpg" alt="">
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item active">
            <div class="col-md-4">
                <div class="card card-body">
                    <div class = "itemCar">
						<div class = "texts">
						<p class = "text1">October 11, 2002</p>
						<p class = "text2">Making Toys with Clay</p>
						</div>
						<div class="action">
							<div class="name"><p class = "name">Rom M</p></div>
							<div class="name"><p class = "name">|</p></div>
							<div class="comment"><p class = "comment">2 comments</p></div>
						</div>
						<img src="assets/handsclay.jpg" alt="">
					</div>
                </div>
            </div>
        </div>

	

		
        
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src = "image-carousel3.js"></script>


<div class = "carButtonCont">
<button id = "carPrev3" class="carousel-control-prev" type="button" data-bs-target="#myCarousel3" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>

    <button id = "carNext3" class="carousel-control-next" type="button" data-bs-target="#myCarousel3" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button></div>
</section>

<section id = "POP_CATEGORIES">

	<div class = "heading">
		<p class = "text1" style = "display: inline-block;
    background-repeat: no-repeat;
    -webkit-text-fill-color: transparent;
    background: -o-linear-gradient(transparent, transparent);
    -webkit-background-clip: text;
    background-image: -webkit-linear-gradient(transparent, transparent), url(//your-handi-mart.myshopify.com/cdn/shop/files/iconbox-bg_small.gif?v=1613185066);
    background-position: left;
    background-size: 125%;">POPULAR CATEGORIES</p>
		<p class = "desc">Mattis ullamcorper velit sed1 ullamcorper morbi tincidunt. Nibh cras pulvinar mattis nunc sed sem et tortor.</p>

	</div>

<div id="myCarousel4" class="carousel slide container" data-bs-ride="carousel"	>
    <div class="carousel-inner w-100">


        <div class="carousel-item active">
            <div class="col-md-4">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/bowl.jpg" alt="">
						<p class = "text1">Bowl</p>
						<p class = "text2">10 items</p>
						<button>Shop Now</button>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item active">
            <div class="col-md-4">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/flower.jpg" alt="">
						<p class = "text1">Flower Pot</p>
						<p class = "text2">10 items</p>
						<button>Shop Now</button>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item active">
            <div class="col-md-4">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/bino.jpg" alt="">
						<p class = "text1">Binoculars</p>
						<p class = "text2">10 items</p>
						<button>Shop Now</button>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item active">
            <div class="col-md-4">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/canon.jpg" alt="">
						<p class = "text1">Ancient Gun</p>
						<p class = "text2">8 items</p>
						<button>Shop Now</button>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item active">
            <div class="col-md-4">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/beggar.jpg" alt="">
						<p class = "text1">Clay Toys</p>
						<p class = "text2">6 items</p>
						<button>Shop Now</button>
					</div>
                </div>
            </div>
        </div>

		<div class="carousel-item active">
            <div class="col-md-4">
                <div class="card card-body">
                    <div class = "itemCar">
						<img src="assets/fitness.jpg" alt="">
						<p class = "text1">Basta</p>
						<p class = "text2">10 items</p>
						<button>Shop Now</button>
					</div>
                </div>
            </div>
        </div>
		        
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src = "image-carousel4.js"></script>


<div class = "carButtonCont">
<button id = "carPrev4" class="carousel-control-prev" type="button" data-bs-target="#myCarousel4" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>

    <button id = "carNext4" class="carousel-control-next" type="button" data-bs-target="#myCarousel4" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button></div>
</section>

<?php include 'newFooter.html'; ?>

	
</body>
</html>

<style>
	#carouselExampleControls .carousel-control-prev, #carouselExampleControls .carousel-control-next{
		width: 50px;
		height: 50px;
		margin: 20px;
		border-radius: 50px;
		background-color: black;
		transition: 0.3s ease;
	}

	#carouselExampleControls button:hover{
		background-color: #58c5c7;
		color: white;
	}

	#carouselExampleControls{
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.carousel-item{
		
	}

	#carouselExampleControls .carousel-control-prev,
       #carouselExampleControls .carousel-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
			opacity: 1;
        }

	#s1{
		background-image: url(assets/homeslide1.jpg);
		width: 100%;
		height:80vh;
		background-size: cover;
	}

	#s2{
		background-image: url(assets/homeslide2.jpg);
		width: 100%;
		height:80vh;
		background-size: cover;
	}

	#s3{
		background-image: url(assets/homeslide3.jpg);
		width: 100%;
		height:80vh;
		background-size: cover;
	}

	.innerSlide{
		width: 25%;
		height: 100%;
		margin-left: 25%;
		padding-top: 10rem;
	}

	#is2{
		width: 32%;
		height: 100%;
		margin-left: 25%;
		padding-top: 10rem;
	}

	.innerSlide img{
		margin-bottom: 12px;
	}

	.innerSlide .text1{
		font-size: 34px;
		font-family: sans-serif;
		font-weight: lighter;
		color: black;
		margin-bottom: 10px;
	}

	.innerSlide .text2{
		font-size: 42px;
		font-family: sans-serif;
		font-weight: bold;
		color: black;
		margin-bottom: 10px;
	}

	.innerSlide .text3{
		font-size: 36px;
		font-weight: lighter;
		color: black;
		margin-bottom: 10px;
		font-family: 'Rajdhani';
	}

	.disc{
		color: #58c5c7;
		font-weight:900;
		margin-left: 10px;
		margin-right: 10px;
	}

	.innerSlide .shop{
		padding-top: 15px;
		padding-bottom: 15px;
		padding-left: 40px;
		padding-right: 40px;
		border: #58c5c7 solid 2px;
		background-color: #0000;
		border-radius: 50px;
		font-family: 'Rajdhani';
		font-size: 1.5rem;
		transition: 0.3s ease;
	}

	.innerSlide .shop:hover{
		background-color: #58c5c7;
		color: white;
	}



	#ITEMS .items{
		display:flex;
		width: 100%
	}

	#ITEMS .items .innerItems, #ITEMS .items .innerItemsW{
		
		width: 20%;
		height: 50rem;
		background-size: cover;
		background-position: center;
		padding: 10px;
		display: flex;
		flex-direction: column;
		align-items: center;
		padding-top: 25%; 
	}

	#ITEMS .items #in1{
		background-image: url(assets/chicken.jpg);
	}

	#ITEMS .items #in2{
		background-image: url(assets/horse.jpg);
	}

	#ITEMS .items #in3{
		background-image: url(assets/birdhouse.jpg);
	}

	#ITEMS .items #in4{
		background-image: url(assets/monkey.jpg);
	}

	#ITEMS .items #in5{
		background-image: url(assets/elephant.jpg);
	}

	.innerItems .itemName{
		font-size: 21px;
		font-family: sans-serif;
		font-weight: bold;
		text-align: center;
	}

	.innerItems .itemDesc{
		font-size: 16px;
		text-align: center;
	}

	.innerItems button{
		padding-top: 15px;
		padding-bottom: 15px;
		padding-left: 40px;
		padding-right: 40px;
		border: #58c5c7 solid 2px;
		background-color: #0000;
		border-radius: 50px;
		font-family: 'Rajdhani';
		font-size: 1.5rem;
		transition: 0.3s ease;
		color:white;
		margin-top: 10px;
	}

	.innerItems button:hover{
		background-color: #58c5c7;
	}


	.innerItemsW .itemNameW{
		font-size: 21px;
		font-family: sans-serif;
		font-weight: bold;
		text-align: center;
		color: black;
	}

	.innerItemsW .itemDescW{
		font-size: 16px;
		text-align: center;
		color: black

	}

	.innerItemsW .buttonW{
		padding-top: 15px;
		padding-bottom: 15px;
		padding-left: 40px;
		padding-right: 40px;
		border: #58c5c7 solid 2px;
		background-color: #0000;
		border-radius: 50px;
		font-family: 'Rajdhani';
		font-size: 1.5rem;
		transition: 0.3s ease;
		color:black;
		margin-top: 10px;
	}

	.innerItemsW .buttonW:hover{
		background-color: #58c5c7;
		color:white;
	}



	/* Sweep To Right */
.innerItems {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
}

.innerItems:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
  transform-origin: 0 50%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}

.innerItemst:hover, .innerItems:focus, .innerItems:active {
  color: white;
}
.innerItems:hover:before, .innerItems:focus:before, .innerItemst:active:before {
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

/* Sweep To Right */
.innerItemsW {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
}

.innerItemsW:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(255, 255, 255, 0.5);
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transform-origin: 0 50%;
  transform-origin: 0 50%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}

.innerItemsW:hover, .innerItems:focus, .innerItems:active {
  color: white;
}
.innerItemsW:hover:before, .innerItems:focus:before, .innerItems:active:before {
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

#ITEMS{
	margin-top: 20px;
}


</style>

<style id = "NEW ARRIVAL">
	#NEW_ARRIVAL #myCarousel {
    margin-top: 50px;
}

@media (max-width: 768px) {
    #NEW_ARRIVAL .carousel-inner .carousel-item>div {
        display: none;
    }

    #NEW_ARRIVAL .carousel-inner .carousel-item>div:first-child {
        display: block;
    }
}

#NEW_ARRIVAL .carousel-inner .carousel-item.active,
#NEW_ARRIVAL .carousel-inner .carousel-item-start,
#NEW_ARRIVAL .carousel-inner .carousel-item-next,
#NEW_ARRIVAL .carousel-inner .carousel-item-prev {
    display: flex;
}

@media (min-width: 768px) {

    #NEW_ARRIVAL .carousel-inner .carousel-item-right.active,
    #NEW_ARRIVAL .carousel-inner .carousel-item-next,
    #NEW_ARRIVAL .carousel-item-next:not(.carousel-item-start) {
        transform: translateX(25%) !important;
    }

    #NEW_ARRIVAL .carousel-inner .carousel-item-left.active,
    #NEW_ARRIVAL .carousel-item-prev:not(.carousel-item-end),
    #NEW_ARRIVAL .active.carousel-item-start,
    #NEW_ARRIVAL .carousel-item-prev:not(.carousel-item-end) {
        transform: translateX(-25%) !important;
    }

    #NEW_ARRIVAL .carousel-item-next.carousel-item-start,
    #NEW_ARRIVAL .active.carousel-item-end {
        transform: translateX(0) !important;
    }

    #NEW_ARRIVAL .carousel-inner .carousel-item-prev,
    #NEW_ARRIVAL .carousel-item-prev:not(.carousel-item-end) {
        transform: translateX(-25%) !important;
    }
}

.itemCar{
	display:flex;
	align-items: center;
	flex-direction: column;
	position: relative;
	
}

.carDivHover {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  padding-top: 55%;
  width: 100%;
}


.carDivHover button{
	width: 40px;
	height: 40px;
	border: none;
	background-color: black;
	color: white;
	border-radius: 50%;
	transition: .5s ease;
}

.carDivHover button:hover{
	background-color: #58c5c7;
}

.itemCar:hover .carDivHover {
  opacity: 1;
}

.itemCar:hover .text1{
	color: #58c5c7;
}


.itemCar img{
	width: 100%;
}

.itemCar .text1{
	color:black;
	font-size: 15px;
	font-weight:bolder;
	margin-top: 8px;
}

.itemCar .text2{
	color:black;
	font-size: 15px;
	margin-top: 8px;
}

.itemCar .stars{
	display: flex;
	align-items:center;
}

.checked {
  color: orange;
}

.carButtonCont{
	display: flex;
	justify-content: space-evenly;
	padding: 30px;
	align-items: center;
	width: 15%;
}

#carPrev1, #carNext1{
	width: 40px;
	height: 40px;
	position: relative;
	opacity: 1;
	background-color: black;
	border-radius: 50%;
	transition: .5s ease;
}


#carPrev1:hover, #carNext1:hover{
	background-color: #58c5c7;
}

#NEW_ARRIVAL{
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	padding-top: 10rem;
	padding-bottom: 12rem;
}

#NEW_ARRIVAL .heading{
	width: 40%;
	display: flex;
	justify-content: center;
	flex-direction: column;
	align-items: center;
}

#NEW_ARRIVAL .heading .text1{
	font-size: 36px;
	font-family: sans-serif;
	font-weight: bold;
	color: black;
}

#NEW_ARRIVAL .heading .desc{
	font-size: 16px;
	font-family: 'Rajdhani';
	text-align: center;
	color: black;
}

#NEW_ARRIVAL .heading .filterButtons{
	display: flex;
	width: 70%;
	padding: 8px;
	align-items: center;
	justify-content: space-evenly;
	margin-top: 30px;
}

#NEW_ARRIVAL .heading .filterButtons button{
	padding: 12px 26px 12px 26px;
	background-color: #0000;
	color: black;
	font-family: 'Rajdhani';
	border: solid #58c5c7 1px;
	transition: .5s ease;
}

#NEW_ARRIVAL .heading .filterButtons button:hover{
	background-color: #58c5c7;
	color: white;
}

</style>

<style id = "DISC">
	#DISCOUNT{
		background-image: url("assets/disc_bg.jpg");
		height: 70vh;
		background-size: cover;
		background-position: center;
		background-attachment: fixed;
		padding-top: 7%;
		
		
	}

	.discountCont{
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.discountCont .text1{
		color: white;
		font-family: sans-serif;
		font-size: 36px;
		font-weight: bold;
		margin-bottom: 30px;
	}

	.discountCont .text2{
		color: white;
		font-family: sans-serif;
		font-size: 30px;
		font-weight: bold;
		margin-bottom: 30px;
	}

	.discountCont .text3{
		color: white;
		font-family: 'Rajdhani';
		font-size: 18px;
	}

	.discountCont Button{
		color:white;
		background-color: black;
		border-radius: 50px;
		padding: 12px 30px 12px 30px;
		border: none;
		font-family: "Rajdhani";
		margin-top: 5rem;
		font-size: 16px;
		transition: .5s ease;
	}

	.discountCont Button:hover{
		color: black;
		background-color: white;
	}
</style>

<style id = "SEPCIAL PRODUCTS">
	#SEPCIAL_PRODUCTS #myCarousel2 {
    margin-top: 50px;
}

@media (max-width: 768px) {
    #SEPCIAL_PRODUCTS .carousel-inner .carousel-item>div {
        display: none;
    }

    #SEPCIAL_PRODUCTS .carousel-inner .carousel-item>div:first-child {
        display: block;
    }
}

#SEPCIAL_PRODUCTS .carousel-inner .carousel-item.active,
#SEPCIAL_PRODUCTS .carousel-inner .carousel-item-start,
#SEPCIAL_PRODUCTS .carousel-inner .carousel-item-next,
#SEPCIAL_PRODUCTS .carousel-inner .carousel-item-prev {
    display: flex;
}

@media (min-width: 768px) {

    #SEPCIAL_PRODUCTS .carousel-inner .carousel-item-right.active,
    #SEPCIAL_PRODUCTS .carousel-inner .carousel-item-next,
    #SEPCIAL_PRODUCTS .carousel-item-next:not(.carousel-item-start) {
        transform: translateX(25%) !important;
    }

    #SEPCIAL_PRODUCTS .carousel-inner .carousel-item-left.active,
    #SEPCIAL_PRODUCTS .carousel-item-prev:not(.carousel-item-end),
    #SEPCIAL_PRODUCTS .active.carousel-item-start,
    #SEPCIAL_PRODUCTS .carousel-item-prev:not(.carousel-item-end) {
        transform: translateX(-25%) !important;
    }

    #SEPCIAL_PRODUCTS .carousel-item-next.carousel-item-start,
    #SEPCIAL_PRODUCTS .active.carousel-item-end {
        transform: translateX(0) !important;
    }

    #SEPCIAL_PRODUCTS .carousel-inner .carousel-item-prev,
    #SEPCIAL_PRODUCTS .carousel-item-prev:not(.carousel-item-end) {
        transform: translateX(-25%) !important;
    }
}

.itemCar{
	display:flex;
	align-items: center;
	flex-direction: column;
	position: relative;
	
}

.carDivHover {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  padding-top: 55%;
  width: 100%;
}


.carDivHover button{
	width: 40px;
	height: 40px;
	border: none;
	background-color: black;
	color: white;
	border-radius: 50%;
	transition: .5s ease;
}

.carDivHover button:hover{
	background-color: #58c5c7;
}

.itemCar:hover .carDivHover {
  opacity: 1;
}

.itemCar:hover .text1{
	color: #58c5c7;
}


.itemCar img{
	width: 100%;
}

.itemCar .text1{
	color:black;
	font-size: 15px;
	font-weight:bolder;
	margin-top: 8px;
}

.itemCar .text2{
	color:black;
	font-size: 15px;
	margin-top: 8px;
}

.itemCar .stars{
	display: flex;
	align-items:center;
}

.checked {
  color: orange;
}

.carButtonCont{
	display: flex;
	justify-content: space-evenly;
	padding: 30px;
	align-items: center;
	width: 15%;
}

#carPrev2, #carNext2{
	width: 40px;
	height: 40px;
	position: relative;
	opacity: 1;
	background-color: black;
	border-radius: 50%;
	transition: .5s ease;
}


#SEPCIAL_PRODUCTS #carPrev2:hover, #SEPCIAL_PRODUCTS #carNext2:hover{
	background-color: #58c5c7;
}

#SEPCIAL_PRODUCTS{
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	padding-top: 10rem;
	padding-bottom: 12rem;
}

#SEPCIAL_PRODUCTS .heading{
	width: 40%;
	display: flex;
	justify-content: center;
	flex-direction: column;
	align-items: center;
}

#SEPCIAL_PRODUCTS .heading .text1{
	font-size: 36px;
	font-family: sans-serif;
	font-weight: bold;
	color: black;
}

#SEPCIAL_PRODUCTS .heading .desc{
	font-size: 16px;
	font-family: 'Rajdhani';
	text-align: center;
	color: black;
}

</style>

<style id = "NEW COLLECTION">
	#NEW_COLLECTIONS{
		height: 100vh;
		background-image: url(assets/homeslide1.jpg);
		background-size: cover;
		background-attachment: fixed;
		background-position: center;
		background-blend-mode: overlay;
		background-color: rgba(255, 255, 255, 0.5);
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;

	}

	#NEW_COLLECTIONS .colDiv{
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		width: 60%;
	}

	#NEW_COLLECTIONS .colDiv .text1{
		color: black;
		font-weight: bolder;
		font-family: 'Rajdhani';
		font-size: 18px;
		margin-bottom: 10px;
	}

	#NEW_COLLECTIONS .colDiv .text2{
		color: black;
		font-weight: bold;
		font-family: sans-serif;
		font-size: 36px;
		margin-bottom: 30px;
		letter-spacing: 1px;
	}

	#NEW_COLLECTIONS .colDiv .text3{
		color: black;
		font-family: 'Rajdhani';
		font-size: 16px;
		text-align: center;
	}

	#NEW_COLLECTIONS .colDiv .stats{
		display: flex;
		justify-content: center;
		align-content: center;
		width: 100%;
		margin-top: 60px;
	}

	#NEW_COLLECTIONS .colDiv .stats div{
		display: flex;
		flex-direction: column;
		justify-content: center;											
		align-items: center;
	}

	#NEW_COLLECTIONS .colDiv .stats #mid{
		border-left: solid black 1px;
		border-right: solid black 1px;
	}

	#NEW_COLLECTIONS .colDiv .stats .num{
		color: black;
		font-size: 36px;
		font-family: 'Rajdhani';
		font-weight: 900;
		text-align: center;
		margin-bottom: 15px;
		
	}

	#NEW_COLLECTIONS .colDiv .stats .desc{
		color: black;
		font-size: 18px;
		font-family: sans-serif;
		font-weight: bold;
	}
</style>

<style id = "JOURN">
	#JOURNAL #myCarousel2 {
    margin-top: 50px;
}

@media (max-width: 768px) {
    #JOURNAL .carousel-inner .carousel-item>div {
        display: none;
    }

    #JOURNAL .carousel-inner .carousel-item>div:first-child {
        display: block;
    }
}

#JOURNAL .carousel-inner .carousel-item.active,
#JOURNAL .carousel-inner .carousel-item-start,
#JOURNAL .carousel-inner .carousel-item-next,
#JOURNAL .carousel-inner .carousel-item-prev {
    display: flex;
}

@media (min-width: 768px) {

    #JOURNAL .carousel-inner .carousel-item-right.active,
    #JOURNAL .carousel-inner .carousel-item-next,
    #JOURNAL .carousel-item-next:not(.carousel-item-start) {
        transform: translateX(25%) !important;
    }

    #JOURNAL .carousel-inner .carousel-item-left.active,
    #JOURNAL .carousel-item-prev:not(.carousel-item-end),
    #JOURNAL .active.carousel-item-start,
    #JOURNAL .carousel-item-prev:not(.carousel-item-end) {
        transform: translateX(-25%) !important;
    }

    #JOURNAL .carousel-item-next.carousel-item-start,
    #JOURNAL .active.carousel-item-end {
        transform: translateX(0) !important;
    }

    #JOURNAL .carousel-inner .carousel-item-prev,
    #JOURNAL .carousel-item-prev:not(.carousel-item-end) {
        transform: translateX(-25%) !important;
    }
}

#JOURNAL .itemCar{
	display:flex;
	flex-direction: column;

}

#JOURNAL .itemCar .text1{
	font-size: 16px;
	font-family: 'Rajdhani';
	color: black;
	margin-bottom: 10px;
	
}

#JOURNAL .itemCar .texts{
	width: 100%;	
}

#JOURNAL .itemCar .text2{
	font-size: 20px;
	font-family: sans-serif;
	color: black;
	margin-bottom: 10px;
	font-weight: bold;
	transition: .5s ease;
}

#JOURNAL .itemCar .text2:hover{
	color: #58c5c7;
}

#JOURNAL .itemCar .action{
	display: flex;
	width: 100%;
	margin-bottom: 20px;
}



#JOURNAL .itemCar .action div{
	padding-right: 12px;
}

#JOURNAL .itemCar .action div p{
	font-size: 16px;
	color:black;
	font-family: 'Rajdhani'
}

.carButtonCont{
	display: flex;
	justify-content: space-evenly;
	padding: 30px;
	align-items: center;
	width: 15%;
}

#carPrev3, #carNext3{
	width: 40px;
	height: 40px;
	position: relative;
	opacity: 1;
	background-color: black;
	border-radius: 50%;
	transition: .5s ease;
}


#JOURNAL #carPrev3:hover, #JOURNAL #carNext3:hover{
	background-color: #58c5c7;
}

#JOURNAL{
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	padding-top: 10rem;
	padding-bottom: 12rem;
}

#JOURNAL .heading{
	width: 40%;
	display: flex;
	justify-content: center;
	flex-direction: column;
	align-items: center;
	margin-bottom: 80px;
}



#JOURNAL .heading .text1{
	font-size: 36px;
	font-family: sans-serif;
	font-weight: bold;
	color: black;
}

#JOURNAL .heading .desc{
	font-size: 16px;
	font-family: 'Rajdhani';
	text-align: center;
	color: black;
}

</style>

<style id = "POP">
	#POP_CATEGORIES #myCarousel2 {
    margin-top: 50px;
}

@media (max-width: 768px) {
    #POP_CATEGORIES .carousel-inner .carousel-item>div {
        display: none;
    }

    #POP_CATEGORIES .carousel-inner .carousel-item>div:first-child {
        display: block;
    }
}

#POP_CATEGORIES .carousel-inner .carousel-item.active,
#POP_CATEGORIES .carousel-inner .carousel-item-start,
#POP_CATEGORIES .carousel-inner .carousel-item-next,
#POP_CATEGORIES .carousel-inner .carousel-item-prev {
    display: flex;
}

@media (min-width: 768px) {

    #POP_CATEGORIES .carousel-inner .carousel-item-right.active,
    #POP_CATEGORIES .carousel-inner .carousel-item-next,
    #POP_CATEGORIES .carousel-item-next:not(.carousel-item-start) {
        transform: translateX(25%) !important;
    }

    #POP_CATEGORIES .carousel-inner .carousel-item-left.active,
    #POP_CATEGORIES .carousel-item-prev:not(.carousel-item-end),
    #POP_CATEGORIES .active.carousel-item-start,
    #POP_CATEGORIES .carousel-item-prev:not(.carousel-item-end) {
        transform: translateX(-25%) !important;
    }

    #POP_CATEGORIES .carousel-item-next.carousel-item-start,
    #POP_CATEGORIES .active.carousel-item-end {
        transform: translateX(0) !important;
    }

    #POP_CATEGORIES .carousel-inner .carousel-item-prev,
    #POP_CATEGORIES .carousel-item-prev:not(.carousel-item-end) {
        transform: translateX(-25%) !important;
    }
}

#POP_CATEGORIES .itemCar{
	display:flex;
	flex-direction: column;

}

#POP_CATEGORIES .itemCar .text1{
	font-size: 36px;
	font-family: 'Rajdhani';
	color: black;
	margin-bottom: 10px;
	margin-top: 15px;
	transition: .5s ease;
}

#POP_CATEGORIES .itemCar:hover .text1{
	color: #58c5c7;
}



#POP_CATEGORIES .itemCar .text2{
	font-size: 18px;
	font-family: 'Rajdhani';
	color: black;
	margin-bottom: 10px;
	
}

#POP_CATEGORIES .itemCar button{
	padding-top: 15px;
		padding-bottom: 15px;
		padding-left: 40px;
		padding-right: 40px;
		border: solid #58c5c7 1px;
		background-color: #0000;
		color: black;
		border-radius: 50px;
		margin-bottom: 15px;
		transition: .5s ease;
}

#POP_CATEGORIES .itemCar button:hover{
	color: white;
	background-color: #58c5c7;
}


.carButtonCont{
	display: flex;
	justify-content: space-evenly;
	padding: 30px;
	align-items: center;
	width: 15%;
}

#carPrev4, #carNext4{
	width: 40px;
	height: 40px;
	position: relative;
	opacity: 1;
	background-color: black;
	border-radius: 50%;
	transition: .5s ease;
}


#POP_CATEGORIES #carPrev4:hover, #POP_CATEGORIES #carNext4:hover{
	background-color: #58c5c7;
}

#POP_CATEGORIES{
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	padding-top: 10rem;
	padding-bottom: 12rem;
}

#POP_CATEGORIES .heading{
	width: 40%;
	display: flex;
	justify-content: center;
	flex-direction: column;
	align-items: center;
	margin-bottom: 80px;
}



#POP_CATEGORIES .heading .text1{
	font-size: 36px;
	font-family: sans-serif;
	font-weight: bold;
	color: black;
}

#POP_CATEGORIES .heading .desc{
	font-size: 16px;
	font-family: 'Rajdhani';
	text-align: center;
	color: black;
}






</style>