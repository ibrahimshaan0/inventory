<?php

session_start();
if (!isset($_SESSION['status'])) {
    header("Location: login.php");
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
                            <li class="active">
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
    <div class="main-body-content">
        <section class="pc">
            <!-- pc blocs -->
            <div class="top-pc-list">
                <div class="pc-items">
                    <div class="table-title">
                        <h2>Computer Informations</h2>
                        <a href="add-computer.php">
                            <button class="add-item">
                                Add Computer
                            </button>
                        </a>
                    </div>
                    <table border="0">
                        <tr>
                            <th>
                                Batch ID
                            </th>
                            <th>
                                PC Name
                            </th>
                            <th>
                                PC Type
                            </th>
                            <th>
                                PC Quality
                            </th>
                            <th>
                                PC Status
                            </th>
                            <th colspan="2">
                                Action
                            </th>
                        </tr>
                        <?php
                        for ($i = 0; $i < 10; $i++) :
                        ?>
                            <tr>
                                <td>
                                    B0PC<?php echo $i; ?>
                                </td>
                                <td>
                                    PC<?php echo $i; ?>
                                </td>
                                <td>
                                    Desktop
                                </td>
                                <td>
                                    Grade C
                                </td>
                                <td>
                                    Working
                                </td>
                                <td>
                                    <a href="#">
                                        <span class="material-symbols-outlined action-icons">
                                            edit
                                        </span>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <span class="material-symbols-outlined action-icons">
                                            delete
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        endfor;
                        ?>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>

</html>