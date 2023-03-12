<html>
<head>
    <link rel="icon" href="Logo.png" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homepage.css">
    <script src="https://kit.fontawesome.com/f3400a1f8d.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
  <div class="border">
    <h3><i class="fa fa-phone"></i>+60134453737</h3>
    <h3><i class="fa fa-envelope"></i>KepekKita@gmail.com</h3>
    <?php
      session_start();
      if(isset($_SESSION['Username'])){
        echo '<a href="logout.php" id="logout-link"><i class="fa-sharp fa-solid fa-right-from-bracket"></i>Logout</a>';
        echo '<a class="welcome-text">Welcome, '. $_SESSION['Username'] .'</a>';
      }      
      else{
        echo '<a href="login.php"><i class="fa-solid fa-user"></i>Login</a>';
      }
    ?>
  </div>

  <script>
    var logoutLink = document.getElementById('logout-link');
    logoutLink.addEventListener('click', function(event) {
      event.preventDefault();
      var confirmation = confirm("Are you sure you want to logout?");
      if (confirmation) {
        window.location.href = this.href;
      }
    });
  </script>
</body>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="Logo.png" class="logo">
            <ul>
                <li><a href="HomePage.php">Home</a></li>
                <li><a href="Product.php">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="aboutus.html">About Us</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>KEPEK KITA</h1>
            <p>Sekali Ngap Pasti Nak Lagi</p>
        </div>   
    </div>
</body>
<body>
    <div class="banner1">
        <div class="container">
          <div class="wrapper">
              <img src="slide1.png">
              <img src="slide2.png">
              <img src="slide3.png">
              <img src="slide4.png">
          </div>
        </div>
    </div>
    <div class="title">
        <h2>PROMOTIONS!!</h2>
    </div>
</body>
<body>
    <div class="feedbacks">
        <div class="inner">
            <h1>Feedback</h1>
            <div class="border1"></div>

            <div class="row">
                <div class="customer">
                    <div class="feedback">
                        <img src="c1.png" alt="">
                        <div class="name">Amirun Afiq</div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <p>Produk ini sangat memuaskan dan harganya juga berpatutan.</p>

                    </div>
                </div>

                <div class="customer">
                    <div class="feedback">
                        <img src="c2.png" alt="">
                        <div class="name">Muhammad Hasyiem</div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>

                        <p>
                            Berbaloi beli kat sini sedap sangat.
                        </p>
                    </div>
                </div>

                <div class="customer">
                    <div class="feedback">
                        <img src="c3.png" alt="">
                        <div class="name">Amirul Haziq</div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <p>
                            Penghantaran pantas, barang dalam keadaan baik.
                        </p>
                    </div>
                </div>
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
                <a href="aboutus.html">About Us</a>
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
</html>
