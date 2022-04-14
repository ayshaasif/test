<?php
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
    
    <title>SKILL SET</title>
    <link rel="stylesheet" href="../styles/styles2.css">
  </head>
  <body>
  

 <!-- Navbar starts -->

 <?php include_once "components/navbar.php"?>

 <!-- Navbar ends -->


 <!---BLOCK--->
 <!-- change made here to action  -->
 <form name="index_form" action="search.php" method="post"> 
 <div class="block">
 
 <div class="first">

 <div id="program">
   Programs:  <select name="program" id="select">
     <option value="">--------Programs--------</option>
       <option value="BA - Humanities">BA - Humanities</option>
       <option value="Bsc - Applied Psychology">Bsc - Applied Psychology</option>
       <option value="BBA">BBA</option>
       <option value="BCom - Professional">BCom - Professional</option>
       <option value="BCom - Professional (with ACCA)">BCom - Professional (with ACCA)</option>
       <option value="BArch">BArch</option>
       <option value="BDes - Interior Design">BDes - Interior Design</option>
       <option value="BSc - Information Systems & Management">BSc - Information Systems & Management</option>
       <option value="BTech - Chemical Engineering">BTech - Chemical Engineering</option>
       <option value="BTech - Civil Engineering">BTech - Civil Engineering</option>
       <option value="BTech - Computer Science Engineering">BTech - Computer Science Engineering</option>
       <option value="BTech - Data Science & Engineering">BTech - Data Science & Engineering</option>
       <option value="BTech - Electrical & Electronics Engineering">BTech - Electrical & Electronics Engineering</option>
       <option value="BTech - Mechanical Engineering">BTech - Mechanical Engineering</option>
       <option value="BSc - Biotechnology">BSc - Biotechnology</option>
       <option value="BSc - Food & Nutrition Science">BSc - Food & Nutrition Science</option>
       <option value="BA - Film Studies & TV Production">BA - Film Studies & TV Production</option>
       <option value="BA - Media & Communication">BA - Media & Communication</option>
       <option value="BSc - Animation">BSc - Animation</option>
   </select>
</div>

   <div id="cgpa">
     <select name="cgpa" id="select">
         <option value="">CGPA</option>
         <option value="9">Above 9</option>
         <option value="8">8</option>
         <option value="7">7</option>
         <option value="6">6</option>
         <option value="5">5</option>
         <option value="4">4</option>
         <option value="3">3</option>
         <option value="2">2</option>   
     </select>
