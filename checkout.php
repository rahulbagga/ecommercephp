<?php session_start(); ?>
<?php require('connection.php'); ?>


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
       <div id="checkoutcontainer">
                
                    <div class="checkoutproductsbox">
                        <img src="<?php echo $_SESSION['simg']; ?>">
                        <div id="checkoutleft">
                            <p>
                                <?php
                                if(isset($_SESSION["spname"])){
                                    echo $_SESSION["spname"];
                                }
                                else{
                                    echo "You need to add product to cart first first";
                                } 
                                 
                                ?>
                            </p>
                            
                            <p class="checkoutsingleprice"><?php echo $_SESSION['sprice']; ?></p>
                        </div>
                    </div>
            
       </div>
       <div id="checkform">
           
                <form action='checkout.php' method='post'>
                <h4 id='ordernow'>Order Now!</h4>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">First Name</label>
                        <input type="text" class="form-control" name="fname" id="exampleFormControlInput1" placeholder="Rahul" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Last Name</label>
                        <input type="text" class="form-control" name="lname" id="exampleFormControlInput1" placeholder="Bagga" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Select Payment Method: </label>
                        <select multiple class="form-control" name="pmethod" id="exampleFormControlSelect2" required>
                            <option value='cod'>Cash on delievery</option>
                            <option value='applypay'>Apple Pay</option>
                            <option value='credit'>Credit Card</option>
                            <option value='debit'>Debit Card</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Please write any instructions here</label>
                        <textarea class="form-control" name="instructions" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <br>
                    <input type="submit" name ="orderforn" class="btn btn-primary mb-2">
                    <p id='ordersubmit'>
                        
                    </p>
                </form>

        </div>
        
       
    </main>
   
    <footer>
        <p>Copyright 2021. All Rights Reserved.</p>
    </footer>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pmethod = $_POST['pmethod'];
$ins = $_POST['instructions'];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $insq = "INSERT into bookinventoryorder (fname,lname,email,pmethod,ins) values('$fname','$lname', '$email', '$pmethod', '$ins')";
    $delquery= "UPDATE bookinventory SET quantity = quantity - 1 where id= ".$_SESSION['sid'];
    $runinsq =mysqli_query($con,$insq);
    $rundelquery = mysqli_query($con,$delquery);
    $msg = "Congratulation!!".$fname." Your order has been completed. ".$_SESSION['spname']." will be delievered to you within 5 business days.";
    echo "<script>alert('$msg')</script>";
}

    

?>

<!--

-->