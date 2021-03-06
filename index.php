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
       <div id ="slidebar">
           <script>
               var i =0;
               var time=3000;
               var images=[];
               images[0]='img/slide/slide1.jpg';
               images[1]='img/slide/slide2.jpg';
               images[2]='img/slide/slide3.jpg';
               images[3]='img/slide/slide4.gif';

              function slideShow(){
                document.slide.src=images[i];
                if(i<images.length-1){
                    i++;
                }
                else{
                    i=0;    
                }
                setTimeout("slideShow()", time);
              }
              

              window.onload=slideShow;

           </script>
            <img width="90%" height="400" name="slide" id="slideimages">
       </div>

       <!--first scroll bar horiozontal-->

      <div class="scrollbar">
          <h3>
              DEALS OF THE DAY
          </h3>
        <div class="scrollproducts">
            <a href='/productview.html'><img class="scrollimages" src="img/products/1.jpg"></a>
            <img class="scrollimages" src="img/products/2.jpg">
            <img class="scrollimages" src="img/products/3.jpg">
            <img class="scrollimages" src="img/products/4.jpg">
            <img class="scrollimages" src="img/products/5.jpg">
        </div>
      </div>
      <div class="scrollbar">
        <h3>
            BIGGEST DEALS ON TOP BRANDS
        </h3>
      <div class="scrollproducts">
          <img class="scrollimages" src="img/products/p6.jpg">
          <img class="scrollimages" src="img/products/p7.jpg">
          <img class="scrollimages" src="img/products/p8.jpeg">
          <img class="scrollimages" src="img/products/p9.jpg">
          <img class="scrollimages" src="img/products/p10.jpeg">
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