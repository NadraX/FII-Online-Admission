<?php

function exempluValidate(String $input)
{
	if(strlen($input) > 4 && strlen($input)<16) 
	return 1;
else return 0;
}


?>