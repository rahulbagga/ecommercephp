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
<body id="accountbody">
    <header>
        <nav>
            <div id="logoheader">
                <a href="index.php"><img id="imglogo" src="img/logo.png"></a>
            </div>
            <ul>
                <li>CATEGORIES</li>
                <li><a href="products.php">PRODUCTS</a></li>
                <li><a href="account.php">MY ACCOUNT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="checkout.php">CHECKOUT</a></li>
            </ul>
        </nav>
    </header>
    <main>
       <div id="accountcontainer">
           
           <div id="leftsignin">

            <!--Login form -->

            <form name="loginsub           " action="account.php" method="post">
                <h5>Already Have account? Login Here</h5><br>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="lemail">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="lpassword">
                </div>
                <br>
                <input type="submit" class="btn btn-primary" name ="loginsub" value="Login now"/>
              </form>
           </div>

           <div id="rightsignup">
                <form id="signup" action="account.php" method="post">
                    <h5>Sign up today to purchase</h5>
                    <div class="form-group">
                        <label for="formGroupExampleInput">First Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Rahul"name="fname">
                      </div>
                      <div class="form-group">
                        <label for="formGroupExampleInput2">Last Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Bagga" name="lname">
                      </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                    </div>
                
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" name ="city">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Province</label>
                        <select id="inputState" class="form-control" name ="province">
                          <option value ='alberta' selected>Alberta</option>
                          <option value='bc'>British Columbia</option>
                          <option value='manitoba'>Manitoba</option>
                          <option value='newbrunswick'>New Brunswick</option>
                          <option value='nfl'>Newfoundland and Labrador</option>
                          <option value='northwest'>Northwest Territories</option>
                          <option value='novascotia'>Nova Scotia</option>
                          <option value='nunavut'>Nunavut</option>
                          <option value='ontario'>Ontario</option>
                          <option value='prince'>Prince Edward Island</option>
                          <option value=;quebce>Quebec</option>
                          <option value='sask'>Saskatchewan</option>
                          <option value='yukon'>Yukon</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip" name="zip">
                      </div>
                    </div>
                   <br>
                    <input type="submit" name="registerbutton" class="btn btn-primary" value="Register now">
                  </form>
           </div>
           
       </div>
       
    </main>
   
    <footer>
        <p>Copyright 2021. All Rights Reserved.</p>
    </footer>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>




<?php
require('connection.php');
?>

<?php
//php form validation registration
$counter =0;


  if(isset($_POST['registerbutton']) && !empty($_POST['registerbutton'])){
    if(empty($_POST['fname'])){
      echo "Name empty";
      
    }
    else{
      $fname =$_POST['fname']; 
      $counter++;   
    }
    
    if(empty($_POST['lname'])){
      echo "Last name empty";
      
    }
    else{
      $lname = $_POST['lname'];
      $counter++;
    }

    if(empty($_POST['email'])){
      echo "Email empty";
      
    }
    else{
      $email = $_POST['email'];
      $counter++;
    }

    if(empty($_POST['password'])){
      echo "Password empty";
      
    }
    else{
      $pass = $_POST['password'];
      $counter++;
    }

    if(empty($_POST['address'])){
      echo "Address empty";
      
    }
    else{
      $address = $_POST['address'];
      $counter++;
    }

    if(empty($_POST['city'])){
      echo "City empty";
      
    }
    else{
      $city = $_POST['city'];
      $counter++;
    }

    if(empty($_POST['province'])){
      echo "Province empty";
      
    }
    else{
      $province =$_POST['province'];
      $counter++;
    }

    if(empty($_POST['zip'])){
      echo "Zip empty";
      
    }
    else{
      $zip = $_POST['zip'];
      $counter++;
    }

  
  }

  
  //inserting into database
 echo $counter;
  

  if($counter == 8){
  $insquery = "INSERT INTO users(fname,lname,email,password,address,city,province,zip) values('$fname','$lname','$email','$pass','$address','$city','$province','$zip')";
  $query= mysqli_query($con, $insquery);
  }
  else{
    echo "<br>";
    echo $counter;
  }
  mysqli_close($con);
  ?>

<?php
//new try
$lemail=$_POST['lemail'];
$lpassword=$_POST['lpassword'];
if(isset($_POST['loginsub']) && !empty($_POST['loginsub'])){
  if($lemail != '' && $lpassword !=''){
   
    $loginquery = "SELECT * from users where email = '$lemail' and password='$lpassword'";
    $loginqueryrun = mysqli_query($con, $loginqueryrun);

    $lqueryrows = mysqli_fetch_array($loginqueryrun);
    
   
    if(mysqli_num_rows($loginqueryrun) ==1){
      echo "Logged in!!";
    }
    else{
      echo "Invalid login credentials.";
    }
    
  }
  else{
    echo "Must not be empty";
  }
}





  //login queries
  /*
  $lemail=$_POST['lemail'];
  $lpassword=$_POST['lpassword'];
  if(isset($_POST['loginsub']) && !empty($_POST['loginsub'])){
   
    if($lemail != '' && $lpassword !=''){
      $loginquery ="SELECT id FROM users WHERE email = '$lemail' and passcode = '$lpassword'";
      $loginqueryrun = mysqli_query($con, $loginqueryrun);
      $lqueryrows = mysqli_fetch_array($loginqueryrun);
      
      $count = $lqueryrows['num'];
      /*
      echo $lqueryrows;
      echo $lemail;
      */
      /*
      if($count>0){
        $_SESSION['email']=$nemail;
        echo "Invalid login";
        echo $nemail;
        //header('location:/index.php');
      }
      else{
        echo "Invalid login";
      }
  
    }
  }
 
  
 */
?>

