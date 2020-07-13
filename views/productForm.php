
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert Product</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="form-group">
        <div class="form-header">
            <h2>Product Register</h2>
        </div>
        <form action="insertProductView.php" method="post"enctype="multipart/form-data">
            <input type="text" name="ProductName" placeholder="Product Name" />
            <input type="text" name="ProductCode" placeholder="Product Code" />
            <input type="text" name="Producer" placeholder="Producer" />
            <input type="text" name="Category" placeholder="Category" />
            <input type="file" name="ProductPicPath" accept="image/x-png,image/gif,image/jpeg" placeholder="Product Picture" />
            <input type="submit" name="submitbtn" value="Register" />
        </form>

        <form action="insertProductView.php" method="post">
       
        </form>

        
        <form action="insertProductView.php" method="post">
        <input type="submit" name="submitbtn2" value="merri Produktet" />
        <input type="text" name="ProductID" placeholder="Product ID'" />
        <input type="submit" name="submitbtn3" value="Delete" />
        <input type="submit" name="submitbtn4" value="Edit" />
        </form>
    </div>
</body>

</html>

    

    