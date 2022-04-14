<?php 
 session_start();
?>

<?php 
    include_once './search.php';

    class User extends Dbh{

        protected function sqlGenerator(){
          if(empty($_POST['fname']) & empty($_POST['program']) & empty($_POST['cgpa']) & empty($_POST['gender']) & empty($_POST['specialization'])){
            $sql = "Select * from student_master;";
          }else{
          $sql = "Select * from student_master where ";
           }

           
        
        
        
        }
        // protected function sqlGenerator(){
            // if(empty($_POST['fname']) & empty($_POST['program']) & empty($_POST['cgpa']) & empty($_POST['gender']) & empty($_POST['specialization'])){
            //   $sql = "Select * from student_master;";
            // }else{
            // $sql = "Select * from student_master where ";
            //  }

        //   // $sql = "Select * from student_master where fname Like %".$fname."% or program Like %".$program."% or cgpa like%".$cgpa."%  or gender Like%".$gender."% or specialization like%".$specialization."% ; ";
        //     if($_POST['fname']){
        //       $sql .=  "fname Like '%".$_POST['fname']."%' or ";
        //     }
        //     if($_POST['program']){
        //       $sql .= "program Like '%".$_POST['program']."%' or";
        //     }
        //     if($_POST['cgpa']){
        //       $sql .= "cgpa =".$_POST['cgpa']." or "; 
        //     }
        //     if($_POST['gender']){
        //       $sql .= "gender ='".$_POST['gender']."' or "; 
        //     }
        //     if($_POST['specialization']){
        //       $sql .= "specialization ='".$_POST['specialization']."' "; 
        //     }
            
        //     $sql .= " ;";
        //   return $sql;
        //   } 
        
        // protected function sqlGenerator_Pstmt(){
        //   foreach($_POST as $key => $val)
        //  if($key!="submit" and $val)
        //       $filters[] = "$key like '%".$this->connect()->real_escape_string($val)."%' ";

        //       $sql = "Select * from student_master".(isset($filters)?" where ".implode("and ", $filters):"").";";
           
        //     // print_r($sql);
        //       return $sql;
        //  }



        protected function executeQuery(){
                $sql = $this->sqlGenerator();
                $result = $this->connect()->query($sql);
                $numRows = $result->num_rows;
                if($numRows > 0){
                    while($row = $result->fetch_assoc()){
                        $data[] = $row;
                    }
                    return array("data"=>$data,"count"=>$numRows);
            }else{
                return array("data"=>0,"count"=>0);
            }
         }
       
        
  }

?> 