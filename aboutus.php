<!DOCTYPE html>
<html>

<head>
    <title>ABOUT-US</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"  href="aboutCss.css">
</head>

<body>
    <div class="backgroundi">
        <div class="shade">
            <div class="meny">
                <button id="homebtn" type="menu" onclick="location.href='homepage.php'"><img id="imge"src="homeicon.JPG"  ></button>
                <button id="homebtn" type="menu" onclick="location.href='Cart.php'"><img id="imge"src="carticon.JPG"  ></button>
                <button id="homebtn" type="menu"><img id="imge"src="locationicon.JPG"  ></button>
                <button id="homebtn" type="menu" onclick="location.href='logIn.php'"><img id="imge"src="loginicon.JPG"  ></button>
                <button id="homebtn" type="menu"><img id="imge" src="languageicon.JPG"  ></button>

            </div>

            <div class="BoxiKryesor">


<div class="AboutUsBoxi">
    <h1 class="texti" style="padding-bottom:0px; padding-left: 70%; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
        ABOUT US</h1>
    <h4 style="color:black; padding-left: 15%; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
        Pocket Market is a new application,
        <br> which keeps you informed in real time about 
        <br>  the products and markets that you express interest.
        <br> For any ambiguity feel free to contact us.
    </h4>
    
        <div class="textarea">
            <h3 style="padding-left:15%; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> Give us your thoughts</h3>
            <form action="models/insertAboutUs.php" method="post">
            <input id="area" name="w3review" rows="10" cols="50"/>
               

    
    <input name ="submitB" class="button" type = "submit"  value= "Send" />
    </form>
         </div>

</div>
<div class="FOTOBox">
    <img src="logoja.png" style="width:40vw; height:70vh;padding-top: 25px; padding-bottom: 10px;">

</div>
</div>

</div>
</div>
</body>
            
<footer>
    <div class="footer">
        <div class="pckMrk" style="font-family: Calibri; font-size: 40px; ">pocketMarket</div>

        <div class="middlepart">
            <div class="downmenu">

                <button id="footbtn" onclick="location.href='homepage.php'">Home</button>
                <button id="footbtn" onclick="location.href='Cart.php'">Cart</button>
                <button id="footbtn">Location</button>
                <button id="footbtn" onclick="location.href='logIn.php'">Sign-in</button>
                <button id="footbtn">Language</button>
                <p class="oc" style="margin-left: 30%;"> Our collaborators:<br></p>
            </div>
            <div class="footbx2">
                <button type="button" id="aboutus" onclick="location.href='aboutus.php'">ABOUT US</button>
                <button type="button" id="aboutus" onclick="location.href='logIn.php'">REGISTER</button>
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