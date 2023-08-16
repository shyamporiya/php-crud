<?php 
// error_reporting(0);
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
    
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>

    <title>Student Form</title>
  </head>
  <style>
  /*
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
*/
.main_section{
  background-color:#233140;
}
body{
    background-color:#233140;!important;
    
}
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
  
}
.center_form{
    width: 37%;
    padding: 10px;
    border: 10px gold;
    border-style: outset;
    background-color: #354c2a;
    padding-top: 11px;
    padding-right: 15px;
    padding-bottom: 10px;
    padding-left: 20px;
    margin-left: 30%;
    border-radius: 23px;
    font-style: oblique;
    font-weight: 800;
    color: #f4d6d6;
    }
    h3{
        margin-bottom: 20px;
    text-align: center;
    }
    .eon{
        font-style: oblique;
    font-weight: 800;
    color: black;
    }
    .form-label {
     margin-bottom: 0.0rem !important;
}
input:hover{
    color:black;
    font-weight: 700;
    
}
  </style>
  <?php 
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "data_structure";
    // // Create connection
    // $conn = mysqli_connect($servername,$username,$password,$database);

    // $sql = "SELECT * FROM sign_up WHERE unique_id = '".$_REQUEST['req']."'";
    // $result = mysqli_query($conn,$sql);
    // $row = mysqli_fetch_array($result);
    //echo "<pre>"; print_r($row[1]);die();
    
        
    
  
  ?>
  <body>
    <section class="main_section">
  <a href="create_account.php" target="_blank" style="border: 2px solid red;">Form</a>
  <a href="table.php">Table</a>

  <div class="container" style="margin-top: 40px;">
    
        
          <div class="row center_form">
              <form id="student_form" action="save.php" method="POST" enctype="multipart/form-data">
                <h3><b>Create Account</b></h3>
                

                <div class="row">
                  <div class="col-md-12">
                  <?php $value_f = isset($row['f_name'])!='' ? $row['f_name']: ''; ?>
                    <div class="">
                    <input type="hidden" name="update_id" value=""/>
                    <label class="form-label">First name</label>
                      <input type="text" id="f_name" name="f_name" class="form-control" value="<?php echo $value_f ;?>" required="true"/>
                    </div>
                  </div>
                  <?php $value_l = isset($row['l_name'])!='' ? $row['l_name']: ''; ?>
                  <div class="col-md-12">
                    <div class="form-outline">
                    <label class="form-label">Last name</label>
                      <input type="text" id="l_name" name="l_name" class="form-control" value="<?php echo $value_l ?>"/>
                      
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-outline">
                    <label class="form-label">Email</label>
                      <input type="text" id="email" name="email" class="form-control" value="<?php echo $value_l ?>"/>
                      
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-outline">
                    <label class="form-label">Mobile</label>
                      <input type="text" id="mobile" name="mobile" class="form-control" value="<?php echo $value_l ?>"/>
                      
                    </div>
                  </div>
                </div>
                <?php $value_m = isset($row['mothers_name'])!='' ? $row['mothers_name']: ''; ?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-outline">
                    <label class="form-label">Profile Photoss</label>
                      <input type="file" id="image" name="image" class="form-control" />
                    </div>
                  </div>
                 
                <div class="pt-3">
                  <button type="submit" id="submit" class="btn btn-warning btn-lg ms-2">Submit</button>
                  <button type="reset" class="btn btn-light btn-lg">Reset</button>
                </div>
                </form>
            
            

        </div>
      </div>
      </section>
  </body>
</html>
<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>


