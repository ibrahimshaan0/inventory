<?php
session_start();

require "db_connection.php";

$username = "";
$password = "";

$usernameError = "";
$passwordError = "";

$fetchUsername = "";
$fetchPassword = "";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    if ($username == "" || $username == " ") {
        $usernameError = "No Username entered! Please enter something.";
    }

    if ($password == "" || $password == " ") {
        $passwordError = "No Password typed! Please enter something.";
    } elseif (strlen($password) < 8) {
        $passwordError = "Password must be at least 8 characters long.";
    }

    if ($usernameError == "" && $passwordError == "") {
        $result = mysqli_query($db, "SELECT * FROM inv_users");
        while ($row = mysqli_fetch_array($result)) {
            $fetchUsername = $row["username"];
            $fetchPassword = $row["password"];

            // debuging 
            // $fetchUsername = "ibrahim";
            // echo $fetchUsername . "<br>" . $fetchPassword . "<br>";
            // echo $username . "<br>" . $password . "<br>";
            // echo strcmp($username, $fetchUsername) . "<br>";
            // echo strcmp($username, $fetchUsername) . "<br>";

            if (strcmp($username, $fetchUsername)) {
                $usernameError = "Username Didn't Matched";
                // echo $usernameError . " ---- <br>";
            }
            if (strcmp($password, $fetchPassword)) {
                $passwordError = "Password Didn't Matched";
            }
            if ($fetchUsername == $username && $fetchPassword == $password) {
                break;
            }
        }
        if ($fetchUsername == $username && $fetchPassword == $password) {
            $_SESSION["status"] = "loggedin";
            header("Location: index.php");
        }
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Login - IShaan Gaming House</title>
</head>

<body>

    <section>
        <div class="login-section">
            <form action="" method="post" class="login-form">
                <img src="assets/images/logo.jpeg" class="login-logo" alt="login-page-logo">
                <span class="error-message">
                    <?php
                    echo $usernameError;
                    ?>
                </span>
                <input type="text" name="username" placeholder="Username" id="username">
                <span class="error-message">
                    <?php
                    echo $passwordError;
                    ?>
                </span>
                <input type="password" name="password" placeholder="Password" id="password">
                <input type="submit" name="login" value="Login" id="login-btn">
            </form>
        </div>
    </section>

</body>

</html>