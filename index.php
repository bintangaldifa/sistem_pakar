   <?php 
    session_start();
    if (isset($_SESSION['username'])) {
      # code...
      header('location:member/index.php');
    }
   ?>  

       <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
          <title>Sistem Pakar Gangguan Tidur</title>

          <!-- Bootstrap -->
          <link href="admin/css/style.css" rel="stylesheet">
          <link href="admin/css/bootstrap.min.css" rel="stylesheet">

          <style>
          
          body {
                  padding-top: 15px;
                  padding-right: 30px;
                  padding-bottom: 50px;
                  padding-left: 80px;
               }

          </style>

          </head>
          
          <body style="background-color: rgb(255, 124, 100)">
                        
                <h1 style="text-indent: 265px">Sistem Pakar</h1>  
                <h2 style="text-indent: 150px">Diagnosa Penyakit Gangguan Tidur</h2>

          <div class="container" class="checkbox" >
          <div class="row">
          <div class="col-md-3 col-md-offset-8" >
          <div class="panel-default" style="background-color: rgb(255, 124, 100)">
          <div class="panel-body">

            <form action="login.php" method="POST" role="form">
              <div class="form-group">
                <center style="font-family:courir;"><h3>MASUK</h3></center><hr>
              
                  <center style="font-family:verdana;">Username</center>
                    <input type="text" id="fname" name="username" placeholder="Username" class="form-control" required="">

                  <center style="font-family:verdana;">Password</center>
                  <input type="Password" name="password" placeholder="Password" row="1" class="form-control" required="">
              
          <label style="font-family:verdana;"> <h6><input type="checkbox" name="jk" value=""> Remember Password</label></h6>
            <a class=" text-center d-block small" href="forgot_password.php">Forgot Password?</a>
              <br /><br />
              <button type="submit" class=" btn btn-success btn-block btn-sm" >Log In</button>
                  
                  </div>  
                   </div>
                    </div>
                     </div> 
                      </div>
                       </div>
              
              <div class="row">
              <div class="col-md-4">
              <div class="panel-default" style="background-color: rgb(255, 124, 100)" >
              <div class="panel-body">
                  <h3>Belum punya akun?</h3>
                  <h3>Daftar Disini!</h3>
              
              <div class="text">
              <a type="button" class="btn btn-primary btn-sm" href="register.php">Create Account</a>
  
              </div>
               </div>
                </div>  
                 </div>
                  </div>
              <div class="text">
              <a type="button" class="btn btn-primary btn-sm" href="admin/index.php"></a>
        
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="admin/js/jquery-1.11.2.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="admin/js/bootstrap.min.js"></script>
      </body>
      </html>
