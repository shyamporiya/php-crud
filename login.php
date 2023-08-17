<?php
// echo "<pre>";print_r($_POST);die;
$servername = "localhost";
$username = "root";
$password = "";
$database = "data_structure";
// Create connection

$conn = mysqli_connect($servername,$username,$password,$database);

$mobile = $_POST['mobile'];
$password = $_POST['password'];

$sql = "SELECT * FROM `sign_ups` WHERE `mobile` = '".$_POST['mobile']."' AND `password` = '".$_POST['password']."' ";
$result = mysqli_query($conn,$sql);
//   echo "<pre>";print_r($result);die;
if(mysqli_num_rows($result) == 1){
    echo "Login Successfully";
}else if(mysqli_num_rows($result) == 0){
    echo "No Record Found";
}else{
    echo "Something Went Wrong";
}
// $data = mysqli_fetch_assoc($result);
// // if($data['mobile'] == $_POST['mobile']){}
?>