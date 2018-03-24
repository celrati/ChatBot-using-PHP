        <div class="col-md-5" id="feelings">
          <h1>The state of Lain !!</h1>

          <?php require '../lib/Laine.class.php';
          $Laine1 = new Laine;
          $Laine1->connect();
          $Laine1->getfeelings(); 
    //$Laine1->setfeelings(90,90,40,10);
          ?>
          Happy:
          <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $Laine1->getHappy(); ?>%">
              <span class="sr-only">40% Complete (success)</span>
            </div>
          </div>
          Sad:
          <div class="progress">
            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $Laine1->getSad(); ?>%">
              <span class="sr-only">20% Complete</span>
            </div>
          </div>
          Angry:
          <div class="progress">
            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $Laine1->getAngry(); ?>%">
              <span class="sr-only">60% Complete (warning)</span>
            </div>
          </div>
          Love:
          <div class="progress">
            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $Laine1->getLove(); ?>%">
              <span class="sr-only">80% Complete (danger)</span>
            </div>
          </div>





        </div>
      </div>
      

    </div>