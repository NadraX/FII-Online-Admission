<?php

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

?>