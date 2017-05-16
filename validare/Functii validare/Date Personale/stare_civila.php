<?php

function validStareCivila($p_stare_civila)
{
    if (!$p_stare_civila)
    {
        return false;
    }
    else if (!preg_match('/^casatorit|necasatorit$/', $p_stare_civila))
    {
        return false;
    }
    return true;
}

?>