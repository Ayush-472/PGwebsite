<?php
session_start();
?>
<html>
    <head>
        <title>PGLife</title>
        <?php
            include "includes/head_links.php";
        ?>
    </head>
    <body>
        <?php
            include "includes/header.php";
        ?>

        <section class="showcase">
            <div class="Main-content">
                <h1 id="main">Happines per square foot</h1>
            </div>
            <div class="search">
                <form class="navbar-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search PG">
                        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </section>
        <section class="majorcities">
            <div class="content">
                <div class="headingcity">
                    <h1>Major Cities</h1>
                </div>
                <div class="city-selection">
                    <a href="property_list.php?city=Delhi"><img src="img/delhi.png" class="rounded-circle" alt="delhi"></a>
                    <a href="property_list.php?city=Mumbai"><img src="img/mumbai.png" class="rounded-circle" alt="mumbai"></a>
                    <a href="property_list.php?city=Banglore"><img src="img/bangalore.png" class="rounded-circle" alt="banglore"></a>
                    <a href="property_list.php?city=Hydrabad"><img src="img/hyderabad.png" class="rounded-circle" alt="hyderabad"></a>
                </div>
            </div>
        </section>   
        <?php
            include "includes/Signup_modal.php";
        ?>
        <?php
            include "includes/Login_modal.php";
        ?>
        <br>
    <?php
    include "includes/footer.php";
    ?>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>