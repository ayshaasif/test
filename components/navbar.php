<!-- Navbar starts -->
<nav class="navbar navbar-expand-lg navbar-black bg-white shadow p-3 mb-5 bg-white rounded">
    <div class="container-fluid">
      <a class="navbar-brand manipal" href="#"><img src="../images/manipal2.png" alt="logo"  width="278" height="65" ></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
          
         
        
        </ul>
        <form class="d-flex">
          
          <a href='login.php'>
           <button type="button" class="btn btn-outline-dark">
             <?php 
             if (isset($_SESSION['found'])) {
              /// your code here
              if($_SESSION["found"] === 1){
                echo "<b>Log-out</b>";
             }else{
               echo "<b>Log-in<b>";
             }
          }
              
             ?>
            
            </button> 

           </a>
           <?php 
              //  if($_SESSION["found"] === 1){
              //   echo '<div align="center">   '.$_SESSION["login_user"].'</div>';
              //  }
           ?>
        </form>
      </div>
    </div>
  </nav>

 <!-- Navbar ends -->