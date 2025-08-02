<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="website icon" type="png" href="images/logo.png">
   
    
</head>
<body class="bodyy">
<?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>

<div id="1"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/watch1.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Guess 1875</h2>
        <p><strong>Description:</strong> Guess 1875 watch, classic elegance with a modern touch. It features a polished silver frame and a genuine leather strap.</p>
        <p><strong>Price:</strong> 140 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>Made of stainless steel</li>
            <li>Precise Japanese quartz movement</li>
            <li>Water-resistant up to 50 meters</li>
            <li>One-year warranty</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(1)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="2"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/watch2.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Panerai Radiomir</h2>
        <p><strong>Description:</strong> Panerai Radiomir watch, a blend of Italian design and Swiss technology. It features a polished stainless steel case and a calfskin strap.</p>
        <p><strong>Price:</strong> 6000 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>Hand-wound mechanical movement</li>
            <li>3-day power reserve</li>
            <li>Water-resistant up to 100 meters</li>
            <li>Scratch-resistant sapphire crystal</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(2)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="3"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/watch3.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Panerai Luminor</h2>
        <p><strong>Description:</strong> Panerai Luminor watch, a symbol of strength and performance. It features a lightweight titanium case and a durable rubber strap.</p>
        <p><strong>Price:</strong> 4700 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>Automatic mechanical movement</li>
            <li>8-day power reserve</li>
            <li>Water-resistant up to 300 meters</li>
            <li>GMT function to display two different time zones</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(3)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="4"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/watch4.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Nomos Glashütte</h2>
        <p><strong>Description:</strong> Nomos Glashütte watch, minimalist design and precise performance. It features a slim stainless steel case and a Cordovan leather strap.</p>
        <p><strong>Price:</strong> 2100 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>Hand-wound mechanical movement</li>
            <li>43-hour power reserve</li>
            <li>Water-resistant up to 30 meters</li>
            <li>Simple and elegant Bauhaus design</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(4)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="5"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/shirt1.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Polyester Hoodie</h2>
        <p><strong>Description:</strong> Polyester hoodie, comfort and warmth at all times. Made from soft, lightweight polyester fabric that keeps you warm without feeling hot.</p>
        <p><strong>Price:</strong> 9.99 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>Water-resistant polyester fabric</li>
            <li>Soft fleece lining</li>
            <li>Spacious front pockets</li>
            <li>Adjustable hood</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(5)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="6"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/shirt2.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Adidas t-shirt</h2>
        <p><strong>Description:</strong> Adidas t-shirt, unparalleled performance and comfort. Made from Climalite fabric that wicks away sweat and keeps you dry during exercise.</p>
        <p><strong>Price:</strong> 9 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>Stylish athletic design</li>
            <li>Adidas logo printed on the chest</li>
            <li>Available in multiple colors</li>
            <li>Machine washable</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(6)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="7"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/shirt3.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Cotton Hoodie</h2>
        <p><strong>Description:</strong> Cotton hoodie, unmatched softness and warmth. Made from soft cotton fabric that is gentle on the skin.</p>
        <p><strong>Price:</strong> 6 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>100% cotton fabric</li>
            <li>Comfortable classic design</li>
            <li>Spacious front pockets</li>
            <li>Adjustable hood</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(7)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="8"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/shirt4.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Polo t-Shirt</h2>
        <p><strong>Description:</strong> Polo t-shirt, elegance and comfort in one. Made from soft, breathable pique cotton fabric.</p>
        <p><strong>Price:</strong> 3.99 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>Ribbed collar and cuffs</li>
            <li>Front button closure</li>
            <li>Embroidered brand logo on the chest</li>
            <li>Available in multiple colors</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(8)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="9"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/shoe1.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Nike White Sneaker</h2>
        <p><strong>Description:</strong> Nike White Sneaker, modern design and superior comfort. Features a soft leather upper and a foam midsole for cushioning.</p>
        <p><strong>Price:</strong> 30 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>White leather with distinctive details</li>
            <li>Rubber outsole</li>
            <li>Nike logo on the side</li>
            <li>Ideal for everyday wear</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(9)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="10"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/shoe2.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Nike White Shoes</h2>
        <p><strong>Description:</strong> Nike White Shoes, unmatched performance and comfort. Features a lightweight mesh upper and React technology midsole for cushioning.</p>
        <p><strong>Price:</strong> 25 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>White mesh with distinctive details</li>
            <li>Durable rubber outsole</li>
            <li>Nike logo on the side</li>
            <li>Ideal for sports and everyday wear</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(10)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="11"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/shoe3.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Nike Yellow Sneaker</h2>
        <p><strong>Description:</strong> Nike Yellow Sneaker, bold design and outstanding performance. Features a yellow leather upper and a Zoom Air technology midsole for cushioning.</p>
        <p><strong>Price:</strong> 22 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>Yellow leather with black details</li>
            <li>Durable rubber outsole</li>
            <li>Nike logo on the side</li>
            <li>Ideal for style lovers</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(11)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="12"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/shoe4.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Nike Brown Sneaker</h2>
        <p><strong>Description:</strong> Nike Brown Sneaker, classic elegance and superior comfort. Features a brown leather upper and a foam midsole for cushioning.</p>
        <p><strong>Price:</strong> 20 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>Brown leather with distinctive details</li>
            <li>Rubber outsole</li>
            <li>Nike logo on the side</li>
            <li>Ideal for everyday wear</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(12)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="13"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/sp1.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Beats Headphone</h2>
        <p><strong>Description:</strong> Beats Headphones, pure sound and elegant design. Featuring Active Noise Cancellation technology to provide an immersive listening experience.</p>
        <p><strong>Price:</strong> 25 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>Famous Beats sound</li>
            <li>Noise cancellation technology</li>
            <li>Battery lasts up to 22 hours</li>
            <li>Comfortable and lightweight design</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(13)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=13" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="14"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/sp2.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Zolo Headphone</h2>
        <p><strong>Description:</strong> Zolo Headphones, rich sound and comfortable design. Featuring BassUp technology to enhance bass and provide a distinctive listening experience.</p>
        <p><strong>Price:</strong> 15 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>Distinctive Zolo sound</li>
            <li>BassUp technology</li>
            <li>Battery lasts up to 12 hours</li>
            <li>Lightweight design</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(14)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=14" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="15"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/sp3.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Sony Speaker</h2>
        <p><strong>Description:</strong> Sony Speaker, powerful sound and elegant design. Featuring EXTRA BASS technology to enhance bass and provide a powerful listening experience.</p>
        <p><strong>Price:</strong> 20 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>Powerful Sony sound</li>
            <li>EXTRA BASS technology</li>
            <li>Water and dust resistant</li>
            <li>Battery lasts up to 24 hours</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(15)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=15" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>    <br><br><br><br>
</div>
<div id="16"><br><br></div>
<header class="headerr" >
    <h1>Product Details</h1>
</header>

<div class="containerr">
    <div class="product-image">
        <img src="images/sp4.jpg" alt="Product Image">
    </div>
    <div class="product-details">
        <h2>Airpods</h2>
        <p><strong>Description:</strong> Airpods, wireless sound and unique design. Featuring easy pairing with Apple devices and providing a distinctive listening experience.</p>
        <p><strong>Price:</strong> 17 JD</p>
        <p><strong>Features:</strong></p>
        <ul>
            <li>Clear wireless sound</li>
            <li>Easy pairing with Apple devices</li>
            <li>Wireless charging case</li>
            <li>Touch control</li>
        </ul>
    </div>
</div>

<div class="buy-now">
<?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(16)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>    <br><br><br><br><br><br><br><br>
</div>

<?php include 'includes/footer.php'?>

</body>
</html>