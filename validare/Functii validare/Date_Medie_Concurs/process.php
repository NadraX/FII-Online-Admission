
<?php
    include "Date_Medie_Concurs (functie).php";
    
    if($_POST["Submit"] == "Validare")
    {
        $validareBac = $_POST["medie_bac"];
        $return_bac = validareMedieBac($validareBac);
        if($return_bac == 1)
            print "1. Nota valida";
        else if($return_bac == -1)
            print "1. Nota invalida sau camp necompletat";
        else if($return_bac == 0)
            print "1. Nota invalida sau camp necompletat";
        print '<br>';

        $validareMatematica = $_POST["nota_mate"];
        $return_mate = validareNotaMatematica($validareMatematica);
        if($return_mate == -1)
            print "2. Nota invalida sau camp necompletat";
        else if ($return_mate == 1)
            print "2. Nota valida";
        else if ($return_mate == 0)
            print "2. Nota invalida sau camp necompletat";
        print '<br>';

        $validareProba = $_POST["proba_alegere"];
        $return_proba = validareNotaMatematica($validareProba);
        if($return_proba == -1)
            print "3. Nota invalida sau camp necompletat";
        else if ($return_proba == 1)
            print "3. Nota valida";
        else if ($return_proba == 0)
            print "3. Nota invalida sau camp necompletat";
        print '<br>';

        $validareConcurs = $_POST["concurs"];
        $return_concurs = validareNotaConcurs($validareConcurs);
        if($return_concurs == -1)
            print "4. Nota invalida sau camp necompletat";
        else if ($return_concurs == 1)
            print "4. Nota valida";
        else if ($return_concurs == 0)
            print "4. Nota invalida sau camp necompletat";
    }
?> 