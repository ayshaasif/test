<?php 

//  include_once './login.php';
  class Login{
    private $servername;
          private $username;
          private $password;
          private $dbname;

     protected function connect(){
              $this->servername = "localhost";
              $this->username = "root";
              $this->password = "";
              $this->dbname= "student_info";

              $conn = new mysqli($this->servername,$this->username,
                                    $this->password,$this->dbname);
            return $conn;
          }

    function check_Username(){
        if(isset($_POST['login_form_submit'])){
          $username = $_POST['username'];
          // $username = $_SESSION['login_user'];
          $pwd = $_POST['password'];
        }
            $conn = $this->connect();
            $sql = "SELECT * FROM admintable  WHERE  BINARY  username=? and password=?"; // SQL with parameters
            $stmt = $conn->prepare($sql); 
            $stmt->bind_param("ss", $username, $pwd);
            $stmt->execute();
            $result = $stmt->get_result(); // get the mysqli result

            $user = $result->fetch_assoc(); // fetch data 
            return $result;
         }
    
    function displayMsg(){
        $result = $this->check_Username();
        // echo "result: ";
        // print_r($result);
        if(isset($_POST['login_form_submit'])){
          if($result->num_rows <=0){
            echo "invalid credentials";

          }else{
            $_SESSION['found'] = 1;
            $_SESSION['login_user'] = $_POST['username'];
            header("Location:./index.php");
          }
        }
    }

  }



?>