</div>
 <div id="year">
   <select name="yearofgraduation" id="select">
     <option value="">Year</option>
       <option value="2000">2000</option>
       <option value="2001">2001</option>
       <option value="2002">2002</option>
       <option value="2003">2003</option>
       <option value="2004">2004 </option>
       <option value="2005">2005</option>
       <option value="2006">2006</option>
       <option value="2007">2007</option>
       <option value="2008">2008</option>
       <option value="2009">2009</option>
       <option value="2010">2010</option>
       <option value="2011">2011</option>
       <option value="2012">2012</option>
       <option value="2013">2013</option>
       <option value="2014">2014</option>
       <option value="2015">2015</option>
       <option value="2016">2016</option>
       <option value="2017">2017</option>
       <option value="2018">2018</option>
       <option value="2019">2019</option>
       <option value="2020">2020</option>
       <option value="2021">2021</option>
       <option value="2022">2022</option>
       <option value="2023">2023</option>
       <option value="2024">2024</option>
       <option value="2025">2025</option>
       <option value="2026">2026</option>
       <option value="2027">2027</option>
       <option value="2028">2028</option>
       <option value="2029">2029</option>
       <option value="2030">2030</option>
      
   </select>
 </div>
 </div>



 <div class="second">

  <div class="name">
    <label for="name" id="name">Name</label>
    <input type="text" id="fname" name="fname">
    <!-- <br><br> -->
  </div>



  <div id="gender">
    <select name="gender" id="select">
        <option value="">Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
  </div>



 <div id="nationality">
   <select name="nationality" id="select">
     <option value="">Nationality</option>
     <option value="afghan">Afghan</option>
     <option value="albanian">Albanian</option>
     <option value="algerian">Algerian</option>
     <option value="american">American</option>
     <option value="andorran">Andorran</option>
     <option value="angolan">Angolan</option>
     <option value="antiguans">Antiguans</option>
     <option value="argentinean">Argentinean</option>
     <option value="armenian">Armenian</option>
     <option value="australian">Australian</option>
     <option value="austrian">Austrian</option>
     <option value="azerbaijani">Azerbaijani</option>
     <option value="bahamian">Bahamian</option>
     <option value="bahraini">Bahraini</option>
     <option value="bangladeshi">Bangladeshi</option>
     <option value="barbadian">Barbadian</option>
     <option value="barbudans">Barbudans</option>
     <option value="batswana">Batswana</option>
     <option value="belarusian">Belarusian</option>
     <option value="belgian">Belgian</option>
     <option value="belizean">Belizean</option>
     <option value="beninese">Beninese</option>
     <option value="bhutanese">Bhutanese</option>
     <option value="bolivian">Bolivian</option>
     <option value="bosnian">Bosnian</option>
     <option value="brazilian">Brazilian</option>
     <option value="british">British</option>
     <option value="bruneian">Bruneian</option>
     <option value="bulgarian">Bulgarian</option>
     <option value="burkinabe">Burkinabe</option>
     <option value="burmese">Burmese</option>
     <option value="burundian">Burundian</option>
     <option value="cambodian">Cambodian</option>
     <option value="cameroonian">Cameroonian</option>
     <option value="canadian">Canadian</option>
     <option value="cape verdean">Cape Verdean</option>
     <option value="central african">Central African</option>
     <option value="chadian">Chadian</option>
     <option value="chilean">Chilean</option>
     <option value="chinese">Chinese</option>
     <option value="colombian">Colombian</option>
     <option value="comoran">Comoran</option>
     <option value="congolese">Congolese</option>
     <option value="costa rican">Costa Rican</option>
     <option value="croatian">Croatian</option>
     <option value="cuban">Cuban</option>
     <option value="cypriot">Cypriot</option>
     <option value="czech">Czech</option>
     <option value="danish">Danish</option>
     <option value="djibouti">Djibouti</option>
     <option value="dominican">Dominican</option>
     <option value="dutch">Dutch</option>
     <option value="east timorese">East Timorese</option>
     <option value="ecuadorean">Ecuadorean</option>
     <option value="egyptian">Egyptian</option>
     <option value="emirian">Emirian</option>
     <option value="equatorial guinean">Equatorial Guinean</option>
     <option value="eritrean">Eritrean</option>
     <option value="estonian">Estonian</option>
     <option value="ethiopian">Ethiopian</option>
     <option value="fijian">Fijian</option>
     <option value="filipino">Filipino</option>
     <option value="finnish">Finnish</option>
     <option value="french">French</option>
     <option value="gabonese">Gabonese</option>
     <option value="gambian">Gambian</option>
     <option value="georgian">Georgian</option>
     <option value="german">German</option>
     <option value="ghanaian">Ghanaian</option>
     <option value="greek">Greek</option>
     <option value="grenadian">Grenadian</option>
     <option value="guatemalan">Guatemalan</option>
     <option value="guinea-bissauan">Guinea-Bissauan</option>
     <option value="guinean">Guinean</option>
     <option value="guyanese">Guyanese</option>
     <option value="haitian">Haitian</option>
     <option value="herzegovinian">Herzegovinian</option>
     <option value="honduran">Honduran</option>
     <option value="hungarian">Hungarian</option>
     <option value="icelander">Icelander</option>
     <option value="indian">Indian</option>
     <option value="indonesian">Indonesian</option>
     <option value="iranian">Iranian</option>
     <option value="iraqi">Iraqi</option>
     <option value="irish">Irish</option>
     <option value="italian">Italian</option>
     <option value="ivorian">Ivorian</option>
     <option value="jamaican">Jamaican</option>
     <option value="japanese">Japanese</option>
     <option value="jordanian">Jordanian</option>
     <option value="kazakhstani">Kazakhstani</option>
     <option value="kenyan">Kenyan</option>
     <option value="kittian and nevisian">Kittian and Nevisian</option>
     <option value="kuwaiti">Kuwaiti</option>
     <option value="kyrgyz">Kyrgyz</option>
     <option value="laotian">Laotian</option>
     <option value="latvian">Latvian</option>
     <option value="lebanese">Lebanese</option>
     <option value="liberian">Liberian</option>
     <option value="libyan">Libyan</option>
     <option value="liechtensteiner">Liechtensteiner</option>
     <option value="lithuanian">Lithuanian</option>
     <option value="luxembourger">Luxembourger</option>
     <option value="macedonian">Macedonian</option>
     <option value="malagasy">Malagasy</option>
     <option value="malawian">Malawian</option>
     <option value="malaysian">Malaysian</option>
     <option value="maldivan">Maldivan</option>
     <option value="malian">Malian</option>
     <option value="maltese">Maltese</option>
     <option value="marshallese">Marshallese</option>
     <option value="mauritanian">Mauritanian</option>
     <option value="mauritian">Mauritian</option>
     <option value="mexican">Mexican</option>
     <option value="micronesian">Micronesian</option>
     <option value="moldovan">Moldovan</option>
     <option value="monacan">Monacan</option>
     <option value="mongolian">Mongolian</option>
     <option value="moroccan">Moroccan</option>
     <option value="mosotho">Mosotho</option>
     <option value="motswana">Motswana</option>
     <option value="mozambican">Mozambican</option>
     <option value="namibian">Namibian</option>
     <option value="nauruan">Nauruan</option>
     <option value="nepalese">Nepalese</option>
     <option value="new zealander">New Zealander</option>
     <option value="ni-vanuatu">Ni-Vanuatu</option>
     <option value="nicaraguan">Nicaraguan</option>
     <option value="nigerien">Nigerien</option>
     <option value="north korean">North Korean</option>
     <option value="northern irish">Northern Irish</option>
     <option value="norwegian">Norwegian</option>
     <option value="omani">Omani</option>
     <option value="pakistani">Pakistani</option>
     <option value="palauan">Palauan</option>
     <option value="panamanian">Panamanian</option>
     <option value="papua new guinean">Papua New Guinean</option>
     <option value="paraguayan">Paraguayan</option>
     <option value="peruvian">Peruvian</option>
     <option value="polish">Polish</option>
     <option value="portuguese">Portuguese</option>
     <option value="qatari">Qatari</option>
     <option value="romanian">Romanian</option>
     <option value="russian">Russian</option>
     <option value="rwandan">Rwandan</option>
     <option value="saint lucian">Saint Lucian</option>
     <option value="salvadoran">Salvadoran</option>
     <option value="samoan">Samoan</option>
     <option value="san marinese">San Marinese</option>
     <option value="sao tomean">Sao Tomean</option>
     <option value="saudi">Saudi</option>
     <option value="scottish">Scottish</option>
     <option value="senegalese">Senegalese</option>
     <option value="serbian">Serbian</option>
     <option value="seychellois">Seychellois</option>
     <option value="sierra leonean">Sierra Leonean</option>
     <option value="singaporean">Singaporean</option>
     <option value="slovakian">Slovakian</option>
     <option value="slovenian">Slovenian</option>
     <option value="solomon islander">Solomon Islander</option>
     <option value="somali">Somali</option>
     <option value="south african">South African</option>
     <option value="south korean">South Korean</option>
     <option value="spanish">Spanish</option>
     <option value="sri lankan">Sri Lankan</option>
     <option value="sudanese">Sudanese</option>
     <option value="surinamer">Surinamer</option>
     <option value="swazi">Swazi</option>
     <option value="swedish">Swedish</option>
     <option value="swiss">Swiss</option>
     <option value="syrian">Syrian</option>
     <option value="taiwanese">Taiwanese</option>
     <option value="tajik">Tajik</option>
     <option value="tanzanian">Tanzanian</option>
     <option value="thai">Thai</option>
     <option value="togolese">Togolese</option>
     <option value="tongan">Tongan</option>
     <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
     <option value="tunisian">Tunisian</option>
     <option value="turkish">Turkish</option>
     <option value="tuvaluan">Tuvaluan</option>
     <option value="ugandan">Ugandan</option>
     <option value="ukrainian">Ukrainian</option>
     <option value="uruguayan">Uruguayan</option>
     <option value="uzbekistani">Uzbekistani</option>
     <option value="venezuelan">Venezuelan</option>
     <option value="vietnamese">Vietnamese</option>
     <option value="welsh">Welsh</option>
     <option value="yemenite">Yemenite</option>
     <option value="zambian">Zambian</option>
     <option value="zimbabwean">Zimbabwean</option>
     
   </select>
 </div>

