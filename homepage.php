<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/views/showProductView.php');
$slide = new InsertView();
$sliderat = $slide->getSliderProducts();

require_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/views/showSliderMarketView.php');
$slide1 = new InsertView2();
$sliderat1 = $slide1->getSliderMarket();

?>

<DOCTYPE html>
<html>

<head>
    <title>pocketMarket-Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="hpstyle.css">


</head>

<body class ="bodyyy">


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
            <button id="homebtn" type="menu"><img id="imge" src="homeicon.JPG"></button>
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
            <div class="slides">
                <div class="slideshow-container">

                <?php foreach($sliderat1 as $slide1):?>
                    <div class="mySlides fade">
                        

                        <img src="<?PHP echo $slide1['SliderMarketPicPath']?>" style="width:100%;">

                    </div>
                    <?php  endforeach; ?>

                 <!--  <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="edeka.jpg" style="width:100%">

                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="aldi.jpg" style="width:100%">

                    </div>
                     --->
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>

                <script src="hpmain.js">
                </script>
            </div>

            <div class=" photos3">
            <?php foreach($sliderat as $slide): ?>
                <div class="photos2 fade">

                    <img id="photo" src="<?php echo $slide['SliderProductPicPath'];?>">

                </div>
                <?php endforeach?>

                <!---<div class="photos2 fade">

                    <img id="photo" src="keksaa.jpg">

                </div>

                <div class="photos2 fade">

                    <img id="photo" src="ujTh.jpg">

                </div>
               --->

                <div style="text-align:center">
                    <span class="pikat2"></span>
                    <span class="pikat2"></span>
                    <span class="pikat2"></span>
                </div>
            </div>


        </div>


    </div>

    <script>
        var indx = 0;
        Slides();

        function Slides() {
            var j;
            var slides = document.getElementsByClassName("photos2");
            var dots = document.getElementsByClassName("pikat2");
            for (j = 0; j < slides.length; j++) {
                slides[j].style.display = "none";
            }
            indx++;
            if (indx > slides.length) {
                indx = 1
            }
            for (j = 0; j < dots.length; j++) {
                dots[j].className = dots[j].className.replace(" active", "");
            }
            slides[indx - 1].style.display = "block";
            dots[indx - 1].className += " active";
            setTimeout(Slides, 2000);
        }
    </script>
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
                <button type="button" id="aboutus"  onclick="location.href='logIn.php'">REGISTER</button>
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