<?php

function validTipBuletin($p_tip)
{
    if (!$p_tip)
    {
        return false;
    }
    else if (!preg_match('/^[a-zA-Z.]*$/', $p_tip))
    {
        return false;
    }
    return true;
}
?>