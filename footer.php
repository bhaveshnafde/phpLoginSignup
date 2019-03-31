<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style media="screen">

    footer {
      position: fixed;
      background-color: #fff;
      height: 80px;
      bottom: 0;
      width: 100%;
      text-align: center;
    }
    </style>

    <footer class="footer">
       <div class="container">
         <?php
           if (isset($_SESSION['userId'])) {
             echo "<p align=center>you are logged in</p>";
           ?>

             <form action="includes/logout.inc.php" method="post">
               <button  type="submit" class="btn btn-secondary" name="logout-submit">Logout</button>
             </form>

           <?php
           }
           else{
             echo "<p align=center>you are logged out</p>";
           }
         ?>
       </div>
     </footer>
</html>
