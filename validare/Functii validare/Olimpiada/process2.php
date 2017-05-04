<?php
    include "Olimpiada (functie).php";
    
    if($_POST["Submit"] == "Validare")
    {
        $validareNa = $_POST["nationala"];
        $return_nationala = validareNationala($validareNa);
        if($return_nationala == 1)
            print "1. Camp valid";
        else print "1. Camp invalid sau necompletat";
        print '<br>';

        $validareDisc = $_POST["disciplina"];
        $return_concurs = validareDisciplina($validareDisc);
        if($return_concurs == 1)
            print "2. Camp valid";
        else print "2. Camp invalid sau necompletat";
        print '<br>';

        $validareYear = $_POST["an"];
        $return_an = validareAn($validareYear);
        if($return_an == 1)
            print "3. Camp valid";
        else if ($return_an == -1 or $return_an == 0)
            print "3. Camp invalid sau necompletat";
        print '<br>';

        $validarePremiu = $_POST["premiu"];
        $return_premiu = validarePremiulObtinut($validarePremiu);
        if($return_premiu == 1)
            print "4. Camp valid";
        else print "4. Camp invalid sau necompletat";
    }
?>