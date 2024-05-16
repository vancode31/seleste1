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
    <title>Artz Shop</title>
    <link rel="icon" type="image/x-icon" href="assets/logotab.png">

</head>
<body>

<?php include 'header.html';
include 'fixedButton.html'  ?>

<div class="shopHeader">
    <h1>COLLECTION</h1>
    <p><a href = "home.php">Home </a> / Products</p>
</div>


    <div class="shopMain" style = "display: flex;">



        <div class="col-4" id = "shopSideBar" style = "">
            <div class = "shopSideBarDiv">
                <p>Filter:</p>
            </div>

            <div class = "shopSideBarDiv" id = "availability">
                <p>Availability:</p> <span class = "glyphicon glyphicon-chevron-down"></span>
            </div>

            <div class = "shopSideBarDivDrop" id = "availDrop">
                <div class = "availOpt">
                    <p><span class="glyphicon glyphicon-unchecked"></span> In stock (42)</p>                
                </div>

                <div class = "availOpt">
                    <p><span class="glyphicon glyphicon-unchecked"></span> Out of Stock (42)</p>                
                </div>
                
            </div>

            <div class = "shopSideBarDiv" id = "price">
                <p>Price:</p> <span class = "glyphicon glyphicon-chevron-down"></span>
            </div>

            <div class = "shopSideBarDivDrop" id = "priceDrop">
                <p>The Highest price os $947.00</p>
                <div class = "priceRange">
                    <p>$</p> <input class = "priceInput" type="text" placeholder="0"> <input class = "priceInput" type="text" placeholder="947.00">             
                </div>  
            </div>

            

            <div class = "shopSideBarDiv">
                <p>Custom Menu</p>
            </div>

            <div class = "sideLinksShop">
                <a href="home.php">. Home</a>
                <a href="home.php">. Shop</a>
                <a href="home.php">. About</a>
                <a href="home.php">. Contact</a>
            </div>

            <div class = "shopSideBarDiv">
                <p>Heading</p>
            </div>

            <div class = "sideItems">
                
                <div class="item">
                    <img src="assets/vase1.jpg" alt="">
                    <div class="imgDesc">
                        <p class = "name">Plastic Flower Vase</p>
                        <div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
                        <p class = "price">$564.00</p>
                    </div>
                </div>

                <div class="item">
                    <img src="assets/flower.jpg" alt="">
                    <div class="imgDesc">
                        <p class = "name">Artificial Blossom Flowers</p>
                        <div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
                        <p class = "price">$564.00</p>
                    </div>
                </div>

                <div class="item">
                    <img src="assets/vase2.jpg" alt="">
                    <div class="imgDesc">
                        <p class = "name">Decorative Flower Vase</p>
                        <div class="stars">
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						</div>
                        <p class = "price">$564.00</p>
                    </div>
                </div>

            </div>
        
        </div>






        <div class="col-8" id = "mainItems">

            <div class = "shopFilters">
                <div class="buttons">
                    <button class = "listView" id = "buttonGrid"><span class = "glyphicon glyphicon-th"></span></button>
                    <button class = "listView" id = "buttonList"><span class = "glyphicon glyphicon-list"></span></button>
                </div>

                <script>


                    function listView() {
                    var items = document.querySelectorAll('#mainItems .col-4');
                    var mainButton = document.querySelector('#buttonList'); 
                    var otherButton = document.querySelector('#buttonGrid');   
                    var containers = document.querySelectorAll('.itemShop');
                    var hoverCont = document.querySelectorAll('.itemShopHover')
                    var itemDesc = document.querySelectorAll('.itemDesc')

                    mainButton.style.color = 'white';
                    mainButton.style.backgroundColor = '#58c5c7';
                    otherButton.style.color = 'black';
                    otherButton.style.backgroundColor = 'white';
                    
                    items.forEach(function(item) {

                    item.style.padding = '  0px 20px 20px 20px';
                    item.classList.remove('col-4'); 
                    item.classList.add('col-12'); 

                    var img = item.querySelector('img');
                    if (img) {
                        img.style.width = '32%';
                    }

                    });


                    containers.forEach(function(container) {
                    container.style.flexDirection = 'row';
                    });

                    hoverCont.forEach(function (hovCont){
                        hovCont.style.width = '32%';
                    });

                    itemDesc.forEach(function(desc){
                        desc.style.paddingLeft = '30px';
                        desc.style.paddingRight = '30px';
                    
                        desc.style.display = 'flex';
                        desc.style.flexDirection = 'column';
                        desc.style.justifyContent = "flex-start";
                        desc.style.alignItems = "flex-start"; 

                        var proDesc = desc.querySelector('.proDesc');
                        if(proDesc){
                            proDesc.style.display = 'flex';
                        }
                    });



                }
                document.getElementById('buttonList').addEventListener('click', listView);

                function gridView(){
                    var items = document.querySelectorAll('#mainItems .col-12');
                    var mainButton = document.querySelector('#buttonGrid');    
                    var otherButton = document.querySelector('#buttonList');    
                    var containers = document.querySelectorAll('.itemShop');
                    var hoverCont = document.querySelectorAll('.itemShopHover')
                    var itemDesc = document.querySelectorAll('.itemDesc')

                    mainButton.style.color = 'white';
                    mainButton.style.backgroundColor = '#58c5c7';
                    otherButton.style.color = 'black';
                    otherButton.style.backgroundColor = 'white';
                    
                    items.forEach(function(item) {

                    
                    item.style.padding = '0px 20px';
               
                    item.classList.remove('col-12'); 
                    item.classList.add('col-4'); 

                    var img = item.querySelector('img');
                    if (img) {
                        img.style.width = '100%';
                    }

                    });


                    containers.forEach(function(container) {
                    container.style.flexDirection = 'column';
                  
                    });

                    hoverCont.forEach(function (hovCont){
                        hovCont.style.width = '100%';
                    });

                    itemDesc.forEach(function(desc){
                        desc.style.paddingLeft = '0px';
                        desc.style.paddingRight = '0px';
                    
                        desc.style.display = 'flex';
                        desc.style.flexDirection = 'column';
                        desc.style.justifyContent = "center";
                        desc.style.alignItems = "center"; 

                        var proDesc = desc.querySelector('.proDesc');
                        if(proDesc){
                            proDesc.style.display = 'none';
                        }
                    });
                }

                document.getElementById('buttonGrid').addEventListener('click', gridView);

                </script>



                <div class="sorter">
                    <select name="" id="">
                        <option value="" selected disabled>Sort by</option>
                        <option value="">Featured</option>
                        <option value="">BestSelling</option>
                        <option value="">Alphabetically A-Z</option>
                        <option value="">Alphabetically Z-A</option>
                        <option value="">Price, Low to High</option>
                        <option value="">Price, High to Low</option>
                        <option value="">Date, Old to New</option>
                        <option value="">Date, New to Old</option>
                    </select>
                    <p class = "productNum">45 PRODUCTS</p>
                </div>
            </div>




        <div class = "row">
            <div class="col-4">
            <div class = "itemShop">
						<img src="assets/clock.jpg" alt="">
                        <div class = "itemDesc">
                            <p class = "text1">Ancient Clock</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class = "text2">$589.00</p>
                            <p class = "proDesc">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas sapien et mollis.</p>
                        </div>
						<div class = "itemShopHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
			</div>
            </div>

            <div class="col-4">
            <div class = "itemShop">
						<img src="assets/bowl.jpg" alt="">
						<div class = "itemDesc">
                            <p class = "text1">Handmade Bowl</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class = "text2">$589.00</p>
                            <p class = "proDesc">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas sapien et mollis.</p>
                        </div>
						<div class = "itemShopHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
            </div>

            <div class="col-4">
            <div class = "itemShop">
						<img src="assets/bino.jpg" alt="">
						<div class = "itemDesc">
                            <p class = "text1">Awesome Binoculars</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class = "text2">$589.00</p>
                            <p class = "proDesc">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas sapien et mollis.</p>
                        </div>
						<div class = "itemShopHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
            </div>
        </div>



        
        <div class = "row">
            <div class="col-4">
            <div class = "itemShop">
						<img src="assets/fitness.jpg" alt="">
						<div class = "itemDesc">
                            <p class = "text1">Some Weird Thing</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class = "text2">$589.00</p>
                            <p class = "proDesc">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas sapien et mollis.</p>
                        </div>
						<div class = "itemShopHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
            </div>

            <div class="col-4">
            <div class = "itemShop">
						<img src="assets/jewel.jpg" alt="">
						<div class = "itemDesc">
                            <p class = "text1">Wooden Jewel Box</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class = "text2">$589.00</p>
                            <p class = "proDesc">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas sapien et mollis.</p>
                        </div>
						<div class = "itemShopHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
            </div>

            <div class="col-4">
            <div class = "itemShop">
						<img src="assets/bell.jpg" alt="">
						<div class = "itemDesc">
                            <p class = "text1">Coffee Maker</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class = "text2">$589.00</p>
                            <p class = "proDesc">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas sapien et mollis.</p>
                        </div>
						<div class = "itemShopHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
            </div>
        </div>
        

        <div class = "row">
            <div class="col-4">
            <div class = "itemShop">
						<img src="assets/tape.jpg" alt="">
						<div class = "itemDesc">
                            <p class = "text1">Just Something</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class = "text2">$589.00</p>
                            <p class = "proDesc">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas sapien et mollis.</p>
                        </div>
						<div class = "itemShopHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
            </div>

            <div class="col-4">
            <div class = "itemShop">
						<img src="assets/vase2.jpg" alt="">
						<div class = "itemDesc">
                            <p class = "text1">Ceramic Vase</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class = "text2">$589.00</p>
                            <p class = "proDesc">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas sapien et mollis.</p>
                        </div>
						<div class = "itemShopHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
            </div>

            <div class="col-4">
            <div class = "itemShop">
						<img src="assets/product19.jpg" alt="">
						<div class = "itemDesc">
                            <p class = "text1">Girl Figurine</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class = "text2">$589.00</p>
                            <p class = "proDesc">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas sapien et mollis.</p>
                        </div>
						<div class = "itemShopHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
            </div>
        </div>

        <div class = "row">
            <div class="col-4">
            <div class = "itemShop">
						<img src="assets/smoking.jpg" alt="">
                        
						<div class = "itemDesc">
                            <p class = "text1">Smoking Bird</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class = "text2">$589.00</p>
                            <p class = "proDesc">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas sapien et mollis.</p>
                        </div>
						<div class = "itemShopHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
            </div>

            <div class="col-4">
            <div class = "itemShop">
						<img src="assets/chickenW.jpg" alt="">
						<div class = "itemDesc">
                            <p class = "text1">Toy Chicken</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class = "text2">$589.00</p>
                            <p class = "proDesc">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas sapien et mollis.</p>
                        </div>
						<div class = "itemShopHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
            </div>

            <div class="col-4">
            <div class = "itemShop">
						<img src="assets/vase1.jpg" alt="">
						<div class = "itemDesc">
                            <p class = "text1">Artificial Flowers</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class = "text2">$589.00</p>
                            <p class = "proDesc">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas sapien et mollis.</p>
                        </div>
						<div class = "itemShopHover">
						<button><span class = "glyphicon glyphicon-copy"></span></button>
						<button><span class = "glyphicon glyphicon-heart"></span></button>
						<button><span class = "glyphicon glyphicon-search"></span></button>
						</div>
					</div>
            </div>
        </div>
        

        

        <div class = "itemsButtons">
            <button class = "myButtonItems" id = "itemBut1">1</button>
            <button class = "myButtonItems" id = "itemBut2">2</button>
            <button class = "myButtonItems" id = "itemBut3">3</button>
            <button class = "myButtonItems" id = "itemBut4">4</button>
            <button class = "myButtonItems" id = "itemBut5"><span class = "glyphicon glyphicon-menu-right"></span></button>

        </div>

    

        </div>
        </div>


    </div>


    <script src = "shopPage.js"></script>
    <?php include 'newFooter.html'; ?>

