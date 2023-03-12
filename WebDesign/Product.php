<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="Logo.png" type="image/icon type">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <script src="https://kit.fontawesome.com/f3400a1f8d.js" crossorigin="anonymous"></script>
    <title>Products</title>
</head>
<body>
    <?php
      session_start();

      if (isset($_GET['add-to-cart'])) {
          $product_id = $_GET['add-to-cart'];
          $product_name = $_GET['name'];
          $product_price = $_GET['price'];
      
          if (isset($_SESSION['cart'][$product_id])) {
              $_SESSION['cart'][$product_id]['quantity']++;
          } 
          
          else {
              $_SESSION['cart'][$product_id] = array(
                  'name' => $product_name,
                  'price' => $product_price,
                  'quantity' => 1
              );
          }
      }
      
    ?>
    <div class="navbar">
        <div class="title">
            <a href="HomePage.php">Home</a>
            <a href="Product.php">Products</a>
            <a href="cart.php">Cart</a>
            <a href="aboutus.html">About Us</a>
        </div>
    </div>
    <div class="title1">
        <h3>ALL PRODUCTS</h3>
    </div>
    <div class="container">
        <div class="card">
            <div class="product-image">
                <img src="Product1.jpg" alt="">
            </div>
            <div class="Product-info">
                <h1>Kerepek Pisang</h1>
                <h1>RM6</h1>
            </div>
            <div class="button">
                <a href="product.php?add-to-cart=1&name=Kerepek+Pisang&price=6"><button type="button" onclick="addItem('Kerepek Pisang', 6)">Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <div class="product-image">
                <img src="Product2.jpg" alt="">
            </div>
            <div class="Product-info">
                <h1>Kerepek Ubi Pedas</h1>
                <h1>RM7</h1>
            </div>
            <div class="button">
                <a href="product.php?add-to-cart=2&name=Kerepek+Ubi+Pedas&price=7"><button type="button" onclick="addItem('Kerepek Ubi Pedas', 7)">Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <div class="product-image">
                <img src="Product3.jpg" alt="">
            </div>
            <div class="Product-info">
                <h1>Kerepek Bawang</h1>
                <h1>RM6</h1>
            </div>
            <div class="button">
                <a href="product.php?add-to-cart=3&name=Kerepek+Bawang&price=6"><button type="button" onclick="addItem('Kerepek Bawang', 6)">Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <div class="product-image">
                <img src="Product4.jpg" alt="">
            </div>
            <div class="Product-info">
                <h1>Kerepek Ubi Masin</h1>
                <h1>RM5</h1>
            </div>
            <div class="button">
                <a href="product.php?add-to-cart=4&name=Kerepek+Ubi+Masin&price=5"><button type="button" onclick="addItem('Kerepek Ubi Masin', 5)">Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <div class="product-image">
                <img src="Product5.jpg" alt="">
            </div>
            <div class="Product-info">
                <h1>Rempeyek</h1>
                <h1>RM7.50</h1>
            </div>
            <div class="button">
                <a href="product.php?add-to-cart=5&name=Rempeyek&price=7.50"><button type="button" onclick="addItem('Rempeyek', 7.50)">Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <div class="product-image">
                <img src="Product6.jpg" alt="">
            </div>
            <div class="Product-info">
                <h1>Biskut Dam</h1>
                <h1>RM10</h1>
            </div>
            <div class="button">
                <a href="product.php?add-to-cart=6&name=Biskut+Dam&price=10"><button type="button" onclick="addItem('Biskut Dam', 10)">Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <div class="product-image">
                <img src="Product7.jpg" alt="">
            </div>
            <div class="Product-info">
                <h1>Almond London</h1>
                <h1>RM10</h1>
            </div>
            <div class="button">
                <a href="product.php?add-to-cart=7&name=Almond+London&price=10"><button type="button" onclick="addItem('Almond London', 10)">Add to Cart</button></a>
            </div>
        </div>
        <div class="card">
            <div class="product-image">
                <img src="Product8.jpg" alt="">
            </div>
            <div class="Product-info">
                <h1>Popcorn</h1>
                <h1>RM9</h1>
            </div>
            <div class="button">
                <a href="product.php?add-to-cart=8&name=Popcorn&price=9"><button type="button" onclick="addItem('Popcorn', 9)">Add to Cart</button></a>
            </div>
        </div>
    </div>
</body>
<body>
    <div class="footer">
    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>Kepek<span>Kita</span></h3>

            <p class="footer-links">
                <a href="HomePage.php">Home</a>
                |
                <a href="aboutus.html" target="_blank">About Us</a>
                |
                <a href="contact.html">Contact</a>
            </p>

            <p class="footer-company-name">Copyright © 2023 <strong>LuqmanAnekaKerepek's</strong> All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Klang</span>
                    Selangor</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+60134453737</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="https://mail.google.com/" target="_blank">KepekKita@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                <strong>LuqmanAnekaKerepek's</strong> menjalankan operasi memproses, membekal dan mengedar makanan-makanan tradisional ke pasaran.
            </p>
            <div class="footer-icons">
                <a href="https://www.facebook.com/profile.php?id=100089548630504" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/kepekkita/" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </footer>
    </div>
</body>
<script>
        function addItem(productName, price){
            alert("Item Added: " + productName);
        }
    </script>
</html>
