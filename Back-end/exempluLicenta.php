<?php

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


function validEmail($p_email)
{
    if (!$p_email) {
        return false;
    } else if (!preg_match('/(?i)[a-z0-9\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/', $p_email)) {
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
    

 function validareMedieBac($input){
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return -1;
        if($input >= 6 and $input <= 10)
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

?>