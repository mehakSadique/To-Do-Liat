<?php
$sName = "localhost";
$uName = "root";
$password = "";
$db_name = "to_do_list";
try {
    // Create connection
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected";
}catch(PDOException $e){
    echo "Connection failed : " . $e->getMessage();

}
// $conn = new mysqli($Name,$uName, $password,$db_name);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successful";
?>
