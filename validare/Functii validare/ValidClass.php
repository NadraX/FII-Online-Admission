<?php

class Validare()
{
    
function validBuletinDataEliberarii($p_data)
{
    //If in dd/mm/yyyy format
    if (preg_match("^\d{2}/\d{2}/\d{4}^", $p_data))
    {
        //Extract date into array
        $date_array = explode('/', $p_data);

        //If it is not a date
        if(! checkdate($date_array[1], $date_array[0], $date_array[2]))
        {
            return false;
        }
    }
    //If not in dd/mm/yyyy format
    else
    {
        return false;
    }

    return true;
}

function validBuletinEliberatDe($p_eliberat_de)
{
    if (!$p_eliberat_de)
    {
        return false;
    }
    else if (!preg_match('/^[a-zA-Z ]*$/', $p_eliberat_de))
    {
        return false;
    }
    return true;
}

function validCetatetnie($p_cetatenie)
{
    if (!$p_cetatenie)
    {
        return false;
    }
    else if (!preg_match('/^romana|maghiara|rusa|basarabeana|asiatica|africana|americana$/', $p_cetatenie))
    {
        return false;
    }
    return true;
}

function validCNP($p_cnp) {
    // CNP must have 13 characters
    if(strlen($p_cnp) != 13) {
        return false;
    }
    $cnp = str_split($p_cnp);
    unset($p_cnp);
    $hashTable = array( 2 , 7 , 9 , 1 , 4 , 6 , 3 , 5 , 8 , 2 , 7 , 9 );
    $hashResult = 0;
    // All characters must be numeric
    for($i=0 ; $i<13 ; $i++) {
        if(!is_numeric($cnp[$i])) {
            return false;
        }
        $cnp[$i] = (int)$cnp[$i];
        if($i < 12) {
            $hashResult += (int)$cnp[$i] * (int)$hashTable[$i];
        }
    }
    unset($hashTable, $i);
    $hashResult = $hashResult % 11;
    if($hashResult == 10) {
        $hashResult = 1;
    }
    // Check Year
    $year = ($cnp[1] * 10) + $cnp[2];
    switch( $cnp[0] ) {
        case 1  : case 2 : { $year += 1900; } break; // cetateni romani nascuti intre 1 ian 1900 si 31 dec 1999
        case 3  : case 4 : { $year += 1800; } break; // cetateni romani nascuti intre 1 ian 1800 si 31 dec 1899
        case 5  : case 6 : { $year += 2000; } break; // cetateni romani nascuti intre 1 ian 2000 si 31 dec 2099
        case 7  : case 8 : case 9 : {                // rezidenti si Cetateni Straini
        $year += 2000;
        if($year > (int)date('Y')-14) {
            $year -= 100;
        }
    } break;
        default : {
            return false;
        } break;
    }
    return ($year > 1800 && $year < 2099 && $cnp[12] == $hashResult);
}

function checkData_Nasterii($dataNastere) {
    if(strlen($dataNastere)!=10)
        return 0;
    if(substr($dataNastere,-5,1)!='.')
        return 0;
    if(substr($dataNastere,-8,1)!='.')
        return 0;
    if(substr($dataNastere,-4,4)<1950 || substr($dataNastere,-4,4)>2010)
        return 0;
    if(substr($dataNastere,-7,2)!= '01' && substr($dataNastere,-7,2)!= '02' && substr($dataNastere,-7,2)!= '03' && substr($dataNastere,-7,2)!= '04' && 
       substr($dataNastere,-7,2)!= '05' && substr($dataNastere,-7,2)!= '06' && substr($dataNastere,-7,2)!= '07' && substr($dataNastere,-7,2)!= '08' && 
       substr($dataNastere,-7,2)!= '09' && substr($dataNastere,-7,2)!= '10' && substr($dataNastere,-7,2)!= '11' && substr($dataNastere,-7,2)!= '12')
          return 0;
    if(substr($dataNastere,-7,2) == '01' || substr($dataNastere,-7,2) == '03' || substr($dataNastere,-7,2) == '05' || substr($dataNastere,-7,2) == '07' || 
       substr($dataNastere,-7,2) == '08' || substr($dataNastere,-7,2) == '10' || substr($dataNastere,-7,2) == '12'){
        if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '31')
            return 0;
    }
    if(substr($dataNastere,-7,2) == '04' || substr($dataNastere,-7,2) == '06' || substr($dataNastere,-7,2) == '09' || substr($dataNastere,-7,2) == '11') {
        if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '30')
            return 0;
    }
    if(substr($dataNastere,-7,2) == '02'){
        if(an_bisect(intval(substr($dataNastere,-4,4)))){
            if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '29')
                return 0;
        }
        else 
            if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '28')
                return 0;
    }
        
        
    return 1;
}


