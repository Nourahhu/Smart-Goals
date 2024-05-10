<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit(); // Make sure to exit after sending the header
}

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once "database.php";
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
            if (password_verify($password, $user["password"])) {
                $_SESSION["user"] = $user;
                $_SESSION["user_photo_path"] = $user["photo_path"]; // Store profile photo path in session
                $_SESSION["user_full_name"] = $user["full_name"]; // Store user's name in session

                echo "User photo path: " . $_SESSION["user_photo_path"]; // Debugging statement
                echo "User full name: " . $_SESSION["user_full_name"]; // Debugging statement

                header("Location: index.php");
                exit(); // Make sure to exit after sending the header
            } else {
                echo "<div class='alert alert-danger'>Password does not match</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Email does not match</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Failed to prepare statement</div>";
    }
}
?>