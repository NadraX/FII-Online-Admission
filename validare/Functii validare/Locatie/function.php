
<?php
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
