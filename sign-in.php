<?php include "header.php"; ?>

    <section class="main_section">
  <a href="create_account.php" target="_blank" style="border: 2px solid red;">Form</a>
  <a href="table.php">Table</a>

  <div class="container" style="margin-top: 40px;">
    
        
          <div class="row center_form">
              <form id="student_form" action="login.php" method="POST" enctype="multipart/form-data">
                <h3><b>Login Account</b></h3>
                <div class="row">
                  <div class="col-md-12 mb-2">
                    <div class="">
                    <label class="form-label">Mobile No</label>
                      <input type="text" id="mobile" name="mobile" class="form-control" value=""/>
                    </div>
                  </div>
                  <div class="col-md-12 mb-2">
                    <div class="form-outline">
                    <label class="form-label">Password</label>
                      <input type="text" id="password" name="password" class="form-control" value=""/>
                    </div>
                  </div>
                 
                 
                <div class="pt-3">
                  <button type="submit" id="submit" class="btn btn-warning btn-lg ms-2">Login</button>
                  <button type="button" class="btn btn-light btn-lg m-l-20">Forgot Password</button>
                </div>
                </form>
            
            

        </div>
      </div>
      </section>
  <?php include "footer.php"; ?>


