<?php
    function validareNationala($input){
        if($input == "Da" or $input == "Nu")
            return 1;

        else return 0;
    }

    function validareDisciplina($input){
        if($input == "Matematica" or $input == "Informatica" or $input == "Fizica" or $input == "Chimie")
            return 1;

        else return 0;
    }

    function validareAn($input){
        $data = gmdate('Y');

        if(ctype_digit($input) == 0)
            return -1;

        if($input >= 1950 and $input <= $data)
            return 1;

        else return 0;
    }

    function validarePremiulObtinut($input){
        if($input == "Locul 1" or $input == "Locul 2" or $input == "Locul 3")
            return 1;

        else return 0;
    }
?>