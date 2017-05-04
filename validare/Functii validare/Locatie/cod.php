<?php
include "exemplu1.php";
    
if($_POST['Submit'] == 'Register')
{
    
   $id =$_POST["ID"];
   $tara = $_POST["Tara"];
   $judet = $_POST["Judet"];
   $localitate = $_POST["Localitate"];
   $strada = $_POST["Strada"];

   
     $v = validare_locatie($id,$tara,$judet,$localitate,$strada);
    if($v==1) echo "Bun";
	else
		 if($v==2) echo "Id-ul introdus este incorect; el trebuie sa contina doar cifre.";
		 else
			 if($v==3) echo "Tara introdusa nu este corecta, ea trebuie sa contina doar litere.";
		   	else
				if($v==4)  echo "Nu ati introdus corect judetul ; el trebuie sa contina doar litere.";
			else
				 if($v==5) echo "Nu ati introdus corect localitatea; ea trebuie sa contina doar litere.";
				else
					 if($v==6) echo "Nu ati introdus corect strada; ea trebuie sa contina doar litere.";
					
}
?>

   