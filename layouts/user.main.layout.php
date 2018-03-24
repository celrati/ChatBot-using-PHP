 <div  id="user_main">
  <div class="container">

    <div class="col-md-12" id="main_chat">
      <h1>Hello !</h1>
      <p>you can start the conversation!</p>
      <div id="chat" >
       <em>Laine :</em> :) :) :) <br/>
       <?php require '../lib/Gestionbd.class.php'; ?>
       <?php $database = new Bd(); $database->connect();  $rep = $database->getData(); $database->deleteall(); ?>
       <div id="chatting">
         <?php  

         while($data = $rep->fetch())
         {
           echo "<bold>" .htmlspecialchars($data['name']). "  :   " .htmlspecialchars($data['message']). "</bold><br>";

         }


         ?>
       </div>
       
     </div>


     <form class="form-signin" method="post" action="../controll/traiter.php">
      
      <label for="inputEmail" class="sr-only">type here</label>
      
      <input type="text" id="inputPseudo" class="form-control" placeholder="type here" name="message" required autofocus>
      <div class="checkbox">
       
      </div>
      <button class="btn btn-lg btn-primary btn-block" id="b1" type="submit">send</button>
    </form>
    <div id="contimg1">
    <!-- <div style="position:relative" id="im1"> -->
    <!-- <img  src="../images/im.png">-->
  </div>
  </div>


  </div>