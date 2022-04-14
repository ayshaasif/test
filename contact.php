<?php 
 session_set_cookie_params(0);
 session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login Form</title>

    <style>
      body{
        background-color:white;
      }
      .social-link {
  width: 30px;
  height: 30px;
  border: 1px solid #ddd;
  display: flex;
  align-items: center;
  justify-content: center;
  color: rgb(255, 251, 251);
  border-radius: 50%;
  transition: all 0.3s;
  font-size: 0.9rem;
}

.social-link:hover,
.social-link:focus {
  background: #ddd;
  text-decoration: none;
  color: #555;
}

.nav-link {
  color:black;
}

*, *:before, *:after {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body {
  background: linear-gradient(to right, white 0%, white 100%);
  font-size: 12px;
}

body, button, input {
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  letter-spacing: 1.4px;
}

.background {
  display: flex;
  min-height: 100vh;
}

.container {
  flex: 0 1 700px;
  margin: auto;
  padding: 10px;
}

.screen {
  position: relative;
  background: #3e3e3e;
  border-radius: 15px;
}

.screen:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 20px;
  right: 20px;
  bottom: 0;
  border-radius: 15px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
  z-index: -1;
}

.screen-header {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  background: rgba(6, 7, 61, 0.85);
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.screen-header-left {
  margin-right: auto;
}

.screen-header-button {
  display: inline-block;
  width: 8px;
  height: 8px;
  margin-right: 3px;
  border-radius: 8px;
  background: white;
}

.screen-header-button.close {
  background:white;
}

.screen-header-button.maximize {
  background: #e8e925;
}

.screen-header-button.minimize {
  background: #74c54f;
}

.screen-header-right {
  display: flex;
}

.screen-header-ellipsis {
  width: 3px;
  height: 3px;
  margin-left: 2px;
  border-radius: 8px;
  background: rgba(6, 7, 61, 0.85);
}

.screen-body {
  display: flex;
  background-color:rgba(6, 7, 61, 0.85);
}

.screen-body-item {
  flex: 1;
  padding: 50px;
}

.screen-body-item.left {
  display: flex;
  flex-direction: column;
}

.app-title {
  display: flex;
  flex-direction: column;
  position: relative;
  color: white;
  font-size: 26px;
}

.app-title:after {
  content: '';
  display: block;
  position: absolute;
  left: 0;
  bottom: -10px;
  width: 25px;
  height: 4px;
  background: white;
}

.app-contact {
  margin-top: auto;
  font-size: 8px;
  color: #888;
}

.app-form-group {
  margin-bottom: 15px;
}

::placeholder,::-webkit-input-placeholder  {
  /* color: rgba(225,225,225,0.24); */
}

.app-form-group.message {
  margin-top: 40px;
}

.app-form-group.buttons {
  margin-bottom: 0;
  text-align: right;
}

.app-form-control {
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid white;
  color: #ddd;
  font-size: 14px;
  text-transform: uppercase;
  outline: none;
  transition: border-color .2s;
}

.app-form-control::placeholder {
  color:white;
}

.app-form-control:focus {
  border-bottom-color: #ddd;
}

.app-form-button {
  background: none;
  padding:5px;
  border-radius:5px;
  margin:4px;
  border: none;
  color:#f2f2f2;
  font-size: 14px;
  cursor: pointer;
  outline: 1px solid white;
}
.app-form-button:hover{
   background:rgba(225,225,225,0.2);
}

.credits {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
  color: #ffa4bd;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 16px;
  font-weight: normal;
}

.credits-link {
  display: flex;
  align-items: center;
  color: #fff;
  font-weight: bold;
  text-decoration: none;
}

.dribbble {
  width: 20px;
  height: 20px;
  margin: 0 5px;
}

map{
  margin:auto;

}

footer{
  background-color: rgba(238, 235, 235, 0.76);
  color:rgba(0, 0, 0, 0.527);
}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}




@media screen and (max-width: 520px) {
  .screen-body {
    flex-direction: column;
  }

  .screen-body-item.left {
    margin-bottom: 30px;
  }

  .app-title {
    flex-direction: row;
  }

  .app-title span {
    margin-right: 12px;
  }

  .app-title:after {
    display: none;
  }
}

@media screen and (max-width: 600px) {
  .screen-body {
    padding: 40px;
  }

  .screen-body-item {
    padding: 0;
  }
}



    </style>

  </head>
  <body>
  

<?php include_once "components/navbar.php"?>


<div>



  <div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-header">
        
          <div class="screen-header-right">
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
          </div>
        </div>

        <div class="screen-body">
          <!-- <form action="components/contact.mail.php" method="post" name="my_email_form"> -->
                <div class="screen-body-item left">
                  <div class="app-title">
                    <span>CONTACT</span>
                    <span>US</span>
                  </div>
                </div>
                <div class="screen-body-item">
                  <form action="components/contact.mail.php" method="post">
                  <div class="app-form">
                    <div class="app-form-group">
                      <input name="name" class="app-form-control" placeholder="NAME">
                    </div>
                    <div class="app-form-group">
                      <input name="email" type="email" class="app-form-control" placeholder="EMAIL">
                    </div>
                    <div class="app-form-group">
                      <input name="phone" class="app-form-control" placeholder="CONTACT NO">
                    </div>
                    <div class="app-form-group message">
                      <input name="message" class="app-form-control" placeholder="MESSAGE">
                    </div>
                    <div class="app-form-group buttons">
                      <button type="reset" class="app-form-button">CANCEL</button>
                      <button name= "submit_email" class="app-form-button">SEND</button>
                    </div>
                  </div>
                  </form>
                </div>
          <!-- </form> -->
        </div>
      </div>


      
</div>
<div class="map">
      <div class="col-lg-6 d-none d-lg-block"  id="format"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.0696654784356!2d55.422959115008176!3d25.133335483925972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6395537fc413%3A0x913f323d641a34c8!2sManipal%20Academy%20of%20Higher%20Education%20-%20Dubai%20Campus!5e0!3m2!1sen!2sae!4v1646129419984!5m2!1sen!2sae" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
    </div>
  </div>
</div>

      
    </div>
  </div>
</div>





<footer>
  <div class="bg">
    <div class="container py-5">
      <div class="row h-100 align-items-center py-5">
        <div class="col-lg-6">
          <h1 class="display-4"><strong>Contact us</strong></h1>
          <p class="lead text-muted mb-0">G04,Dubai International Academic City (DIAC)
            PO Box 345050<br>
            Dubai - UAE<br>
            Phone: +971 4 4290 888 / 800 6832<br>
            Fax: +971 4 369 4541<br>
            
             </p>
             <a href="https://www.facebook.com/MAHEDubai/" class="fa fa-facebook"></a>
             <a href="https://twitter.com/manipaldxb?lang=en" class="fa fa-twitter"></a>
             <a href="https://www.linkedin.com/school/mahe-dubai/" class="fa fa-linkedin"></a>
             <a href="https://www.instagram.com/manipaldxb/?hl=en" class="fa fa-instagram"></a>
         
        </div>
      </footer>