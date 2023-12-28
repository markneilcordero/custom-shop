<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$productname = $price = $quantity = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productname = $conn -> real_escape_string($_POST["product_name"]);
    $price = $conn -> real_escape_string($_POST["price"]) . ".99";
    $quantity = $conn -> real_escape_string($_POST["quantity"]);

    $sql = "INSERT INTO shop_table (product_name, price, quantity) VALUES ('$productname', '$price', '$quantity')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }    
    $conn->close();
}
header('Location:http://localhost/shop/create.php');
?>