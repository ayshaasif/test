<?php
   session_start();
   $_SESSION["found"] = 0;
  //  if(isset($_POST['login_form_submit'])){
  //   $_SESSION['login_user']= $_POST['username'];
  //  }

   include_once "includes/login.inc.php"
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Login Form</title>
    

    <link rel="stylesheet" href="../styles/login.css">

  </head>
  <body>
    
  <?php
      include_once "components/navbar.php";
      $login = new Login();
      $login->displayMsg(); 
  ?>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">

            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card  text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">

                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    <p class="msg text-white-50 mb-5">
                      Please enter your login and password!
                    </p>
                    <form name="login_form"  method="post">
                    <!-- <form name="login_form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"> -->

                          <div class="form-outline form-white mb-4">
                            <input type="text" name = "username" id="typeEmailX" class="form-control-lg"  placeholder="Username">
                          </div>
            
                          <div class="form-outline form-white mb-4">
                            <input type="password" name="password" id="typePasswordX" class="form-control-lg" placeholder="Password">
                          </div>
            
                          <p class="small mb-5 pb-lg-2">
                            <a class="text-white-50" href="#">Forgot password?</a>
                          </p>
                          <button class="btn btn-outline-light btn-lg px-5" name="login_form_submit" value="submit" type="submit">Login</button> 
                    </form>
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="icon"><i class=" fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="icon"><i class=" fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="icon"><i class="fab fa-google fa-lg"></i></a>
                    </div>
      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

</body>

<!-- Search block ends -->




    <!-- Optional JavaScript; choose one of the two! -->
    <script>
        


    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>