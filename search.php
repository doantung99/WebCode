<?php
$host = "localhost";
$user = "root";
$password = "";
$database_name = "demo";
$pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
// Search from MySQL database table
$search=$_POST['search'];
$query = $pdo->prepare("select CompanyName,IP from targets where IP LIKE '%$search%'");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
if (!$query->rowCount() == 0) {
    echo "Search found :<br/>";
    echo "<table style=\"font-family:arial;color:#333333;\">";
    echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">IP</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">CompanyName</td></tr>";
    while ($results = $query->fetch()) {
        echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
        echo $results['IP'];
        //echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
        //echo $results['Domain'];
        echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
        echo $results['CompanyName'];
        echo "</td></tr>";
    }
    echo "</table>";
} else {
    echo 'Nothing found';
}
?>