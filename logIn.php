<!DOCTYPE HTML>
<html>
<head>
    <title>PocketMarket - Sign in </title>
    <link rel="stylesheet" type="text/css" href="logInStyle.css"/>
    <script src = "logInJS.js">

    </script>
</head>
<body>
    <div class = "bodyy">
        <div class="shade">
        <div class = "border1">
            <div class="extra">
                
                <button   class = "signup2" style = "margin-left: 15%; font-size: 20px ;color:white;  "onclick="SignUp()">Don't have an account?Sign-Up</button>
            
            </div>
<div class="box1">
   
<img id="img" src="loginicon2.JPG">   


<form id = "signIn" class="signIn">
<div class="signInIn">
<input class="label"  id= "label" name="" type="text" placeholder="Username"/> 
<input  class="label" id = "label1" name="" type="password" placeholder="Password"/>

<div class="extra">
    
   
<button   class = "signup2" style = "text-decoration: underline; font-size: 15px; background-color:silver; margin-left: 15px;"><b>Forgot Password?</b></button>
</div>


<button id='button1' onclick="noData()">Sign-in</button>
</div>
</form>
 
    
 <form action="views/insertUserView.php" method="post" id = "forma2" class="forma2" style="display: none;" >
    <div id="signUpp" >
        <input  name = "emri" class="label"  id= "label2" name="" type="text" placeholder="Name"/> 
        <input  name = "email" class="label"  id= "label3" name="" type="text" placeholder="Email"/> 
<input name = "paswordi"  class="label" id = "label4" name="" type="password" placeholder="Password"/>
<input  class="label" id = "label5" name="" type="password" placeholder="Reconfirm Password"/>
<!---<button class = "signup2" onclick="SignUp2()" style = "text-decoration: underline; font-size: 15px; background-color:silver"><b>Already have an account?</b></button>--->


<input name = "submitbtn" type = "submit" id='button1' onclick="noDataR()"  value = "Registre"/>

    </div>
</form>
<div class = "icons">
    <a href="https://www.facebook.com/"><img id ="social" src = "facebook.png"/></a>



    <a href="https://www.google.com/"><img  id ="social" src = "google.png"/></a>


    <a href="https://www.instagram.com/"><img   id ="social" src = "instagram.png"/></a>

</div>
    </div>
</div>
</div>
</div>


</body>
<div class="footer">
    <div class="pckMrk" style="font-family: Calibri; font-size: 40px; ">pocketMarket</div>

    <div class="middlepart">
        <div class="downmenu">

            <button id="footbtn"onclick = "location.href='homepage.html'">Home</button>
            <button id="footbtn" onclick="location.href='Cart.html'">Cart</button>
            <button id="footbtn">Location</button>
            <button id="footbtn" onclick="location.href='logIn.html'">Sign-in</button>
            <button id="footbtn">Language</button>
            <p class="oc" style="margin-left: 30%;"> Our collaborators:<br></p>
        </div>
        <div class="footbx2">
            <button type="button" id="aboutus" onclick="location.href='aboutus.html'">ABOUT US</button>
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