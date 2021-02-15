<?php 
include_once('pendaftaran/config.php');
$database = new database();
if(isset($_POST['register']))
{
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    if($database->register($username,$password,$email))
    {
      header('location:login.php');
    }
}
 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="registar.css">

    <title>Hello, world!</title>
  </head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm fixed-top navbackground navbar-dark navbar-fontcolor">
            
           
        </nav>
        <div class="padding-formlogin ">
        <div class="container">
    <h1 class="mt-5">Register Form</h1>
<hr/>
 </div>
            <div class="col-md-12">
                <div class="card card-bgregist">
                    <div class="card-body  ">
                        <div>
                            <form method="post" action=" ">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                                <div>
                                    <button type="submit" name="register" class="btn btn-dark">Masuk</button>
                                    <a class="btn btn-danger" href="login.php">Keluar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>