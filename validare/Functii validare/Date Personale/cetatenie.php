<?php

function validCetatetnie($p_cetatenie)
{
    if (!$p_cetatenie)
    {
        return false;
    }
    else if (!preg_match('/^romana|maghiara|rusa|basarabeana|asiatica|africana|americana$/', $p_cetatenie))
    {
        return false;
    }
    return true;
}

?>