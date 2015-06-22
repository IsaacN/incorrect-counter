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
    <div class='jumbotron leader scorebox'>
      <div class='wrapper leader'>
        <h2 class='name leader'>Jordan</h2>
        <p class='count leader'>123</p>
      </div>
      <div class='add leader'>
        <div class='wrapper'>
          <span class='addButton'>
            +
          </span>
        </div>
      </div>
    </div>
    <div class='runnersUp'>
      <div class='container-fluid'>
        <div class='col-md-3 scorebox'>
          <div class='wrapper'>
            <h3 class='name second'>Andy</h3>
            <p class='count'>100</p>
          </div>
          <div class='add second'>
            <div class='wrapper'>
              <span class='addButton'>
                 +
              </span>
            </div>
          </div>
        </div>
        <div class='col-md-3 scorebox'>
          <div class='wrapper'>
            <h3 class='name third'>Isaac</h3>
            <p class='count'>50</p>
          </div>
          <div class='add third'>
            <div class='wrapper'>
              <span class='addButton'>
                 +
              </span>
            </div>
          </div>
        </div>
        <div class='col-md-3 scorebox'>
          <div class='wrapper'>
            <h3 class='name fourth'>Alex</h3>
            <p class='count'>25</p>
          </div>
          <div class='add fourth'>
            <div class='wrapper'>
              <span class='addButton'>
                 +
              </span>
            </div>
          </div>
        </div>
        <div class='col-md-3 scorebox'>
          <div class='wrapper'>
            <h3 class='name fifth'>Nick</h3>
            <p class='count'>10</p>
          </div>
          <div class='add fifth'>
            <div class='wrapper'>
              <span class='addButton'>
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