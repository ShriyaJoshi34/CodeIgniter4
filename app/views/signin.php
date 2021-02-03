
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="text-center">
    <div class="card">
    <div class="card-body" style="background-color:#9932CC	">
    	<h1 style="margin-top:10px ; color: #E6E6FA ;font-family:Cursive">Movies !!</h1>
		</div></div><br><br>
		<h4 style="font-family:Cursive">Login Here!</h4>
		<div class="container">
            <div class="login-box">
			<form action="<?php echo site_url('movies/signinn')?>" method="post" autocomplete="off">
			<div class = "form-group" >
            <label style="font-size:25px;margin-top:50px ;font-family:Cursive">Username</label><br><br>
			<input type="text" name="username"  class="form-control" placeholder="username" required> <span class="glyphicon glyphicon-envelope form-control-feedback"></span><br>
			</div>


			<div class="form-group">
			<label style="font-size:25px;font-family:Cursive">Password</label><br><br>
			<input type="password"  name="password" class="form-control" placeholder="Password" required> <span class="glyphicon glyphicon-lock form-control-feedback"></span><br>
			</div>
			<div class="form-group">
			<button type="submit" class="btn btn-info" style="font-family:Cursive">Sign In</button>
			</div>
	</div>
	</div>
	</div>
</form>
</body>
</html>