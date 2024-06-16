<?php
session_start();
if (!isset($_SESSION['status'])) {
    header("Location: login.php");
}

require "db_connection.php";

$pcName = "";
$pcType = "";
$pcQuality = "";
$pcStatus = "";

$pcNameError = "";
$pcTypeError = "";
$pcQualityError = "";
$pcStatusError = "";


if (isset($_POST["add-item"])) {
    $pcName = $_POST["pcName"];
    $pcType = $_POST["pcType"];
    $pcQuality = $_POST["pcQuality"];
    $pcStatus = $_POST["pcStatus"];


    if ($pcName == "" || $pcName == " ") {
        $pcNameError = "Please enter a Computer Name.";
    }

    if ($pcType == "" || $pcType == " ") {
        $pcTypeError = "Please enter a Computer Type.";
    }

    if ($pcQuality == "" || $pcQuality == " ") {
        $pcQualityError = "Please enter Quality.";
    }

    if ($pcStatus == "" || $pcStatus == " ") {
        $pcStatusError = "Please enter Status.";
    }

    if ($pcNameError == "" && $pcTypeError == "" && $pcQualityError == "" && $pcStatusError == "") {
        $query = mysqli_query($db, "INSERT INTO inv_pcs(pcName,pcType,pcQuality,pcStatus) VALUES('$pcName','$pcType','$pcQuality','$pcStatus')");
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
                        <a href="#"> <!-- this will be the page where i will add computer -->
                            <li class="active">
                                Add Computer
                            </li>
                        </a>
                        <a href="list-customer.php"> <!-- this page will have all the customers informations -->
                            <li>
                                All Customers
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
                        echo $pcNameError;
                        ?>
                    </span>
                    <input type="text" name="pcName" placeholder="Computer Name">
                    <span class="error-message">
                        <?php
                        echo $pcTypeError;
                        ?>
                    </span>
                    <input type="text" name="pcType" placeholder="Computer Type">
                    <span class="error-message">
                        <?php
                        echo $pcQualityError;
                        ?>
                    </span>
                    <input type="text" name="pcQuality" placeholder="Computer Quality">
                    <span class="error-message">
                        <?php
                        echo $pcStatusError;
                        ?>
                    </span>
                    <input type="text" name="pcStatus" placeholder="Computer Status">
                    <input type="submit" name="add-item" value="Add Computer" class="add-item-btn">
                </form>
            </div>
        </section>
    </div>

</body>

</html>