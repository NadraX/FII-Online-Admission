<?php

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

?>