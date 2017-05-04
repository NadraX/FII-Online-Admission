<?php
    function validareMedieBac($input){
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return -1;

        if($input >= 6 and $input <= 10)
            return 1;

        return 0;
    }

    function validareNotaMatematica($input){
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return -1;
            
        if($input > 0 and $input <= 10)
            return 1;

        return 0;
    }

    function validareProbaAlegere($input){
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return -1;
            
        if($input > 0 and $input <= 10)
            return 1;

        return 0;
    }

    function validareNotaConcurs($input){
        if(ctype_digit(str_replace(array(".", ","), '', $input)) == 0)
            return -1;
            
        if($input > 0 and $input <= 10)
            return 1;

        return 0;
    }

?>