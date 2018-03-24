<?php session_start(); ?>
<?php //echo $_SESSION['pseudo']; ?>

<!DOCTYPE html>
<head>
  <title>hello <?= $_SESSION['pseudo']."!!"; ?> </title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initialscale=1.0">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../styles/styleuser.css">
</head>
<body>

  <?php 
  if(!isset($_SESSION['pseudo']))
    {   header('Location: ../index.php');  } ?>


  <?php include('../layouts/user.nav.layout.php');?>
  <?php include('../layouts/user.main.layout.php');?>
  <?php //include('../layouts/user.feelings.layout.php');?>

  <?php include('../layouts/user.footer.layout.php');?>



  <script src="../bootstrap/js/jquery.js" ></script>
  <script src="../bootstrap/js/bootstrap.min.js" ></script>
  <script src="../scripts/myspace1.js" ></script>
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    </script
  </body>
  </html>