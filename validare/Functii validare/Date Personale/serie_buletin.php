<?php

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
?>