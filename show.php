<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["search"])) {
        $search = $conn -> real_escape_string($_POST["search"]);
        $sql = "SELECT * FROM shop_table WHERE product_name LIKE '%$search%'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["product_name"] . "</td>";
                echo "<td>" . "$" . $row["price"] ."</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr>";
            echo "<td>Server Error. We apologise for the inconvenience.</td>";
            echo "<td></td>";
            echo "<td></td>";
            echo "</tr>";
        }
        $conn->close();
    }
}

?>