<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/views/insertProductView.php');
$produkt = new InsertView();
$produktet = $produkt->getP();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>pocketMarket-Products</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="productpageadminstyle.css">


</head>

<body>
    <div class="upper">
        <div id="box1">
            <div class="pocketMarket">
                <b>Admin Dashboard</b>
            </div>

        </div>

        <div id='box2'>
            <div class="over">pocketMarket</div>
            <div class="choose"> Price Comparison Web</div>

        </div>


    </div>
    <div class="lower">

        <div class="middle">


            <div class="nenmeny">
            <button class="nmenubtn" type="menu"onclick="location.href='adminPage.php'">Home</button>
                <button class="nmenubtn" type="menu"onclick="location.href='productForm.php'">Products</button>
                <button class="nmenubtn" type="menu">Product Slider</button>
                <button class="nmenubtn" type="menu">Offers</button>
                <button class="nmenubtn" type="menu">Markets</button>
            </div>


            <div class="swiper-container">

                <div class="swiper-wrapper">

                    <?php foreach ($produktet as $produkt) : ?>
                        <div class="swiper-slide">


                            <div class="slider-box">

                                <p class="time">New</p>


                                <div class="img-box">
                                    <?php if ($produkt['ProductPicPath']) : ?>
                                        <img src="<?php echo $produkt['ProductPicPath']; ?>">
                                    <?php else : ?>
                                        <p>No image selected</p>
                                    <?php endif ?>
                                </div>

                                <p class="detail"><?php echo $produkt['ProductName'] ?>
                                    <a href="#" class="price"><?php echo number_format($produkt['Price'], 2, '.', ',') ?>
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
</body>
</div>

<footer>


    <div class="footer">
        <div class="pckMrk" style="font-family: Calibri; font-size: 40px; ">pocketMarket</div>


        <div class="downmenu">


            <button id="footbtn"onclick="location.href='adminPage.php'">Home</button>
            <button id="footbtn" onclick="location.href='productForm.php'">Product</button>
            <button id="footbtn">Product Slider</button>
            <button id="footbtn">Offers</button>
            <button id="footbtn">Markets</button>
        </div>



    </div>

    <div id="copy">&copy All Rights Reserved</div>


</footer>


</html>