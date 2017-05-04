<?php

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

?>