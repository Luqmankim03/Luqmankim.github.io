<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="Logo.png" type="image/icon type">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <script src="https://kit.fontawesome.com/f3400a1f8d.js" crossorigin="anonymous"></script>
    <title>Cart</title>
</head>
<body>
    <div class="navbar">
        <div class="title">
            <a href="HomePage.php">Home</a>
            <a href="Product.php">Products</a>
            <a href="cart.php">Cart</a>
            <a href="aboutus.html">About Us</a>
        </div>
    </div>

    <div class="container">
        <h1>Your Cart</h1>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            session_start();

            if(isset($_GET['remove_item'])) {
                $product_key = $_GET['product_key'];
                unset($_SESSION['cart'][$product_key]);
            }

            if(empty($_SESSION["cart"])) {
                echo "<tr><td colspan='5'>Your cart is empty.</td></tr>";
            } 
            
            else {
                $total_price = 0;
                foreach($_SESSION["cart"] as $key => $value) {
                    $product_name = $value["name"];
                    $product_qty = $value["quantity"];
                    $product_price = $value["price"];
                    $product_total = $product_qty * $product_price;
                    $total_price += $product_total;
            ?>
            <tr>
                <td><?php echo $product_name; ?></td>
                <td><?php echo $product_qty; ?></td>
                <td>RM<?php echo $product_price; ?></td>
                <td>RM<?php echo $product_total; ?></td>
                <td>
            <form action="cart.php" method="get">
                <input type="hidden" name="product_key" value="<?php echo $key; ?>" />
                <button type="submit" name="remove_item">Remove</button>
            </form>
        </td>
    </tr>
    <?php } ?>                        
    <tr>
        <td colspan="3">Total</td>
        <td colspan="2">RM<?php echo $total_price; ?></td>
    </tr>
    <?php } ?>
        </tbody>
        </table>

        <div class="checkout">
            <h1>Checkout</h1>
            <form action="checkout.php" method="post">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>

                <label for="address">Address</label>
                <textarea id="address" name="address" required></textarea>

                <label for="payment-method">Payment Method</label>
                <select id="payment-method" name="payment-method" required>
                    <option value="cash">Cash On Delivery</option>
                    <option value="credit-card">Credit Card</option>
                    <option value="debit-card">Debit Card</option>
                    <option value="online-banking">Online Banking</option>
                </select>

                <button type="submit">Checkout</button>
            </form>
        </div>
    </div>
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
</html>