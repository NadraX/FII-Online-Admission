<?php

function validBuletinDataEliberarii($p_data)
{
    //If in dd/mm/yyyy format
    if (preg_match("^\d{2}/\d{2}/\d{4}^", $p_data))
    {
        //Extract date into array
        $date_array = explode('/', $p_data);

        //If it is not a date
        if(! checkdate($date_array[1], $date_array[0], $date_array[2]))
        {
            return false;
        }
    }
    //If not in dd/mm/yyyy format
    else
    {
        return false;
    }

    return true;
}
