<!Doctype html>
<html>
<head>
<title>Shop | Create</title>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
</head>
<body>

<form action="store.php" method="POST">
    <label for="product_name">Product Name</label>
    <input type="text" name="product_name">

    <label for="price">Price</label>
    <input type="text" name="price" value="" id="pricevalue">

    <label for="quantityinstock">Quantity in stock</label>
    <input type="text" name="quantity" value="" id="quantityvalue">

    <input type="submit" value="Save">
</form>

<h2>Products</h2>
<table>
    <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity in stock</th>
    </tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM shop_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["product_name"] . "</td>";
        echo "<td>" . "$" . $row["price"] ."</td>";
        echo "<td>" . $row["quantity"] . "</td>";
        echo "</tr>";
    }
}
?>

<script>
function setRandomQuantity() {
    let randomNumber = Math.floor(Math.random() * 100);
    document.getElementById("quantityvalue").value = randomNumber;
}
setRandomQuantity();

function setRandomPrice() {
    let randomNumber = Math.floor(Math.random() * (30 - 13 + 1)) + 13;
    document.getElementById("pricevalue").value = randomNumber;
}
setRandomPrice();
</script>
</body>
</html>