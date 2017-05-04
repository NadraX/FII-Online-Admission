<?php
include "exemplu.php";
    
if($_POST['Submit'] == 'Register')
{
    
   $id =$_POST["ID"];
   $numar = $_POST["Numar"];
   $bloc = $_POST["Bloc"];
   $etaj = $_POST["Etaj"];
   $apartament = $_POST["Apartament"];
   $cod_postal = $_POST["Cod_Postal"];
   $locatie = $_POST["Locatie_Id"];
   
     $v = validare_domiciliu($id,$numar,$bloc,$etaj,$apartament,$cod_postal,$locatie);
    if($v==1) echo "Bun";
	else
		 if($v==2) echo "Id-ul introdus este incorect; el trebuie sa contina doar cifre.";
		 else
			 if($v==3) echo "Numarul introdus este incorect; el trebuie sa contina doar cifre.";
		   	else
				if($v==4)  echo "Nu ati introdus corect blocul; el trebuie sa contina fie litere, fie cifre.";
			else
				 if($v==5) echo "Nu ati introdus corect etajul; el trebuie sa contina fie litere, fie cifre.";
				else
					 if($v==6) echo "Nu ati introdus corect apartamentul; el trebuie sa contina doar cifre.";
					else
						 if($v==7) echo "Nu ati introdus corect codul postal; el trebuie sa contina doar cifre si dimensiunea sa fie egala cu 6."; 
						else
							if($v==8) echo "Nu ati introdus corect apartamentul; el trebuie sa contina doar cifre.";
}
?>