function an_bisect($year)
{
    return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
}

function validEmail($p_email)
{
    if (!$p_email) {
        return false;
    } else if (!preg_match('/(?i)[a-z0-9\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/', $p_email)) {
        return false;
    }
    return true;
}

function validEtnie($p_etnie)
{
    if (!$p_etnie)
    {
        return false;
    }
    else if (!preg_match('/^roman|rom|maghiar|britanic|bulgar|italian|slav|slovac|spaniol|sarb|suedez$/', $p_etnie))
    {
        return false;
    }
    return true;
}
    
function validInitialaTata($p_initTata)
{
    if(strlen($p_initTata) != 1) {
        return false;
    }
    else if (!preg_match('/^[A-Z]$/', $p_initTata))
    {
        return false;
    }
    return true;
}
    
function validLimbaMaterna($p_limba)
{
    if (!$p_limba)
    {
        return false;
    }
    else if (!preg_match('/^romana|maghiara|rusa|engleza|franceza|spaniola|italiana|portugheza|japoneza$/', $p_limba))
    {
        return false;
    }
    return true;
}

function validNumarBuletin($p_nr)
{
    if(!is_numeric($p_nr) || strlen($p_nr) < 6 || strlen($p_nr) > 6) {
        return false;
    } else {
        if(preg_match("/^[0-9]{6}$/", $p_nr)) {
            return true;
        } else {
            return false;
        }
    }
}

function validNume($p_nume)
{
    if (!$p_nume)
    {
       return false;
    }
    else if (!preg_match('/^[a-zA-Z ]*$/', $p_nume))
    {
        return false;
    }
    return true;
}

function validSerieBuletin($p_serie)
{
    if (!$p_serie)
    {
        return false;
    }
    else if (!preg_match('/^[A-Z]{2}$/', $p_serie))
    {
        return false;
    }
    return true;
}

function validSex($p_sex)
{
    if(strlen($p_sex) != 1) {
        return false;
    }
    else if (!preg_match('/^M|F$/', $p_sex))
    {
        return false;
    }
    return true;
}

function validStareCivila($p_stare_civila)
{
    if (!$p_stare_civila)
    {
        return false;
    }
    else if (!preg_match('/^casatorit|necasatorit$/', $p_stare_civila))
    {
        return false;
    }
    return true;
}

function validTelefon($p_nr)
{
    if(!is_numeric($p_nr) || strlen($p_nr) < 10 || strlen($p_nr) > 10) {
        return false;
    } else {
        if(preg_match("/^07[0-9]{8}$/", $p_nr)) {
            return true;
        } else {
            return false;
        }
    }
}

