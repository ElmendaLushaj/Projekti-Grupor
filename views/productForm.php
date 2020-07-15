<!DOCTYPE html>
<html lang="en">

<head>
    <title>pocketMarket-Products</title>
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
                <button class="nmenubtn" type="menu">Products</button>
                <button class="nmenubtn" type="menu">Product Slider</button>
                <button class="nmenubtn" type="menu">Offers</button>
                <button class="nmenubtn" type="menu">Markets</button>
            </div>

            <body>
                <div class="form-group">
                    <div class="form-header">
                        <h2>Product Register</h2>
                    </div>
                    <form action="insertProductView.php" method="post" enctype="multipart/form-data">
                        <div class="block">
                            <label class="label">Product Name</label>
                            <input class="inputi1" type="text" name="ProductName" placeholder="Product Name"  data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$" data-validation-error-msg="You did not enter a valid name" />
                        </div>
                        <div class="block">
                            <label class="label" for="ProductCode">Product Code</label>
                            <input class="inputi2" type="text" name="ProductCode" placeholder="Product Code" />
                        </div>
                        <div class="block">
                            <label class="label" for="Producer">Producer </label>
                            <input class="inputi3" type="text" name="Producer" placeholder="Producer" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$" data-validation-error-msg="You did not enter a valid name" />
                        </div>
                       
                        <div class="block">
                            <label class="label">Price</label>
                            <input class="inputi5" type="text" name="Category" placeholder="Price" />
                        </div>
                        <div class="block">
                            <label class="label">Product Picture</label>
                            <input class="fields" class="inputi" type="file" name="ProductPicPath" accept="image/x-png,image/gif,image/jpeg" placeholder="Product Picture" />
                        </div>
                        <input class="btn" type="submit" name="submitbtn" value="Register" />

                        <div class="block">
                            <label class="label">Product ID (Fill only for editing or deleting datas!)</label>
                            <input class="inputi" type="text" name="ProductID" placeholder="Product ID" />
                        </div>
                        <div class="blockz">
                            <input class="btn" type="submit" name="submitbtn3" value="Delete" />
                            <input class="btn" type="submit" name="submitbtn4" value="Edit" />
                            <form action="insertProductView.php" method="post">
                                <input class="btn" type="submit" name="submitbtn2" value="Get Products" />


                            </form>
                        </div>
                    </form>

                    <form action="insertProductView.php" method="post">

                    </form>



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