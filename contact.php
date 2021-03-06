<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <title>Contact Us</title>
</head>
<body>
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
        <div id="cform">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect2">Select Order Number</label>
                  <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Please write your message here</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary mb-2">Submit Now</button>
              </form>
        </div>
        
    </main>
    <footer>
        <p>Copyright 2021. All Rights Reserved.</p>
    </footer>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>