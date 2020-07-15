<!DOCTYPE html>
<html lang="en">

<head>
    <title>pocketMarket-Products</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="productFormStyle.css">

    <script src = "productFormValidation.js">

</script>
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
                <button class="nmenubtn" type="menu" onclick="location.href='adminPage.php'">Home</button>
                <button class="nmenubtn" type="menu">Products</button>
                <button class="nmenubtn" type="menu">Product Slider</button>
                <button class="nmenubtn" type="menu">Offers</button>
                <button class="nmenubtn" type="menu">Markets</button>
            </div>

         
            <div class="form-group">
                <div class="form-header">
                    <h2 class = "titulli">Product Register</h2>
                </div>
                <form action="views/insertProductView.php" method="post" enctype="multipart/form-data">
                    <div class="block">
                        <label class="label">Product Name</label>
                        <input class="inputi1" id="name" type="text" name="ProductName" placeholder="Product Name" />
                    </div>
                    <div class="block">
                        <label class="label" for="ProductCode">Product Code</label>
                        <input class="inputi2" id="code" type="text" name="ProductCode" placeholder="Product Code" />
                    </div>
                    <div class="block">
                        <label class="label" for="Producer">Producer </label>
                        <input class="inputi3" id="producer"type="text" name="Producer" placeholder="Producer" data-validation="custom" />
                    </div>

                    <div class="block">
                        <label class="label">Price</label>
                        <input class="inputi5" id="price" type="text" name="Category" placeholder="Price" />
                    </div>
                    <div class="block">
                        <label class="label">Product Picture</label>
                        <input class="fields"id="file" class="inputi" type="file" name="ProductPicPath" onclick="fileValidation()"accept="image/x-png,image/gif,image/jpeg" placeholder="Product Picture" />
                    </div>
                    <input class="btn" type="submit" name="submitbtn" onclick="noDataReg()" value="Register" />

                    <div class="block">
                        <label class="label">Product ID (Fill only for editing or deleting datas!)</label>
                        <input class="inputi6"id="id" type="text" name="ProductID" placeholder="Product ID" />
                    </div>
                    <div class="blockz">
                        <input class="btn" type="submit" name="submitbtn3" onclick="noDatadel()" value="Delete" />
                        <input class="btn" type="submit" name="submitbtn4"  onclick="noDataEdit()"value="Edit" />
                </form>
              </div>



            <!--onclick="noDataReg()"-->
 <button class="btn1" name="getbtn" onclick="location.href='productPageAdmin.php'">Get Products</button>
 




      </div>
    </body>
<footer>
    
    </div>

    <div class="footer">
        <div class="pckMrk" style="font-family: Calibri; font-size: 40px; ">pocketMarket</div>


        <div class="downmenu">


            <button id="footbtn" onclick="location.href='adminPage.php'">Home</button>
            <button id="footbtn" onclick="location.href='productForm.php'">Product</button>
            <button id="footbtn">Product Slider</button>
            <button id="footbtn">Offers</button>
            <button id="footbtn">Markets</button>
        </div>



    </div>

    <div id="copy">&copy All Rights Reserved</div>
    </div>

</footer>


</html>