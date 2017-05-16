
<?php
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
?>
