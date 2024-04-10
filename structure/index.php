<?php
    require_once "../includes/config_session.inc.php";
    require_once "../includes/login_view.inc.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Nicks Pizza House, where dream pizzas are made">
    <title>Nicks Pizza House</title>
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation Section -->
    <header>
        <nav>
            <ul>
                <li><a href="index.php"> <img src="../images/logo.png" alt="Nicks Pizza Logo"> </a></li>
                <li><a href="">Products</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="form.php">Order Now</a></li>
                <?php
                    output_username();
                ?>
            </ul>
        </nav>
    </header>
    <main>
        <!-- Adding a masthead section -->
        <section class="masthead">
            <div id="wrapper">
            <h1>Nicks Pizza House</h1>
            <a href="form.php">Order Now</a>
            </div>
        </section>
        <!-- Displaying snippits of the companies service details  -->
        <section class="services">
            <h2>Our Pizzas</h2>
            <ul>
                <li>
                    <img src="../images/meat-lovers-pizza.jpg" alt="Nicks Meat Lovers Pizza">
                    <h3>Meat Lovers Pizza</h3>
                    <p>Feast on the savory goodness of Nick's Meat Lovers Pizza. Packed with premium meats on a crispy crust, it's the ultimate choice for meat enthusiasts. Dive into a slice of hearty satisfaction!</p>
                </li>
                <li>
                    <img src="../images/special-pizza.jpg" alt="Nicks Special Pizza">
                    <h3>Nicks Special Pizza</h3>
                    <p>Indulge in the unique blend of flavors with Nick's Special Pizza. Our signature combination of toppings on a golden crust makes every bite a delicious journey. It's not just pizza, it's a special treat!</p>
                </li>
                <li>
                    <img src="../images/meat-lovers-pizza.jpg" alt="Nicks Combination Pizza" id="combination-pizza">
                    <h3>Combination Pizza</h3>
                    <p>Savor the variety with our Combination Pizza, where each slice brings a new delight. From the assortment of toppings to the unexpected flavors, every bite is a discovery. Ideal for the adventurer in every eater!</p>
                </li>
            </ul>
            <!-- Adding a call to action section -->
            <section class="getAQuote">
                <div id="spacer">
                    <h2>Order Now</h2>
                    <a href="form.php">Start Now</a>
                </div>
            </section>
        </section>
    </main>
    <!-- Adding the footer -->
    <footer>
        <!-- Adding all the footer information -->
        <section id="bottomWrapper">
            <img src="../images/logo.png" alt="Nicks Pizza Logo">
            <div id="socialMedia">
                <h4>Follow Us On FaceBook</h4>
                <a href="https://www.facebook.com/">@nicksPizzaHouse</a>
            </div>
            <!-- Showing the ways the company can be reached -->
            <div id="reachUs">
                <h3>Reach Us</h3>
                <p>Phone: 123-456-7890</p>
                <p>Email: nicksPizzaHouse@gmail.com</p>
            </div>
            <!-- Adding a quick links section -->
            <div id="easyAccessLinks">
                <h4>Quick Links</h4>
                <div id="listContainer">
                    <ul>
                        <li><a href="">Products</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="login.php">Login/Create Account</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>