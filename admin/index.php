
<?php include('../include/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<body>
  <div class="mb-3 text-center mt-5" style="font-size: 30px;">
    <i class="fas fa-stethoscope"></i>
    <span></span>
  </div>
  <p class="text-center" style="font-size: 20px;"> <i class="fas fa-user-secret text-danger"></i> <span><b>Admin
      Area(Demo)</b></span>
  </p>
  <div class="container-fluid mb-5">
    <div class="row justify-content-center custom-margin">
      <div class="col-sm-6 col-md-4">
        <form action="sess.php" class="shadow-lg p-4" method="POST">
          <div class="form-group">
            <i class="fas fa-user"></i><label for="email" class="pl-2 font-weight-bold">Email</label><input type="email"
              class="form-control" placeholder="Email" name="email">
            <!--Add text-white below if want text color white-->
            <small class="form-text">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="pass" class="pl-2 font-weight-bold">Password</label><input type="password"
              class="form-control" placeholder="Password" name="password">
          </div>
          <button  name="login" class="btn btn-outline-danger mt-3 btn-block shadow-sm font-weight-bold">Login</button>
         
        </form>
                    </div>

            </div>
        </div>

    </div>
</section>
</div>

</body>
</html>