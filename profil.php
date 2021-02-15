<?php
include 'pendaftaran/read_dataregister.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
	<!-- buat class container -->
	<tbody>
                <?php while ($row = $q->fetch()):
                    $id = $row['id'];
                    $email = $row['email'];
                    $username = $row['username'];
					$password = $row['password'];
                    ?>
                <?php endwhile; ?> 
                </tbody>
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
	

			<!-- membuat form -->
			<form action="config/edit.php" method="POST" class="col-lg-6">
				<h5>Registrasi</h5>
				

				<!-- baris ke 2 pada form -->
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="contoh1">Email</label>
						<input type="text" class="form-control" name="email" value="<?php echo $email;?>">
					</div>
					<div class="form-group col-md-4">
						<label for="contoh2">Username</label>
						<input type="text" class="form-control" name="username" value="<?php echo $username;?>">
                    </div>
				    
					<div class="form-group col-md-4">
						<label for="contoh2">Password</label>
						<input type="text" class="form-control" name="password" value="<?php echo $password;?>">
                    </div>          
				<!-- end baris 2 pada form -->
				<input type="hidden" name="id_reg" value="<?php echo $id_register;?>"/>
				<button type="submit" class="btn btn-primary">Edit</button>
				<a class="btn btn-dark" href="menu_utama.php">Keluar</a>
			</form>

			<!-- end form -->
		</div>
	</div>
	<!-- end container -->
	<footer class="jumbotron text-center" style="margin-bottom: 0;">
                    <div class="col-md-12" >
                        <h7>@Copyright by 18111129_RajuRamor_TIFRP18CNSA_UASWEB1</h7>
                    </div>
                  </footer>
</body>

</html>