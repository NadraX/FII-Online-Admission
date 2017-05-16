<?php

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

?>