</body>
</html>

<style>
    .shopMain{
        padding-right: 50px;
    }

    .shopHeader{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 50px;
        background-color: #f7f7f7;
        margin-bottom: 12rem;
    }

    .shopHeader h1{
        font-family: sans-serif;
        font-weight: bold;
        font-size: 36px;
    }

    .shopHeader p{
        color: black;
        font-size: 16px;
        font-family: 'Rajdhani';
    }

    .shopHeader a{
        text-decoration: none;
        color: black;
        margin-right: 6px;
    }

    #shopSideBar{
        padding-left: 60px;
        padding-right: 0px;
        padding-top: 20px;
    }

    .shopSideBarDiv{
        background-color: #58c5c7;
        width: 90%;
        padding: 10px;
        padding-top: 15px;
        padding-right: 25px;
        border-radius: 50px;
        margin-bottom: 25px;
        transition: .5s ease;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
    }

    #shopSideBar #availability:hover, #shopSideBar #price:hover{
        background-color: black;
    }

    .shopSideBarDiv p{
        font-family: sans-serif;
        font-size: 18px;
        margin-left: 8px;
    }

    .shopSideBarDivDrop .availOpt{
        display: flex;
  
        margin: 0px;
        padding: 0px;
        width: 85%;                                    
    }

    .shopSideBarDivDrop .availOpt p{
        font-family: 'Rajdhani';
        font-size: 16px;
        color: black;
        transition: .3s ease;
    }

    .shopSideBarDivDrop .availOpt p:hover{
        color: #58c5c7;
    }

    .shopSideBarDivDrop .availOpt span{
        margin-right: 10px;
    }

    .shopSideBarDivDrop{
        width: 90%;
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;   
        margin-bottom: 25px;                                                                 
     }

     #priceDrop p{
        font-size: 18px;
        font-family: 'Rajdhani';
        color: black;
     }

     #priceDrop .priceRange{
        display: flex;   
        justify-content: space-between;    
        width: 80%;  
        align-items: center; 
                                                        
     }

     #priceDrop .priceInput{
        width: 45%;
        border: solid gray 1px;
        height: 50px;
     }

     


    .sideLinksShop{
        width: 90%;
        display: flex;
        flex-direction: column;
        
    }

    .sideLinksShop a{
        margin-left: 25px;
        font-size: 16px;
        font-family: 'Rajdhani';
        margin-bottom: 25px;
        color: black;
        transition: .5s ease;
    }

    .sideLinksShop a:hover{
        text-decoration: none;
        color: #58c5c7;
    }

    .sideItems .item{
        display: flex;
        margin-bottom: 20px;
    }

    .sideItems .item img{
        width: 35%;
    }

    .sideItems .item .imgDesc{
        width: 60%;
        padding-left: 18px;
        align-items: center;
        justify-content: center;
        padding-top: 25px;
    }

    .sideItems .item .name{
        color: black;
        font-size: 18px;
        margin-bottom: 15px;
        transition: 0.3s ease;
    }

    .sideItems .item .stars{
        margin-bottom: 15px;
    }

    .sideItems .item .price{
        color: black;
        font-size: 22px;
    }

    .item:hover .name{
        color: #58c5c7;
    }

    .shopFilters{
        background-color: #f7f7f7;
        display: flex;
        justify-content: space-between;
        margin-bottom: 35px;
    }

    .shopFilters .buttons{
        padding: 15px;
    
    }

    .shopFilters .sorter{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px;
    }

    .shopFilters .sorter select{
        height: 40px;
        width: 100px;
        border: none;
        background-color: #58c5c7;      
        padding: 8px;  
        color: white ;  
        font-family: 'Rajdhani';                                                             
    }

    .shopFilters .sorter select:hover{
        background-color: black;                                                             
    }

    .shopFilters .sorter .productNum{
        color: black;
        margin-left: 15px;
        font-size: 18px;                                            
        font-weight: bolder;
    }

    #buttonGrid{
        color: white;
        background-color: #58c5c7;
    }

    .shopFilters .buttons .listView{
        margin-left: 0px;
        width: 40px;
        height: 40px;  
        border: none;
        background-color: white;
        color: black;
        transition: .5s ease; 
    }

    .shopFilters .buttons .listView:hover{

        color: #58c5c7;
    }
    


    .itemShop{
	display:flex;
	align-items: center;
	flex-direction: column;
	position: relative;	
    width: 100%;

}


