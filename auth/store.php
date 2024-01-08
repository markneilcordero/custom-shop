<?php
session_start();
include "database_connection.php";

$username = $email = $password_confirmation = $password = "";

function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = validateInput($_POST["username"]);
    $email = validateInput($_POST["email"]);
    $password = validateInput($_POST["password"]);
    $password_confirmation = validateInput($_POST["password_confirmation"]);

    if (empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["password_confirmation"])) {
        header("Location:http://localhost/custom-shop-app/auth/register.php");
    } else {
        if ($_POST["password_confirmation"] != $_POST["password"]) {
            header("Location:http://localhost/custom-shop-app/auth/register.php");
        } else {
            $hash_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $sql = "INSERT INTO user_table (username, email, password) VALUES ('$username', '$email', '$hash_password')";

            if ($conn->query($sql) === TRUE) {
                header("Location:http://localhost/custom-shop-app/auth/login.php");
            } else {
                header("Location:http://localhost/custom-shop-app/auth/register.php");
            }
            $conn->close();
        }
    }

}

?>