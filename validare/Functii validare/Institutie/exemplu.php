<?php

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

?>