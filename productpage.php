<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/views/insertProductView.php');
$produkt = new InsertView();
$produktet = $produkt->getP();
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pocketMarket-products</title>
    <link rel="stylesheet" href="productstyle.css">


</head>

<body>


    <div class="upper">


        <div id="box1">
            <div class="pocketMarket">
                <b>pocketMarket</b>
            </div>


            <div class="rks">RKS price comparison</div>
            <div class="searchbtn">
                <input id="srch" placeholder="  Search..." />

                <button id="btn" type="submit"><img id="icon" src="searchicon.png"></button>
            </div>

        </div>

        <div id='box2'>
            <div class="over">Over 1000 products...</div>
            <div class="choose"> Choose the best offers near you!</div>

        </div>


    </div>
    <div class="lower">

        <div class="meny">
            <button id="homebtn" type="menu" onclick="location.href='homepage.php'"><img id="imge" src="homeicon.JPG"></button>
            <button id="homebtn" type="menu" onclick="location.href='Cart.php'"><img id="imge"
                    src="carticon.JPG"></button>
            <button id="homebtn" type="menu"><img id="imge" src="locationicon.JPG"></button>
            <button id="homebtn" type="menu" onclick="location.href='logIn.php'"><img id="imge"
                    src="loginicon.JPG"></button>
            <button id="homebtn" type="menu"><img id="imge" src="languageicon.JPG"></button>

        </div>
        
        <div class="middle">


            <div class="nenmeny">
                <button id="nmenubtn" type="menu" onclick="location.href='productpage.php'">Product</button>
                <button id="nmenubtn" type="menu">Offers</button>
                <button id="nmenubtn" type="menu">Account</button>
                <button id="nmenubtn" type="menu">Settings</button>


            </div>
           
            <div class="swiper-container">
           
                <div class="swiper-wrapper">
                
                <?php foreach($produktet as $produkt):?>
                    <div class="swiper-slide">

                
                        <div class="slider-box">
                       
                            <p class="time">New</p>
                            

                            <div class="img-box">
                            <?php if($produkt['ProductPicPath']):?>
                               <img class = "imgg"src="<?php echo $produkt['ProductPicPath'];?>">
                            <?php else: ?>
                            <p>No image selected</p>
                            <?php endif ?>
                            </div>
                            
                            <p class="detail"><?php echo $produkt['ProductName']?>
                                <a href="#" class="price"><?php echo number_format($produkt['Price'], 2, '.', ',')?>
                            </a>
                            </p>
                            <div class="Cart">
                                <a href="#">Add to Cart</a>
                            </div>
                           

                        </div>
                        
                    </div>
                    <?php endforeach; ?>
                </div>
                            
                
            </div>
               
               <!-- <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-box">

                            <div class="img-box">
                            <img src="keksaa.jpg">
                            </div>
                            
                            </div>
                            <p class="detail">keksa
                                <a href="#" class="price">Price-0.85€
                              </a>
                            </p>
                            <div class="Cart">
                                <a href="#">Add to Cart</a>
                            </div>


                        </div>
                    </div>
                </div>
              
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-box">

                            <div class="img-box">
                                <img src="keksaa.jpg">
                            </div>
                            <p class="detail">Keksa te bluar
                                <a href="#" class="price">Price-1.00€
                                  </a>
                            </p>
                            <div class="Cart">
                                <a href="#">Add to Cart</a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-box">

                            <div class="img-box">
                                <img src="vita.jpg">
                            </div>
                            <p class="detail">Vita Jogurt 
                                <a href="#" class="price">Price-0.90€
                                      </a>
                            </p>
                            <div class="Cart">
                                <a href="#">Add to Cart</a>
                            </div>


                        </div>
                    </div>
                </div>





            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-box">
                            <p class="time">New</p>
                            <div class="img-box">
                                <img src="vitaqumesht.jpg">
                            </div>
                            <p class="detail">Vita qumesht 
                                <a href="#" class="price">Price-0.90€
              </a>
                            </p>
                            <div class="Cart">
                                <a href="#">Add to Cart</a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-box">

                            <div class="img-box">
                                <img src="frutomania_malna_slider.png">
                            </div>
                            <p class="detail">Frutomanian dredhez 
                                <a href="#" class="price">Price-2.15€
                  </a>
                            </p>
                            <div class="Cart">
                                <a href="#">Add to Cart</a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-box">

                            <div class="img-box">
                                <img src="argeta,jpg.jpg">
                            </div>
                            <p class="detail">Argeta
                                <a href="#" class="price">Price-0.89€
                      </a>
                            </p>
                            <div class="Cart">
                                <a href="#">Add to Cart</a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-box">

                            <div class="img-box">
                                <img src="i-love-milka-pralines-strawberry-creme-110gr.jpg">
                            </div>
                            <p class="detail">Cokollade Milka
                                <a href="#" class="price">Price-1.20€
                          </a>
                            </p>
                            <div class="Cart">
                                <a href="#">Add to Cart</a>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-box">
                            <p class="time">New</p>
                            <div class="img-box">
                                <img src="djath-rugove-300x300.png">
                            </div>
                            <p class="detail">Djath Rugova
                                <a href="#" class="price">Price-4.80€
                  </a>
                            </p>
                            <div class="Cart">
                                <a href="#">Add to Cart</a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-box">

                            <div class="img-box">
                                <img src="cajizi.png">
                            </div>
                            <p class="detail">Caj i zi
                                <a href="#" class="price">Price-2.00€
                      </a>
                            </p>
                            <div class="Cart">
                                <a href="#">Add to Cart</a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-box">

                            <div class="img-box">
                                <img src="prince.jpg">
                            </div>
                            <p class="detail">3n1 Prince
                                <a href="#" class="price">Price-0.90€
                          </a>
                            </p>
                            <div class="Cart">
                                <a href="#">Add to Cart</a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-box">

                            <div class="img-box">
                                <img src="finesa.png">
                            </div>
                            <p class="detail">Miell Finesa
                                <a href="#" class="price">Price-1.00€
                              </a>
                            </p>
                            <div class="Cart">
                                <a href="#">Add to Cart</a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>--->

        </div>
                            
    </div>



</body>
<footer>
    <div class="footer">
        <div class="pckMrk" style="font-family: Calibri; font-size: 40px; ">pocketMarket</div>

        <div class="middlepart">
            <div class="downmenu">

                <button id="footbtn">Home</button>
                <button id="footbtn" onclick="location.href='Cart.php'">Cart</button>
                <button id="footbtn">Location</button>
                <button id="footbtn" onclick="location.href='logIn.php'">Sign-in</button>
                <button id="footbtn">Language</button>
                <p class="oc" style="margin-left: 30%;"> Our collaborators:<br></p>
            </div>
            <div class="footbx2">
                <button type="button" id="aboutus" onclick="location.href='aboutus.php'">ABOUT US</button>
                <button type="button" id="aboutus">REGISTER</button>
            </div>

            <div class="footbx3">

                <img class="bsh" src="viva.png">
                <img class="bsh" src="albi.png">
                <img class="bsh" src="superviva.png">

            </div>
        </div>

        <div id="copy">&copy All Rights Reserved</div>
    </div>

</footer>

</html>