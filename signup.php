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
        margin-top: 30%;
        padding: 10% 10%;
        background-color: #f8f8f8;
        color: #555;
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

            <form id="log" action="includes/signup.inc.php" method="post">

              <h1>Signup</h1>

              <?php
                if (isset($_GET['error'])) {
                  if($_GET['error'] == "emptyfields"){ ?>
                    <div class="alert alert-danger">
                          <strong >Error!</strong> Fill in all Fields.
                    </div>
                    <?php
                  }
                  else if($_GET['error'] == "invalidmailuid"){ ?>
                    <div class="alert alert-danger">
                          <strong >Error!</strong> Invalid username and email.
                    </div>
                    <?php
                  }
                  else if($_GET['error'] == "invalidmail"){ ?>
                    <div class="alert alert-danger">
                          <strong >Error!</strong> Invalid email.
                    </div>
                    <?php
                  }
                  else if($_GET['error'] == "passwordcheck"){ ?>
                    <div class="alert alert-danger">
                          <strong >Error!</strong> Passwords do not match.
                    </div>
                    <?php
                  }
                  else if($_GET['error'] == "invaliduid"){ ?>
                    <div class="alert alert-danger">
                          <strong >Error!</strong> Invalid username.
                    </div>
                    <?php
                  }
                  else if($_GET['error'] == "usertaken"){ ?>
                    <div class="alert alert-danger">
                          <strong >Error!</strong> Username is already taken.
                    </div>
                    <?php
                  }
                }
                else if(isset($_GET['signup'])){
                  if($_GET['signup'] == "success"){ ?>
                    <div class="alert alert-success">
                      <strong>Success!</strong> Signup success.
                    </div>
                  <?php
                }
                }
              ?>

              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="uid" placeholder="Username">
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="mail" placeholder="Email">
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="pwd" placeholder="password">
              </div>

              <div class="form-group">
                <label>Repeat Password</label>
                <input type="password" class="form-control" name="pwd-repeat" placeholder="repeat password">
              </div>

              <button type="submit" class="btn btn-primary btn-block  " name="signup-submit">Signup</button>

              <div class="form-group">
                <a href="index.php">Login</a>
              </div>

            </form>

            <br>
            <br>
            <br>
            <br>
          </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <?php
      }
      require "footer.php";
    ?>
  </body>
</html>
