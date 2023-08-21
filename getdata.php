<?php
// echo "<pre>";print_r($_POST);die;
$servername = "localhost";
$username = "root";
$password = "";
$database = "data_structure";
// Create connection

$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "SELECT * FROM sign_ups WHERE id = ".$_POST['editId']." ";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
echo json_encode($data);


?>