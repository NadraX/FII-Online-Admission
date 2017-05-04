<?php

function validareId($input)
{
    if($input < 0) return "Id-ul trebuie sa fie pozitiv!";
    if(ctype_digit($input) == 0) return "Id-ul liceului nu este valid!";
    return "corect";
}

function validareNume($nume)
{
    if(ctype_alpha($nume) == 0) return "Numele trebuie sa contina doar litere!";
    if(strlen($nume) > 100) return "Dimensiunea numelui a depasit limita de caractere admisa!";
    return "corect";
}

function validareProfil($Profil)
{
    if(ctype_alpha(str_replace(array(' ', '-'), '', $Profil)) == 0) return "Profilul trebuie sa contina doar litere!";
    if(strlen($Profil) > 20) return "Dimensiunea profilului a depasit limita de caractere admisa!";
    return "corect";
}

function validareDiplomaNr($Diploma_Nr)
{
    if(ctype_digit($Diploma_Nr) == 0) return "Seria diplomei de bac nu este valida!";
    return "corect";
}

function validareLocatieId($Locatie_Id)
{
    if(ctype_digit($Locatie_Id) == 0) return "Id-ul locatiei nu este valid!!";
    return "corect";
}

function validareData($Data_Inceput, $Diploma_Data_Eliberarii, $Data_Sfarsit)
{
    $data_curenta = "2018-01-01";
    
    if($Data_Inceput > $data_curenta or $Diploma_Data_Eliberarii > $data_curenta or $Data_Sfarsit > $data_curenta or $Data_Inceput > $Data_Sfarsit or $Data_Sfarsit > $Diploma_Data_Eliberarii) return "Formatul datei nu este valid!";
    return "corect";
}

function validareDiplomaSerie($Diploma_Serie)
{
    if(ctype_alpha($Diploma_Serie) == 0) return "Seria diplomei de bac nu este valida!";
    if(strlen($Diploma_Serie) > 1) return "Dimensiunea seriei la diploma de bac nu este valida!";
    return "corect";
}

function validareDiplomaEmisa($Diploma_Emisa)
{
    if(ctype_alpha($Diploma_Emisa) == 0) return "Institutia care a emis diploa nu este valida!";
    
    if(strlen($Diploma_Emisa) > 30) return "Dimensiunea institutiei care a emis diploma a depasit limita de caractere admisa!";
    return "corect";
}

function validareLiceu($input, $nume, $Data_Inceput, $Data_Sfarsit, $Profil, $Diploma_Serie, $Diploma_Nr, $Diploma_Emisa, $Diploma_Data_Eliberarii, $Locatie_Id)
{
    
    $id = validareId($input);
   
    $name = validareNume($nume);
    
    $profile = validareProfil($Profil);
   
    $dipl_nr = validareDiplomaNr($Diploma_Nr);
    
    $loc_id = validareLocatieId($Locatie_Id);
   
    $val_data = validareData($Data_Inceput, $Diploma_Data_Eliberarii, $Data_Sfarsit);
   
    $dipl_ser = validareDiplomaSerie($Diploma_Serie);
    
    $dipl_emis = validareDiplomaEmisa($Diploma_Emisa);
    
    
    if($id == "corect" and $name == "corect" and $profile == "corect" and $dipl_nr == "corect" and $loc_id == "corect" and $val_data == "corect" and $dipl_ser == "corect" and $dipl_emis == "corect") return "Inregistrare reusita!";
    
    else
    {
         echo "ID: ".$id."<br>";
         echo "Nume: ".$name."<br>";
         echo "Profil: ".$profile."<br>";
         echo "Diploma Nr: ".$dipl_nr."<br>";
         echo "Id-ul locatiei: ".$loc_id."<br>";
         echo "Date introduse: ".$val_data."<br>";
         echo "Diploma Serie: ".$dipl_ser."<br>";
         echo "Diploma Emisa: ".$dipl_emis."<br>";
    }
}


?>