function check_nationalitate($nationalitate) {
    if($nationalitate != 'daneza' && $nationalitate != 'engleza' && $nationalitate != 'estoniana' && $nationalitate != 'finlandeza' && 
      $nationalitate != 'islandeza' && $nationalitate != 'irlandeza' && $nationalitate != 'letoniana' && $nationalitate != 'lituaniana' && 
      $nationalitate != 'nord irlandeza' && $nationalitate != 'norvegiana' && $nationalitate != 'scotiana' && $nationalitate != 'suedeza' && 
      $nationalitate != 'britanica' && $nationalitate != 'galeza' && $nationalitate != 'austriaca' && $nationalitate != 'belgiana' && 
      $nationalitate != 'franceza' && $nationalitate != 'germana' && $nationalitate != 'olandeza' && $nationalitate != 'elvetiana' && 
      $nationalitate != 'albaneza' && $nationalitate != 'croata' && $nationalitate != 'cipriota' && $nationalitate != 'greca' && 
      $nationalitate != 'Italiana' && $nationalitate != 'portugheza' && $nationalitate != 'sarba' && $nationalitate != 'slovena' && 
      $nationalitate != 'spaniola' && $nationalitate != 'belarusa' && $nationalitate != 'bulgara' && $nationalitate != 'ceha' && 
      $nationalitate != 'maghiara' && $nationalitate != 'poloneza' && $nationalitate != 'romana' && $nationalitate != 'rusa' && 
      $nationalitate != 'slovaca' && $nationalitate != 'ucraineana' && $nationalitate != 'canadiana' && $nationalitate != 'mexicana' && 
      $nationalitate != 'americana' && $nationalitate != 'cubaneza' && $nationalitate != 'guatemaleza' && $nationalitate != 'jamaicana' && 
      $nationalitate != 'argentiniana' && $nationalitate != 'boliviana' && $nationalitate != 'braziliana' && $nationalitate != 'chiliana' && 
      $nationalitate != 'columbiana' && $nationalitate != 'ecuadoriana' && $nationalitate != 'paraguayana' && $nationalitate != 'peruana' && 
      $nationalitate != 'uruguayana' && $nationalitate != 'venezueleana' && $nationalitate != 'georgiana' && $nationalitate != 'iraniana' && 
      $nationalitate != 'iraqiana' && $nationalitate != 'israeliana' && $nationalitate != 'iordaniana' && $nationalitate != 'kuweitiana' && 
      $nationalitate != 'libaneza' && $nationalitate != 'palestiniana' && $nationalitate != 'din Arabia de Sud' && $nationalitate != 'siriana' && 
      $nationalitate != 'turca' && $nationalitate != 'yemeneana' && $nationalitate != 'yemenita' && $nationalitate != 'afgana' && 
      $nationalitate != 'din Banglades' && $nationalitate != 'indiana' && $nationalitate != 'cazaca' && $nationalitate != 'nepaleza' && 
      $nationalitate != 'pakistaneza' && $nationalitate != 'sri lankez' && $nationalitate != 'chineza' && $nationalitate != 'japoneza' && 
      $nationalitate != 'mongoleza' && $nationalitate != 'nord koreana' && $nationalitate != 'sud koreana' && $nationalitate != 'taiwaneza' && 
      $nationalitate != 'cambodgiana' && $nationalitate != 'indoneziana' && $nationalitate != 'laotiana' && $nationalitate != 'lao' &&
      $nationalitate != 'malaeziana' && $nationalitate != 'birmaneza' && $nationalitate != 'filipineza' && $nationalitate != 'singaporeza' &&
      $nationalitate != 'tailandeza' && $nationalitate != 'vietnameza' && $nationalitate != 'australiana' && $nationalitate != 'fijiana' &&
      $nationalitate != 'neo zeelandeza' && $nationalitate != 'algeriana' && $nationalitate != 'egipteana' && $nationalitate != 'ganaiana' &&
      $nationalitate != 'ivoriana' && $nationalitate != 'libaneza' && $nationalitate != 'marocana' && $nationalitate != 'nigeriana' &&
      $nationalitate != 'tunisiana' && $nationalitate != 'etiopiana' && $nationalitate != 'keniana' && $nationalitate != 'somaleza' &&
      $nationalitate != 'sudaneza' && $nationalitate != 'tanzaneza' && $nationalitate != 'ugandeza' && $nationalitate != 'angoleza' && 
      $nationalitate != 'botswaneza' && $nationalitate != 'congoleza' && $nationalitate != 'malagasa' && $nationalitate != 'mozambicana' && 
      $nationalitate != 'namibiana' && $nationalitate != 'sud African' && $nationalitate != 'zambiana' && $nationalitate != 'zimbabueana')
        return 0;
    
  
    return 1;
}
    
function validTipBuletin($p_tip)
{
    if (!$p_tip)
    {
        return false;
    }
    else if (!preg_match('/^[a-zA-Z.]*$/', $p_tip))
    {
        return false;
    }
    return true;
} 

 function validareMedieBac($input){
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return -1;

        if($input >= 6 and $input <= 10)
            return 1;

        return 0;
    }

    function validareNotaMatematica($input){
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return -1;
            
        if($input > 0 and $input <= 10)
            return 1;

        return 0;
    }

    function validareProbaAlegere($input){
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return -1;
            
        if($input > 0 and $input <= 10)
            return 1;

        return 0;
    }

    function validareNotaConcurs($input){
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return -1;
            
        if($input > 0 and $input <= 10)
            return 1;

        return 0;
    }
