<?php

session_start();
if (!isset($_SESSION['status'])) {
    header("Location: login.php");
}

require "db_connection.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
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
                            <li class="active">
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
    <h1 class="site-title">IShaan Gaming House</h1>
    <div class="logout-body-content">
        <section>
            <div class="logout-title">
                <h2>Temp Logout Here</h2>
                <a href="logout.php">
                    <button class="add-item">
                        Logout
                    </button>
                </a>
            </div>
        </section>
    </div>
</body>

</html>