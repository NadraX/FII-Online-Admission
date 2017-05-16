<?php

function validEtnie($p_etnie)
{
    if (!$p_etnie)
    {
        return false;
    }
    else if (!preg_match('/^roman|rom|maghiar|britanic|bulgar|italian|slav|slovac|spaniol|sarb|suedez$/', $p_etnie))
    {
        return false;
    }
    return true;
}

?>