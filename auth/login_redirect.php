<?php
include "database_connection.php";

$username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT username, password FROM user_table WHERE username = '$username'";

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if (password_verify($_POST["password"], $row['password'])) {
                header("Location:http://localhost/custom-shop-app/index.php");
            } else {
                header("Location:http://localhost/custom-shop-app/auth/register.php");
            }
        }
    } else {
        header("Location:http://localhost/custom-shop-app/auth/register.php");
    }
    $conn->close();
}
?>