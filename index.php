<?php

require("includes/common.php");


if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome | Life Style Store</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="bootstrap/style.css" rel="stylesheet">
</head>

<body style="padding-top: 50px;">

    <?php
        include 'includes/header.php';
    ?>


    <div id="content">

        <div id="banner_image">
            <div class="container">
                <center>
                    <div id="banner_content">
                        <h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands </p>
                        <br />
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>

        <div class="container">

            <div class="items">
                <a href="products.php#cameras">
                    <img src="img/1.jpg" alt="cameras" class="thumbnails">
                    <div class="caption">
                        <h3>Cameras</h3>
                        <p>Choose among the best available in the world.</p>
                    </div>
                </a>
            </div>

            <div class="items">
                <a href="products.php#watches">
                    <img src="img/10.jpg" alt="" class="thumbnails">
                    <div class="caption">
                        <h3>Watches</h3>
                        <p>Original watches from the best brands.</p>
                    </div>
                </a>
            </div>

            <div class="items">
                <a href="products.php#shirts">
                    <img src="img/13.jpg" alt="" class="thumbnails">
                    <div class="caption">
                        <h3>Shirts</h3>
                        <p>Our exquisite collection of shirts.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php
        include 'includes/footer.php';
        ?>
    <!--Footer end-->

</body>

</html>