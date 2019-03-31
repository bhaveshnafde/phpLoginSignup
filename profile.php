<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Profile</title>

    <style type="text/css">
      #log{
        border: 2px solid white;
        padding: 10% 10%;
        margin-top: 40%;
        background-color: #f8f8f8;
        color: #555
        --webkit-box-shadow: 0px 0px 10px 4px rgba(214,214,214,1);
        -moz-box-shadow: 0px 0px 10px 4px rgba(214,214,214,1);
        box-shadow: 0px 0px 10px 4px rgba(214,214,214,1);
      }
      h1{
        text-align : center;
        font-size : 30px;
        font-weight:bolder;
        margin-top:-20px;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid bg">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <?php
              if (isset($_SESSION['userId'])) {
                ?>
                <div id="log">
                  <div  class="alert alert-success">
                    <p><strong >Success!</strong> You are successfully logged in.</p><?php echo ($_SESSION["userUid"]) ?>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>
                <?php require "footer.php";
              }
              else{
                header("Location: index.php");
                exit();
              }

    ?>

  </body>
</html>
