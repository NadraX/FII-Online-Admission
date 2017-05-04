<?php

function validPrenumeMama($p_prenume_mama)
{
    if (!$p_prenume_mama)
    {
        return false;
    }
    else if (!preg_match('/^[a-zA-Z ]*$/', $p_prenume_mama))
    {
        return false;
    }
    return true;
}
?>