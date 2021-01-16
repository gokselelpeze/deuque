<?php

$user = "root"; //database user name
$pwd = ""; //database pass
$host = "localhost"; //mysql server
$db = "deuque"; //database name


$conn = new mysqli($host,$user,$pwd,$db);

if ($conn -> connect_errno > 0){
    die("Connection Error:". $conn -> connect_error);
}
$conn -> set_charset("utf8");


echo "Connected to database";

mysqli_close($conn);

?>