.itemShop:hover .text1{
	color: #58c5c7;
}


.itemShop img{
	width: 90%;
}

.itemShop .text1{
	color:black;
	font-size: 18px;
	font-weight:bolder;
	margin-top: 8px;
    margin-top: 20px;

}

.itemShop .text2{
	color:black;
	font-size: 15px;
	margin-top: 8px;
}

.itemShop .proDesc{
    color: black;
    font-family: 'Rajdhani';
    font-sizE: 16px;
    margin-top: 25px;
    display: none;
}

.itemShop .itemDesc{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.itemShop .stars{
	display: flex;
	align-items:center;
}

.itemShop .stars .checked{
	color: black;
}

    .itemShopHover {
        transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%; 
    height: 100%; 
    display: flex;
    justify-content: center;

}

.itemShopHover button{
	width: 40px;
	height: 40px;
	border: none;
	background-color: black;
	color: white;
	border-radius: 50%;
	transition: .5s ease;
    margin: 6px;
    margin-top: 80%;
}

.itemShopHover button:hover{
	background-color: #58c5c7;
}

.itemShop:hover .itemShopHover {
  opacity: 1;
}

#mainItems{
    margin-bottom: 80px;
}


#mainItems .row{
    margin-bottom: 30px;
}

.itemsButtons{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    padding-left: 30rem;
    padding-right: 30rem;
}

.itemsButtons .myButtonItems{
    width: 40px;
    height: 40px;
    border: solid #58c5c7 2px;
    background-color: #0000;
    border-radius: 50%;
    font-family: 'Rajdhani';
    transition: .5s ease;
}

.itemsButtons .myButtonItems:hover{
    background-color: #58c5c7;
    color: white;
}

    


</style>