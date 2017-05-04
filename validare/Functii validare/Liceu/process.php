<?php
include "form.php";
    
if($_POST['Submit'] == 'Register')
{
    
   $input = $_POST["Id"];
   $nume = $_POST["Nume"];
   $Data_Inceput = $_POST["Data_Inceput"];
   $Data_Sfarsit = $_POST["Data_Sfarsit"];
   $Profil = $_POST["Profil"];
   $Diploma_Serie = $_POST["Diploma_Serie"];
   $Diploma_Nr = $_POST["Diploma_Nr"];
   $Diploma_Emisa = $_POST["Diploma_Emisa"];
   $Diploma_Data_Eliberarii = $_POST["Diploma_Data_Eliberarii"];
   $Locatie_Id = $_POST["Locatie_Id"];
    $v = validareLiceu($input, $nume, $Data_Inceput, $Data_Sfarsit, $Profil, $Diploma_Serie, $Diploma_Nr, $Diploma_Emisa, $Diploma_Data_Eliberarii, $Locatie_Id);
    echo $v;
   

}
?> 