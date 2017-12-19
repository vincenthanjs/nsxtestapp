<?php
//echo gethostname(); // may output e.g,: sandie

// Or, an option that also works before PHP 5.3
date_default_timezone_set('Asia/Singapore');
$date = date('d/m/Y h:i:s a', time());


echo "My hostname is ".php_uname('n')."."; // may output e.g,: sandie
echo "<br>My IP Address is ".$_SERVER['SERVER_ADDR'].".";
echo "<br>Datetime is ".$date.".<br>";
echo "<br>You are accessing <b>NSX Test App!</b><br><br>";

//echo "<table border=1 width=500>";

$servername = "10.10.98.11";
$username = "root";
$password = "password";
$dbname = "classicmodels";
$port = "3306";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT customerNumber, customerName, contactLastName FROM customers";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo  "SQL Connection to ". $servername . " successful. The results as follow:<br><br>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>id: " . $row["customerNumber"]. "</td><td> - Name: " . $row["customerName"]. " " . $row["contactLastName"]. "</td></tr><br>";
    }
} else {
    echo "0 results";
}
$conn->close();

echo "</table></td></tr></table></body>";



?>