function validare_domiciliu($id,$numar,$bloc,$etaj,$apartament,$cod_postal,$locatie)
{
	if(!ctype_digit($id))
	return 2;
	if(!ctype_digit($numar))
	return 3;
	if(!ctype_alnum($bloc) || strlen($bloc) > 6  )
	return 4;
	if(!ctype_alnum($etaj) || strlen($etaj) > 6 )
	return 5;
	if(!ctype_digit($apartament))
	return 6;
	if(!ctype_digit($cod_postal) || $cod_postal>999999 || $cod_postal<111111)
		return 7;
	if(!ctype_digit($locatie))
		return 8;
	return 1;
}

function validateDate($date)
{
    $d = DateTime::createFromFormat('Y-m-d', $date);
    return $d && $d->format('Y-m-d') === $date;
}

function IDValidare(String $Id)
{
	if($Id>0) 
	    return 1;
    else 
		return 0;
}

function FilieraValidare(String $Filiera)
{
	if(strlen($Filiera)<=40 && ctype_alpha(str_replace(array(' ','-'),'',$Filiera))==1)
		if(strlen($Filiera)>0)
			return 1;
		else
			return 0;
	else
		return 0;
}

function ProfilValidare(String $Profil)
{
	if(strlen($Profil)<=10 && ctype_alpha(str_replace(array(' ','-','.'),'',$Profil))==1)
		if(strlen($Profil)>0)
			return 1;
		else
			return 0;
	else
		return 0;
}

function SpecializareValidare(String $Specializare)
{
	if(strlen($Specializare)<=55 && ctype_alpha(str_replace(array(' ','-','.'),'',$Specializare))==1)
		if(strlen($Specializare)>0)
			return 1;
		else
			return 0;
	else
		return 0;
}

function An_AbsolvireValidare(String $An_Absolvire)
{
	if($An_Absolvire <= 2018) 
		if($An_Absolvire >= 1980)
	        return 1;
		else 
			return 0;
    else
		return 0;
}

function Locatie_IdValidare(String $Locatie_Id)
{
	if($Locatie_Id > 0) 
	    return 1;
    else 
		return 0;
}

function Pregatiri_Anterioar_IdValidare(String $Pregatiri_Anterioar_Id)
{
	if($Pregatiri_Anterioar_Id > 0) 
	    return 1;
    else 
		return 0;
}

function Data_InceputValidare(String $Data_Inceput, String $Data_Sfarsit)
{
	if($Data_Inceput <= "2017-12-31")
        if($Data_Inceput >= "1980-01-01")
			if($Data_Inceput<$Data_Sfarsit)
				if(validateDate($Data_Inceput)==1 && validateDate($Data_Sfarsit)==1)
					return 1;
				else 
					return 0;
			else
				return 0;
		else
			return 0;
	else
		return 0;
}

function Data_SfarsitValidare(String $Data_Inceput, String $Data_Sfarsit)
{
	if($Data_Sfarsit <= "2017-12-31")
        if($Data_Sfarsit >= "1980-01-01")
			if($Data_Sfarsit>$Data_Inceput)
				if(validateDate($Data_Inceput)==1 && validateDate($Data_Sfarsit)==1)
					return 1;
				else 
					return 0;
			else
				return 0;
		else
			return 0;
	else
		return 0;
}
    
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
function validare_locatie($id,$tara,$judet,$localitate,$strada)
{
	if(!ctype_digit($id))
	return 2;
	if(!ctype_alpha($tara) || strlen($tara) >200)
	return 3;
	if(!ctype_alpha($judet) || strlen($judet) > 60 )
	return 4;
	if(!ctype_alpha($localitate) || strlen($localitate) > 100 )
	return 5;
	if(!ctype_alpha($strada) || strlen($strada)>30)
	return 6;
	return 1;
}
function validareNationala($input){
        if($input == "Da" or $input == "Nu")
            return 1;

        else return 0;
    }

function validareDisciplina($input){
        if($input == "Matematica" or $input == "Informatica" or $input == "Fizica" or $input == "Chimie")
            return 1;

        else return 0;
    }
    
function validareAn($input){
        $data = gmdate('Y');

        if(ctype_digit($input) == 0)
            return -1;

        if($input >= 1950 and $input <= $data)
            return 1;

        else return 0;
    }

function validarePremiulObtinut($input){
        if($input == "Locul 1" or $input == "Locul 2" or $input == "Locul 3")
            return 1;

        else return 0;
    }

}

?>