<?php

function validPrenumeTata($p_prenume_tata)
{
    if (!$p_prenume_tata)
    {
        return false;
    }
    else if (!preg_match('/^[a-zA-Z ]*$/', $p_prenume_tata))
    {
        return false;
    }
    return true;
}
?>