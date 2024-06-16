<?php
session_start();
if (!isset($_SESSION['status'])) {
    header("Location: login.php");
}

require "db_connection.php";

$customerName = "";
$customerType = "";
$customerStatus = "";

$customerNameError = "";
$customerTypeError = "";
$customerStatusError = "";


if (isset($_POST["add-item"])) {
    $customerName = $_POST["customerName"];
    $customerType = $_POST["customerType"];
    $customerStatus = $_POST["customerStatus"];


    if ($customerName == "" || $customerName == " ") {
        $customerNameError = "Please enter a Computer Name.";
    }

    if ($customerType == "" || $customerType == " ") {
        $customerTypeError = "Please enter a Computer Type.";
    }

    if ($customerStatus == "" || $customerStatus == " ") {
        $customerStatusError = "Please enter Status.";
    }

    if ($customerNameError == "" && $customerTypeError == "" && $customerStatusError == "") {
        $query = mysqli_query($db, "INSERT INTO inv_customers(customerName,customerType,customerStatus) VALUES('$customerName','$customerType','$customerStatus')");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>IShaan Gaming House</title>
</head>

<body>
    <header>
        <div class="sidebar">
            <div class="logo">
                <img src="assets/images/logo.jpeg" alt="">
            </div>
            <div class="navigation-area">
                <nav>
                    <ul>
                        <a href="index.php"> <!-- this will be the homepage where we will have out devices informations like: pc,mobile,consoles and also our customer informations -->
                            <li>
                                Dashboard
                            </li>
                        </a>
                        <a href="list-pc.php"> <!-- pc-list.php this will be the page link eventually this page will be our devices page -->
                            <li>
                                All Computers
                            </li>
                        </a>
                        <a href="list-customer.php"> <!-- this page will have all the customers informations -->
                            <li>
                                All Customers
                            </li>
                        </a>
                        <a href="#"> <!-- this will be the page where i will add computer -->
                            <li class="active">
                                Add Customer
                            </li>
                        </a>
                        <a href="profile.php"> <!-- profile.php will be here for user profile of admins and editeor and moderators -->
                            <li>
                                Profile
                            </li>
                        </a>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="add-form-page-body">
        <section>
            <div class="add-item-section">
                <form action="" method="post" class="add-item-form">
                    <span class="error-message">
                        <?php
                        echo $customerNameError;
                        ?>
                    </span>
                    <input type="text" name="customerName" placeholder="Customer Name">
                    <span class="error-message">
                        <?php
                        echo $customerTypeError;
                        ?>
                    </span>
                    <input type="text" name="customerType" placeholder="Customer Type">
                    <span class="error-message">
                        <?php
                        echo $customerStatusError;
                        ?>
                    </span>
                    <input type="text" name="customerStatus" placeholder="Customer Status">
                    <input type="submit" name="add-item" value="Add Customer" class="add-item-btn">
                </form>
            </div>
        </section>
    </div>

</body>

</html>