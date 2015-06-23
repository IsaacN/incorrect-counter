<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Incorrectness Counter</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='css/style.css' rel='stylesheet'>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php include('leaderboard.php');?>
  </head>
  <body>
    <div class='jumbotron position1 scorebox'>
      <div class='wrapper position1'>
        <h2 class='name position1'><?php echo $position1Name; ?></h2>
        <p class='count position1'><?php echo $position1Score; ?></p>
      </div>
      <div class='add position1'>
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
          <div class='add position2'>
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
          <div class='add position3'>
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
          <div class='add position4'>
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
          <div class='add position5'>
            <div class='wrapper'>
              <span class='addButton position5'>
                 +
              </span>
            </div>
          </div>
        </div>
      </div><!--end container-fluid-->
    </div><!--end .runnersUp-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src='js/script.js'></script>
  </body>
</html>