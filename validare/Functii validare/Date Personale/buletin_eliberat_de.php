<?php

function validBuletinEliberatDe($p_eliberat_de)
{
    if (!$p_eliberat_de)
    {
        return false;
    }
    else if (!preg_match('/^[a-zA-Z ]*$/', $p_eliberat_de))
    {
        return false;
    }
    return true;
}
?>