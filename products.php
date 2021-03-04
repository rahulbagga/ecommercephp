

<?php

require('connection.php');

$getpquery = "SELECT * from bookinventory";

$getpqueryrun = mysqli_query($con, $getpquery);

$productrows = mysqli_num_rows($getpqueryrun);



?>
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
       <div id="productscontainer">
           <div class="productsrow">
            <?php
                if($productrows>0){
                    while($row=mysqli_fetch_array($getpqueryrun)){
                        $inf = 'id='.$row['id'].'&name='.$row['product_name'].'&img='.$row['product_image'].'&mrp='.$row['product_mrp'].'&sellingprice='.$row['product_sp'].'&desc='.$row['product_desc'].'&size='.$row['product_size'];
                        echo  "<div class='productsblock'> <div class='productsimgbox'>";
                        echo "<a href ='productview.php?$inf.'><img src='".$row['product_image']."'></a>";
                        echo "</div>";
                        echo "<div class='productsdata'>";
                        echo "<p>".$row['product_name']."</p>";
                        echo "<p>".$row['product_sp']."</p>";
                        echo "</div>
                             </div>";
                             /*
                        while($productrows % 4 == 0){
                            echo "</div> <div class='productsrow'>";
                        }
                        */
                    }
                 }
            ?>
       </div>
       
    </main>
   
    <footer>
        <p>Copyright 2021. All Rights Reserved.</p>
    </footer>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>