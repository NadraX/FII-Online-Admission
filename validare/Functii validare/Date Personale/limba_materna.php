<?php

function validLimbaMaterna($p_limba)
{
    if (!$p_limba)
    {
        return false;
    }
    else if (!preg_match('/^romana|maghiara|rusa|engleza|franceza|spaniola|italiana|portugheza|japoneza$/', $p_limba))
    {
        return false;
    }
    return true;
}

?>