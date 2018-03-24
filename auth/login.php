<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title>login</title>
	<meta name="viewport" content="width=device-width, initialscale=1.0">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../styles/stylelogin.css">
</head>

<body>
	<div class="container">
		<div id="login">
			<form class="form-signin" action="connect.php" method="post">

				<h2 class="form-signin-heading">Please log in</h2>
				<label for="inputEmail" class="sr-only">pseudo</label>
				<input name="pseudo" type="text" id="inputEmail" class="form-control" placeholder="pseudo" required autofocus><br/>

				<label for="inputPassword" class="sr-only">Password</label>
				<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

				<button class="btn btn-lg btn-success btn-block" type="submit">log in</button>
			</form>
		</div>
	</div>
</body>
</html>