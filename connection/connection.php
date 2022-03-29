<?php
$servername =  "localhost";
$user = "root";
$password = "";
$dbname = "bbms";
$conn = mysqli_connect($servername,$user,$password,$dbname);
if(!$conn){
    echo "Not Connected";
}
?>