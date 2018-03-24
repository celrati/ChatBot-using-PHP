<?php session_start(); ?>
<!DOCTYPE html>
<head>
  <title>bootstrap</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initialscale=1.0">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
  <?php
  if((!isset($_SESSION['pseudo']) && $_SESSION['pseudo'] != "maiden")  || isset($_SESSION['a']))  
  {
    header('Location: ../index.php');
  }

  ?>




  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Lain v0.1 welcome dear Maiden</a>

      </div>
      
    </div>
  </nav>

  <div class="jumbotron" id="admin1">
    <h1>Liste des membres</h1>
    <table class="table table-hover">
      <tr>
       <td class="active"> pseudo   </td>
       <td class="success"> email </td>
       <td class="info">  password </td>
       
     </tr>
     <?php  
     require '../lib/member.class.php';
     $m = new Member;
     $m->connect();
     $list = $m->getMembreAll();
     while($v = $list->fetch())
       {    ?>

         <tr>
           <td class="active">  <?php echo $v['pseudo'];  ?> </td>
           <td class="success"> <?php echo $v['email'];  ?> </td>
           <td class="info">  <?php echo $v['password'];  ?>  </td>
           
         </tr>

         <?php  }
         ?>
       </table>
     </p>
   </div>
   <div class="jumbotron" id="admin1">
    
    <table class="table table-hover">
      <tr>
        <td>name</td>
        <td>message</td>
      </tr>
      <?php  
      include_once '../lib/Gestionbd.class.php';
      $m = new Bd;
      $m->connect();
      $list = $m->getDataBackup();
      while($v = $list->fetch())
       {    ?>

         <tr>
           
          <td > <?php echo $v['name'];  ?> </td>
          <td > <?php echo $v['message'];  ?>  </td>
          
        </tr>

        <?php  }
        ?>
      </table>


    </p>
  </div>

  <div class="jumbotron" id="admin1">
    <h1>Teach her</h1>
    <div id="main">

     


      <div id="typing">
        <form method="post" action="../controll/traiterlearn.php">
          <h2 class="form-signin-heading">teaching</h2>
          <label for="inputEmail" class="sr-only">if someone says</label>
          <input type="text" id="inputEmail" name="texting" class="form-control" placeholder="if someone says" required autofocus>
          <label for="inputPassword" class="sr-only">then say to him</label>
          <input type="text" id="inputPassword" name="nom" class="form-control" placeholder="then say to him" required>
          
          <button class="btn btn-lg btn-primary btn-block" type="submit">send</button>
        </form>
      </div>
      <div id="learnregx">
        <form method="post" action="../controll/addnewregx.php">
         <h2 class="form-signin-heading">teaching</h2>
         
         <label for="inputPassword" class="sr-only">then say to him</label>
         <input type="text" id="inputPassword" name="word" class="form-control" placeholder="and type here the word" required>
         
         <button class="btn btn-lg btn-primary btn-block" type="submit">send</button>
       </form>


       
     </div>
   </div>






   <footer class="footer" >
    <div class="container">
      <p class="text-muted">Copyright © 2017 The AI Lain v0.1 | programmed by Celtaria   </p>
    </div>
  </footer>
  </html>
