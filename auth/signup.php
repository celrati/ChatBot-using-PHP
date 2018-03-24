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
      <form class="form-signin" method="post" action="addnewmember.php">
        <h2 class="form-signin-heading">Please sign up to use the app</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus><br/>

        <label for="text" class="sr-only">pseudo</label>
        <input type="text" id="text" class="form-control" placeholder="pseudo" name="pseudo" required autofocus><br/>

        

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password"   accept=" " placeholder="Password" required>
        
        <button class="btn btn-lg btn-success btn-block" type="submit">sign up</button>
    </form>
</div>
</div>
</body>
</html>