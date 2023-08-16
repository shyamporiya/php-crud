<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "data_structure";
// Create connection
$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "SELECT * FROM sign_ups ORDER BY `sign_ups`.`id` DESC";
//$result = $conn->query($sql);
$result = mysqli_query($conn,$sql);
  // output data of each row

?>
  <a href="create_account.php" target="_blank" style="border: 2px solid red;">Form</a>
  <a href="table.php">Table</a>

<h2>Data</h2>
<div>
<div>
  <input type="text" class="" id="search" />
</div>
</div>
<table style="width:100%">
  <tr>
    <th>Index</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Created At</th>
  </tr>
  
  <tbody id="table_body">
  <?php 
    while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['fname']."</td>";
    echo "<td>".$row['lname']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['mobile']."</td>";
    echo "<td>".$row['date_time']."</td>";
    echo "</tr>";
  }
  $conn->close();
  ?>
  </tr>
  </tbody>
</table>



</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    // console.log("woo hoo");
    
  })
  $("#search").on("keyup",function(){
    var search_id = $(this).val();
    console.log("test done",search_id); 
$.ajax({
  url:"search.php",
  type:"POST",
  data:{search_data:search_id},
  success:function(response){
  console.warn("Text is : " + response);
  $("#table_body").html(response);
  }
})
  });
</script>

