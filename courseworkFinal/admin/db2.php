<?php

//$pdo = new PDO('mysql:host=lochnagar.abertay.ac.uk;dbname=sql1902471',
           /// 'sql1902471',
           //  'SSGCCK6DdIFC');
/*
$servername = "lochnagar.abertay.ac.uk";
$username = "sql1902471";
$password = "SSGCCK6DdIFC";

try {
    $conn = new PDO("mysql:host=$servername;dbname=sql1902471", $username, $password);
     set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
*/


$serverName = "lochnagar.abertay.ac.uk";
$Username = "sql1800786";
$Password = "obMfIkmvB56IJdIM";
$databaseLink2 = "sql1902471";

// Create connection
$conn = mysqli_connect($serverName, $Username, $Password, $databaseLink2);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
