<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/Projekti-Grupor/views/showListView.php');
$lista = new InsertView();
$listat = $lista->getShoppingList();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Your Cart</title>
   
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"  href="cartscc.css" />
</head>

<body>
    <header id="headerr">
        <div class="meny">
            <button id="homebtn" type="menu" onclick="location.href='homepage.php'"><img id="imge"src="homeicon.JPG"  ></button>
            <button id="homebtn" type="menu" onclick="location.href='Cart.php'"><img id="imge"src="carticon.JPG"  ></button>
            <button id="homebtn" type="menu"><img id="imge"src="locationicon.JPG"  ></button>
            <button id="homebtn" type="menu" onclick="location.href='logIn.php'"><img id="imge"src="loginicon.JPG"  ></button>
            <button id="homebtn" type="menu"><img id="imge" src="languageicon.JPG"  ></button>

        </div>
        <h2 class="text">Your Cart</h2>
        <hr style="color: white; width: 150px; margin-left:45%;">
        <p style="font-family: 'Segoe Print'; margin-bottom: 5px;">Make the perfect purchase from your home</p>
    </header>
    <div class="kryesor">
        <div class="tabela">
            <table class="productList">
                <tr>
                    <th></th>
                    <th></th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <?php foreach($listat as $list):?>
                <tr>
                    <td><button id="remove">X</button></td>
                    <td><img id="pro" src="<?php echo $list['ProductPath']?>" alt="fotoja e produktit"></td>
                    <td><?php echo $list['ProductName']?></td>
                    <td><?php echo number_format($list['ProductPrice'], 2, '.', ',') ?>$</td>
                    <td><?php echo $list['Quantity']?></td>
                    <td><?php echo number_format($list['Total'], 2, '.', ',') ?>$</td>
                </tr>
                <?php endforeach; ?>
               <!--- <tr>
                    <td><button id="remove">X</button></td>
                    <td><img id="pro" src="sempre.jpg" alt="fotoja e produktit"></td>
                    <td>Sempre biscuits - </td>
                    <td>1$</td>
                    <td>2</td>
                    <td>2$</td>
                </tr>
                <tr>
                    <td><button id="remove">X</button></td>
                    <td><img id="pro" src="vita.jpg" alt="fotoja e produktit"></td>
                    <td>Vita yougurt(Slim Fit) - </td>
                    <td>0.80$</td>
                    <td>1</td>
                    <td>0.80$</td>
                </tr>--->
                <tr>

                    <td colspan="2"><input class="label" id="label" name="" type="text" placeholder="Coupon code..." /> </td>
                    <td colspan="2"><button class="cuponB">Apply Coupon</button></td>
                    <td colspan="2"></td>
                </tr>
            </table>
        </div>
        <div class="totali">
            <fieldset class="legendd">
                <legend style="font-size: medium; color: maroon;"><em>Cart totals</em></legend>
                <table class="tot">
                    <tr>

                        <th>Total</th>
                        <td>3.37$</td>

                    </tr>
                </table>


            </fieldset>

        </div>
        <div class="check" style="margin-top: 0;">
            <button class="out">checkout</button>
        </div>
    </div>
    <footer>
        <div class="footer">
            <div class="pckMrk" style="font-family: Calibri; font-size: 40px; ">pocketMarket</div>

            <div class="middlepart">
                <div class="downmenu">

                    <button id="footbtn"  onclick="location.href='homepage.php'">Home</button>
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
</body>

</html>