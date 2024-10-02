
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso a datos</title>
</head>
<body>
    
<?php
require_once 'conection.php';

$con = connection();

$sql = "SELECT ProductID,ProductName,UnitsInStock FROM products;";
$query = mysqli_query($con, $sql);


echo "<table border='1'>";
echo "<tr>";
echo "<th>ProductID</th>";
echo "<th>ProductName</th>";
echo "<th>UnitsInStock</th>";
echo "</tr>";

while($row = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>" . $row['ProductID'] . "</td>";
    echo "<td>" . $row['ProductName'] . "</td>";
    echo "<td>" . $row['UnitsInStock'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>