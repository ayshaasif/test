<?php 
 include_once 'index.php';
  include_once 'includes/dbh.inc.php';
  include_once 'includes/user.inc.php';
  include_once 'includes/viewuser.inc.php';
  include_once 'includes/postForm.inc.php'; 
  // session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Search Result</title>
  </head>
  <body>
      
 <!-- Navbar starts -->

 <?php include_once "components/navbar.php"?>


 <!-- Navbar ends -->
 
    <div class="container">
        <div class="row ng-scope">
    <?php
        if(isset($_POST['submit'])){
        $users = new ViewUser();
        $users->showFilterUser();
        }

    
    ?>

    <div>
    <a href="index.php">
    <button type="button" class="btn btn-secondary mt-5">Back</button>
    </a>
    </div>
            <div class="col-md-9 col-md-pull-3 mt-5 pl-5">
                <div class="text-center">
                    <ul class="pagination pagination-sm">
                        <li class="disabled"><a href="#">Prev</a>
                        </li>
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">Next</a>
                        </li>
                    </ul>

                   
                </div>

            </div>
            
       
          </div>

        </div>
            
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>