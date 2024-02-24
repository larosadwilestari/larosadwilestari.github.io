<!DOCTYPE html>
<html>
<head>
    <title>Login admin</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
	body {
			width: 100%;
			padding-top: 150px;
            background-image: url('foto/yapim full.jpg');
            background-repeat: no-repeat;
            background-size: cover;
	}
        
    .panel{
      	
        background-color: rgba(0,0,0,.5);
        color: #fff;
    

    }
</style>
</head>
<body>
	<div class="container">
    	<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default" >
					<div class="panel-body"> 						
							<h2 align="center"><font color="#fff"><b>LOGIN</b></font><font color="#ff7f50"><b> ADMIN</b></font></h2>
					<form action="proses-login.php" method="POST">
	                    <div class="form-group">
							<label for="username">Username</label>
							<br>
							<input type="text" class="form-control" name="username" placeholder="Isikan Username" required>
						</div>
	                    <div class="form-group">
							<label for="password" >Password</label>
                        	<input type="password" name="password" class="form-control" placeholder="Isikan Password" required>
						</div>
						 <input type="submit" name="kirim" value="Login" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Reset" class="btn btn-danger">
					</form>
				</div>
			</div>
		</div>
	</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>