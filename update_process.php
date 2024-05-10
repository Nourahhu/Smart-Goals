<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["user"])) {
    // Redirect to index.php if not logged in
    header("Location: index.php");
    exit(); // Stop further execution
}

if (isset($_POST["submit"])) {
    require_once "database.php"; // Include database connection

    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $oldPassword = $_POST["old_pass"];
    $newPassword = $_POST["new_pass"];
    $confirmPassword = $_POST["c_pass"];

    var_dump($_SESSION["user"]);

    // Check if old password matches with the one stored in the session or database
    $userPassword = $_SESSION["user"]["password"];
    if (!password_verify($oldPassword, $userPassword)) {
        echo "<div class='alert alert-danger'>Old password is incorrect</div>";
        exit(); // Stop further execution
    }

    // Check if new password matches with confirm password
    if ($newPassword !== $confirmPassword) {
        echo "<div class='alert alert-danger'>New password and confirm password do not match</div>";
        exit(); // Stop further execution
    }

    // Hash the new password
    $passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);

    // Handle file upload
    if ($_FILES['profile_photo']['error'] == UPLOAD_ERR_OK) {
        $photo_tmp_name = $_FILES['profile_photo']['tmp_name'];
        $photo_name = $_FILES['profile_photo']['name'];
        $photo_destination = 'profile_photos/' . $photo_name;
        move_uploaded_file($photo_tmp_name, $photo_destination);
        $_SESSION['user']['photo_path'] = $photo_destination; // Update session with new photo path
        $_SESSION['user_photo_path'] = $photo_destination;
        $_SESSION['user_full_name'] = $fullName;
    }

    // Update user information in the database
    $userId = $_SESSION["user"]["id"];
    $sql = "UPDATE users SET full_name=?, email=?, password=?, photo_path=? WHERE id=?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "ssssi", $fullName, $email, $passwordHash, $_SESSION['user']['photo_path'], $userId);
        mysqli_stmt_execute($stmt);
        echo "<div class='alert alert-success'>Profile updated successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Failed to prepare statement</div>";
    }
} else {
    echo "<div class='alert alert-danger'>Form submission failed</div>";
}
?>