</div>


<div class="third">
<div class=" skillset">
 <form role='search'>
   <input id="searchBar" type="text" placeholder=" Search SkillSet">
  
</form>

 </div>

<div class="special">
 <select name="specialization" id="select">
   <option value="">------Specialization------</option>
     <option value="Artificial Intelligence">Artificial Intelligence</option>
     <option value="Game Design">Game Design</option>
     <option value="Networks">Networks</option>
     <option value="Computer Graphics">Computer Graphics</option>
     <option value="Information Security">Information Security </option>
     <option value="Data Science">Data Science</option>
     <option value="Programming Languages">Programming Languages</option>
     <option value="Software Engineering">Software Engineering</option>
 </select>
</div>

<button type="submit" name="submit" value= "submit" class="btn btn-info bg-white">Search</button>

  </div>
 </div>
</div>
 </div>
</div>
</div>
</div>

</div>
</form>
  


    <!-- Optional JavaScript; choose one of the two! -->
<script> //would be better if u added this on the second page's search filter
  $(document).ready(function(){
    filter_data();

    function filter_data()
    {
       var action= "fetch_data";
       var fname = $_POST['fname'];
       var program =  $_POST['program'];
       $.ajax({
         url:"search.php",
         method:"POST",
         data:{action:action,fname:fname,program:program},
         success:function(data){
          alert(data);
         }
       });
    }
  })
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