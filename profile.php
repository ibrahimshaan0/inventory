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
                        $result = mysqli_query($db, "SELECT * FROM inv_pcs");
                        while ($row = mysqli_fetch_array($result)) :
                        ?>
                            <tr>
                                <td>
                                    B0PC<?php echo $row["id"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["pcName"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["pcType"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["pcQuality"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["pcStatus"]; ?>
                                </td>
                                <td>
                                    <a href="update-computer.php?id=<?php echo $row["id"]; ?> ">
                                        <span class="material-symbols-outlined action-icons">
                                            edit
                                        </span>
                                    </a>
                                </td>
                                <td>
                                    <a href="delete-computer.php?id=<?php echo $row["id"]; ?> ">
                                        <span class="material-symbols-outlined action-icons">
                                            delete
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        endwhile;
                        ?>
                    </table>
                </div>
            </div>
        </section>
        <section>
            <div class="customers">
                <div class="top-10-customers">
                    <div class="table-title">
                        <h2>Customer Informations</h2>
                        <a href="add-customer.php">
                            <button class="add-item">
                                Add Customer
                            </button>
                        </a>
                    </div>
                    <table border="0">
                        <tr>
                            <th>
                                Customer ID
                            </th>
                            <th>
                                Customer Name
                            </th>
                            <th>
                                Customer Type
                            </th>
                            <th>
                                Customer Status
                            </th>
                            <th colspan="2">
                                Action
                            </th>
                        </tr>
                        <?php
                        $result = mysqli_query($db, "SELECT * FROM inv_customers");
                        while ($row = mysqli_fetch_array($result)) :
                        ?>
                            <tr>
                                <td>
                                    L0C<?php echo $row["id"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["customerName"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["customerType"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["customerStatus"]; ?>
                                </td>
                                <td>
                                    <a href="update-customer.php?id=<?php echo $row["id"]; ?>">
                                        <span class="material-symbols-outlined action-icons">
                                            edit
                                        </span>
                                    </a>
                                </td>
                                <td>
                                    <a href="delete-customer.php?id=<?php echo $row["id"]; ?>">
                                        <span class="material-symbols-outlined action-icons">
                                            delete
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        endwhile;
                        ?>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>

</html>