

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
  <body>
   
    <div class="container">
        <h4 class="text-center">FORM LOGIN</h4>
        <hr>
        <form action="pendaftaran/login.php" class="form-signin" method="post">
            <div class="container">
                <form name="formPendaftaran" action="menu_utama.php" method="post" onsubmit="return validateForm()">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="username" name="username" id="username" placeholder="Masuka Username anda" class="form-control" required maxlength="40" minlength="3">
                    <label>Password</label>
                    <input type="password" name="password" id="password" placeholder="Masuka Password anda" class="form-control" required maxlength="40" minlength="3">
            
                  </div>
                    <a href="register.php" class="btn btn-danger">Daftar</a>
                    <button  type="Username" name="login" class="btn btn-primary">Login </button>
                    <a class="btn btn-dark" href="index.php">Keluar</a>
              </div>
            
      </div>
        <!-- <script>
      function validateForm() {
        
          if (document.forms["Username"]["Masukan Username anda"].value == "") {
              alert("Nama Tidak Boleh Kosong");
              document.forms["Username"]["Masukan Username anda"].focus();
              return false;
          }
          if (document.forms["password"]["Masukan Password anda"].value == "") {
              alert("Email Tidak Boleh Kosong");
              document.forms["password"]["Masukan Password anda"].focus();
              return false;
          }
         
      }
      </script> -->

   
   </div>
   <footer class="jumbotron text-center" style="margin-bottom: 0;">
                    <div class="col-md-12" >
                        <h7>@Copyright by 18111129_RajuRamor_TIFRP18CNSA_UASWEB1</h7>
                    </div>
                  </footer>
  </body>
</html>