<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Shop</title>
        <meta name="description" content="Shop">
        <meta name="author" content="Arden University">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    <body>
        <h1>Shop</h1>

        <div>
            <h2>Opening times</h2>

            <?php
            include 'Arden/BaseController.php';
            include 'Arden/Model.php';
            include 'Arden/View.php';
            include 'Arden/ShopController.php';
            include 'Arden/OpeningTimesModel.php';
            include 'Arden/OpeningTimesView.php';

            include 'Arden/ProductController.php';
            include 'Arden/ProductsModel.php';
            include 'Arden/ProductsView.php';

            include 'Arden/ContactController.php';
            include 'Arden/ContactsModel.php';
            include 'Arden/ContactsView.php';




            $controller = new Arden\ShopController();

            $openingTimesView = new Arden\OpeningTimesView($controller->getModelData());

            echo $openingTimesView->render();
            ?>
        <div>
            <h2>Top Products</h2>

            <?php

            $host = "localhost";
$username = "root";
$pass = "";
$database = "store";
$con = mysqli_connect($host, $username, $pass, $database);

            $pcontroller = new Arden\ProductController();

            $productsView = new Arden\ProductsView($pcontroller->getModelData());

            echo $productsView->render();
            ?>
            
        </div>

        <div>
            <h2>Contact Us</h2>

            <?php
            $ccontroller = new Arden\ContactController();

            $contactsView = new Arden\ContactsView($ccontroller->getModelData());

            echo $contactsView->render();
            ?>
            
        </div>
    </body>
</html>
