<?php
   include_once './search.php';

 class PostForms{
     
    public $fname;
    public $program;
    public $cgpa;
    public $year;
    public $gender;
    public $nationality;
    public $specialization;

    function __constructor(){
       $this->fname = isset($_POST['fname']) ? $_POST['fname'] : "null";;
       $this->program = isset($_POST['program']) ? $_POST['program'] : "";
       $this->cgpa = isset($_POST['cgpa'])? $_POST['cgpa']: "";
       $this->year = isset($_POST['year'])? $_POST['year']: "";
       $this->gender = isset($_POST['gender'])? $_POST['gender']: "";
       $this->nationality = isset($_POST['nationality'])? $_POST['nationality']: "";
       $this->specialization = isset($_POST['specialization'])? $_POST['specialization']: "";
    }

   //  function __constructor($array){
   //     $this->fname = $array['fname'];
   //    // $this->fname = isset($array['fname']) ? $array['fname'] : "null";
   //    $this->program = isset($array['program']) ? $array['program'] : "";
   //    $this->cgpa = isset($array['cgpa'])? $array['cgpa']: "";
   //    $this->year = isset($array['year'])? $array['year']: "";
   //    $this->gender = isset($array['gender'])? $array['gender']: "";
   //    $this->nationality = isset($array['nationality'])?$array['nationality']: "";
   //    $this->specialization = isset($array['specialization'])? $array['specialization']: "";
   // }
}





?>
 