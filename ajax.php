<?php include('leaderboard.php');?>


<div class='jumbotron position1 scorebox'>
  <div class='wrapper position1'>
    <h2 class='name position1'><?php echo $position1Name; ?></h2>
    <p class='count position1'><?php echo $position1Score; ?></p>
  </div>
  <div class='add position1 <?php echo $id_1;?>'>
    <div class='wrapper'>
      <span class='addButton position1'>
        +
      </span>
    </div>
  </div>
</div>
<div class='runnersUp'>
  <div class='container-fluid'>
    <div class='col-md-3 scorebox'>
      <div class='wrapper'>
        <h3 class='name position2'><?php echo $position2Name; ?></h3>
        <p class='count position2'><?php echo $position2Score; ?></p>
      </div>
      <div class='add position2 <?php echo $id_2;?>'>
        <div class='wrapper'>
          <span class='addButton position2'>
             +
          </span>
        </div>
      </div>
    </div>
    <div class='col-md-3 scorebox'>
      <div class='wrapper'>
        <h3 class='name position3'><?php echo $position3Name; ?></h3>
        <p class='count position3'><?php echo $position3Score; ?></p>
      </div>
      <div class='add position3 <?php echo $id_3;?>'>
        <div class='wrapper'>
          <span class='addButton position3'>
             +
          </span>
        </div>
      </div>
    </div>
    <div class='col-md-3 scorebox'>
      <div class='wrapper'>
        <h3 class='name position4'><?php echo $position4Name; ?></h3>
        <p class='count position4'><?php echo $position4Score; ?></p>
      </div>
      <div class='add position4 <?php echo $id_4;?>'>
        <div class='wrapper'>
          <span class='addButton position4'>
             +
          </span>
        </div>
      </div>
    </div>
    <div class='col-md-3 scorebox'>
      <div class='wrapper'>
        <h3 class='name position5'><?php echo $position5Name; ?></h3>
        <p class='count position5'><?php echo $position5Score; ?></p>
      </div>
      <div class='add position5 <?php echo $id_5;?>'>
        <div class='wrapper'>
          <span class='addButton position5'>
             +
          </span>
        </div>
      </div>
    </div>
  </div><!--end container-fluid-->
</div><!--end .runnersUp-->
<script src='js/script.js'></script>