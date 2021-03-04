<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel = "stylesheet" href="css/main.css" type="text/css">
    <title>Myntra</title>
</head>
<body>
    <div id="fscreen">

    
    <header>
        <nav>
            <div id="logoheader">
                <a href="index.php"><img id="imglogo" src="img/logo.png"></a>
            </div>
            <ul>
                <li>CATEGORIES</li>
                <li><a href="products.php">PRODUCTS</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="checkout.php">CHECKOUT</a></li>
            </ul>
        </nav>
    </header>
    <main>
       <!--- <img src ="img/back.png"> -->
       <div id="productviewblock">
            <div id="productviewimg">
                <img src="<?php echo $_GET['img']?>">
            </div>
            <div id="productviewinfo">
                <div id="productviewtitle">
                    <h3>Product Title: <br> <?php echo $_GET['name']?></h3>
                </div>
                <div id="productviewdesc">
                    <h6>Product description</h6>  
                    <label>Quantity: </label>
                    <select form="productviewqform" name="quantity" id="productviewqselect">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <label>Size: </label>
                    <select form="productviewqform" name="size" id="productviewsselect">
                        <option value="x">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                        <option value="xxl">XXL</option>
                    </select>
                    
                    <form action="" method="post" id="productviewqform">
                        <input name="sid" value="<?php echo $_GET['id']; ?>" id="productviewqform" hidden>
                        <input name="pname" value="<?php echo $_GET['name']; ?>" id="productviewqform" hidden>
                        <input name="price" value="<?php echo $_GET['sellingprice']; ?>" id="productviewqform" hidden>
                        <input name="img" value="<?php echo $_GET['img']; ?>" id="productviewqform" hidden>
                        <input type="submit" value="Add to Cart" name="cart">
                    </form>
                    <br>
                    <p>MRP= <?php echo $_GET['mrp'] ?> <br> Selling Price= <?php echo $_GET['sellingprice'] ?></p>
                    <br>
                        <p> <?php echo $_GET['desc']; ?>
                    </p>
                </div>
            </div>
            
       </div>
       
    </main>
   
    <footer>
        <p>Copyright 2021. All Rights Reserved.</p>
    </footer>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php 

session_start();

        $_SESSION['sid']=$_GET['id'];
        $_SESSION['spname']=$_POST['pname'];
        $_SESSION['sprice'] =$_POST['price'];
        $_SESSION['simg']=$_POST['img'];
        $_SESSION['size']=$_POST['size'];
        $_SESSION['quantity']=$_POST['quantity'];
    
?>
