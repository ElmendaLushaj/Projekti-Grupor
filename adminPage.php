<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/models/insertAboutUs.php');
$produkt = new InsertView();
$produktet = $produkt->getKomentet();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>pocketMarket-Products</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="productFormStyle.css">


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
                <button class="nmenubtn" type="menu" >Home</button>
                <button class="nmenubtn" type="menu"onclick="location.href='productForm.php'">Products</button>
                <button class="nmenubtn" type="menu">Product Slider</button>
                <button class="nmenubtn" type="menu">Offers</button>
                <button class="nmenubtn" type="menu">Markets</button>
            </div>

            <body>
                <div class="form-group">
                    <div class="form-header">
                        <h2 class ="titulli1">About Us Comments</h2>
                    </div>
                    <div class="swiper-container">
           
           <div class="swiper-wrapper">
           
           <?php foreach($produktet as $produkt):?>
               <div class="swiper-slide">

           
                   <div class="slider-box">
                  
                       <p class="time">New</p>
                       

                       <div class="img-box">
                    
                         <p> <?php echo $produkt['Comment'];?></p>
                       
                     
                       </div>
                       
                      
                      
                      

                   </div>
                   
               </div>
               <?php endforeach; ?>
           </div>
                       
           
       </div>


                </div>
            </body>
            <footer>
        </div>
    </div>

    <div class="footer">
        <div class="pckMrk" style="font-family: Calibri; font-size: 40px; ">pocketMarket</div>


        <div class="downmenu">


            <button id="footbtn">Home</button>
            <button id="footbtn" onclick="location.href='productForm.php'">Product</button>
            <button id="footbtn">Product Slider</button>
            <button id="footbtn">Offers</button>
            <button id="footbtn">Markets</button>
        </div>



    </div>

    <div id="copy">&copy All Rights Reserved</div>
    </div>

    </footer>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
        $.validate({
            errorMessageClass: "error",
        });
    </script>

</html>