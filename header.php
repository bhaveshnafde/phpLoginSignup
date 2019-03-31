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

    <title>Admin Login</title>

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
                <div  class="alert alert-danger">
                      <strong >Error!</strong> You are already Logged in, Kindly logout to login again.
                </div>
                </div>
                <?php
              }
              else{
            ?>
            <form id="log" action="includes/login.inc.php" method="post">

              <h1>Login Form</h1>
              <?php
                if (isset($_GET['error'])) {
                  if($_GET['error'] == "emptyfields"){ ?>
                    <div class="alert alert-danger">
                          <strong >Error!</strong> Fill in all Fields.
                    </div>
                    <?php
                  }
                  else if($_GET['error'] == "wrongpassword"){ ?>
                    <div class="alert alert-danger">
                          <strong >Error!</strong> Wrong Password.
                    </div>
                    <?php
                  }
                  else if($_GET['error'] == "nouser"){ ?>
                    <div class="alert alert-danger">
                          <strong >Error!</strong> User not found.
                    </div>
                    <?php
                  }
                }
                else if(isset($_GET['login'])){
                  if($_GET['login'] == "success"){ ?>
                    <div class="alert alert-success">
                      <strong>Success!</strong> Login success.
                    </div>
                  <?php
                }
                }
              ?>

              <div class="form-group">
                <label>Email / Username</label>
                <input type="text" class="form-control" placehoder="Email" name="mailuid">
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placehoder="Password" name="pwd">
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="login-submit">Login</button>
              </div>

              <div class="form-group">
              <a href="signup.php">Signup</a>
              </div>


            </form>
            <?php
            }?>
            <br><br><br><br>
          </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
      require "footer.php";
    ?>

  </body>
</html>
