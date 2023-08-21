<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "data_structure";
// Create connection

$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "SELECT * FROM sign_ups WHERE id = ".$_POST['editId']." ";


?>