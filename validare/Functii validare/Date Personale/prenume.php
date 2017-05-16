<?php

function validPrenume($p_prenume)
{
    if (!$p_prenume)
    {
        return false;
    }
    else if (!preg_match('/^[a-zA-Z ]*$/', $p_prenume))
    {
        return false;
    }
    return true;
}
?>