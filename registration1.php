<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
}



           if (isset($_POST["submit"])) {
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];
            // $stylesheet_url = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css";
            // $integrity_url = "sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" ;
            // $crossorigin="anonymous";
            
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();

            if (empty($fullName) or empty($email) or empty($password) or empty($passwordRepeat)) {
                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
            }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be at least 8 charactes long");
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Password does not match");
            }
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount > 0) {
                array_push($errors, "Email already exists!");
            }
            if (count($errors) == 0) {
                require_once "database.php";
        
                // Handle file upload
                if ($_FILES['profile_photo']['error'] == UPLOAD_ERR_OK) {
                    $photo_tmp_name = $_FILES['profile_photo']['tmp_name'];
                    $photo_name = $_FILES['profile_photo']['name'];
                    $photo_destination = 'profile_photos/' . $photo_name;
                    move_uploaded_file($photo_tmp_name, $photo_destination);
                    $_SESSION['user_photo_path'] = $photo_destination;
                    $_SESSION['user_full_name'] = $fullName;
                   
                    // Insert photo path into database
                    $sql = "INSERT INTO users (full_name, email, password, photo_path) VALUES (?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (mysqli_stmt_prepare($stmt, $sql)) {
                        mysqli_stmt_bind_param($stmt, "ssss", $fullName, $email, $passwordHash, $photo_destination);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success'>You are registered successfully.</div>";
                    } else {
                        echo "Failed to prepare statement.";
                    }
                } else {
                    echo "File upload error: " . $_FILES['profile_photo']['error'];
                }
            } else {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }
        

        }
    





?>