<?php
include "exemplu.php";
    
if($_POST['Submit'] == 'Register')
{
   $v_Id = $_POST["Id"];
     $vID = IDValidare($v_Id);
	 
	$v_Filiera = $_POST["Filiera"];
	  $vFiliera = FilieraValidare($v_Filiera);
	
	$v_Profil = $_POST["Profil"];
	  $vProfil = ProfilValidare($v_Profil);
	
	$v_Specializare = $_POST["Specializare"];
	  $vSpecializare = SpecializareValidare($v_Specializare);
	  
	$v_An_Absolvire = $_POST["An_Absolvire"];
	  $vAn_Absolvire = An_AbsolvireValidare($v_An_Absolvire);  
	  
	$v_Locatie_Id = $_POST["Locatie_Id"];
	  $vLocatie_Id = Locatie_IdValidare($v_Locatie_Id);  
	  
    $v_Pregatiri_Anterioar_Id = $_POST["Pregatiri_Anterioar_Id"];
	  $vPregatiri_Anterioar_Id = Pregatiri_Anterioar_IdValidare($v_Pregatiri_Anterioar_Id);

    $v_Data_Inceput = $_POST["Data_Inceput"];
	$v_Data_Sfarsit = $_POST["Data_Sfarsit"];
	  $vData_Inceput = Data_InceputValidare($v_Data_Inceput,$v_Data_Sfarsit);	  
	  $vData_Sfarsit = Data_SfarsitValidare($v_Data_Inceput,$v_Data_Sfarsit);
	
    if($vID==1 && $vFiliera==1 && $vProfil==1 && $vSpecializare==1 &&  $vAn_Absolvire==1 && $vLocatie_Id==1 && $vPregatiri_Anterioar_Id==1 && $vData_Inceput==1 && $vData_Sfarsit==1) 
		echo "Bun";
    else 
		echo "NuBun";
}
?>