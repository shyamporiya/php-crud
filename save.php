<?php
// echo "hello";die;
$servername = "localhost";
$username = "root";
$password = "";
$database = "data_structure";
// Create connection
$conn = mysqli_connect($servername,$username,$password,$database);

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

  $target_dir = "uploads/"; // Directory where you want to store uploaded images
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
   // Check if the file already exists
  if (file_exists($target_file)) {
  echo "File already exists.";
  } else {
  // Move the uploaded file to the specified directory
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
  echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
  }
}
$sql = "INSERT INTO `sign_ups`(`fname`, `lname`,`email`,`mobile`, `image`)
                      VALUES ('".$f_name."','".$l_name."','".$email."','".$mobile."','".$target_file."') ";
            // echo $sql;die;//print_r($sql);
$result = mysqli_query($conn,$sql);
  //  print_r($result);
if($result){
         echo "success";
        //header("Location:create_account.php"); 
    }


?>