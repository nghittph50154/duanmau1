<?php
function connectDB(){
$host = DB_HOST;
$username = DB_USERNAME;
$password = DB_PASSWORD;
$db_name = DB_NAME;


try {
  $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {  
  echo $e ->getMessage();
}
return $conn;
}
