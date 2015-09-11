<?php

   $first_name = "Katrin";
   $last_name = "Voroshilova"

   echo $first_name." ".$last_name
   
   
   
?>

<br>

<?php

   $age = 5;
   // kui on väiksem kui 18, siis alaealine
   // kui on suurem siis täisealine
   if($age < 18) {
	   //tõeline
	   echo "alaealine";
	   
	 } else {
		//väärt
        echo "täisealine"		
	     
	   
   }

   ?>
   
   <br>
   
 <?php
 
 for($i = 0; $i < $age; $i = +1) {
	 
	 
	 //see mida korratakse
	 echo "palju.$i.";
	 
	 
 }

 
 echo"õnne";
 
 ?>
 
  <br>
  
  <?php
  
  
  // kuupäev kujul: Friday, 11.09.2015
  echo(date("l"));
  
  ?>
  
  
 