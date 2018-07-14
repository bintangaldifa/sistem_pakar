<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Reset Password</title>
    <!-- Bootstrap core CSS-->
    <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin.css" rel="stylesheet">
</head>

      <body style="background-color:rgb(255, 124, 100);">
          <div class="container" style="background-color: white">
          <center><div class="card-header"><h2>Reset Password</h2></div></center>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <form action="method/insert_user.php" method="POST" role="form">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input name="email" class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">New Password</label>
                          <input name="new_password" class="form-control" id="exampleInputPassword" type="password" aria-describedby="passwordHelp" placeholder="Enter New Password">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Confirm New Password</label>
                          <input name="confirm_password" class="form-control" id="exampleInputPassword" type="password" aria-describedby="  passwordHelp" placeholder="Enter Confirm New Password">
                      </div>
                        <button type="submit" class=" btn btn-success btn-block btn-sm">Create</button>
                    </form>
                  </div>
                  <div class="col-md-3"></div>
                </div>
              </div>
          </div>
  <!-- Bootstrap core JavaScript-->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/popper/popper.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
