<?php

    include 'updateBD.php';

    $v_idFormular=$_POST["idFormular"];

    $v_DataBuletinDay=$_POST["dataEliberariiDay"];
    $v_DataBuletinMonth=$_POST["dataEliberariiMonth"];
    $v_DataBuletinYear=$_POST["dataEliberariiYear"];

    $v_DataDay=$_POST["dataNasteriiDay"];
    $v_DataMonth=$_POST["dataNasteriiMonth"];
    $v_DataYear=$_POST["dataNasteriiYear"];

    $v_Numele_De_Familie=$_POST["numeDeFamilie"];
    $v_Prenume=$_POST["prenume"];
    $v_PrenumeMama=$_POST["prenumeMama"];
    $v_PrenumeTata=$_POST["prenumeTata"];
    $v_initialaTata=$_POST["initialaTata"];
    $v_stareCivila=$_POST["stareCivila"];
    $v_sex=$_POST["sex"];
    $v_nationalitate=$_POST["nationalitate"];
    $v_etnie=$_POST["etnie"];
    $v_limbaMaterna=$_POST["limbaMaterna"];
    $v_nrDeTelefon=$_POST["nrDeTelefon"];
    $v_email=$_POST["email"];
    $v_cnp=$_POST["cnp"];
    $v_tipBuletin=$_POST["tipBuletin"];
    $v_serieBuletin=$_POST["serieBuletin"];
    $v_nrBuletin=$_POST["nrBuletin"];
    $v_eliberatDe=$_POST["eliberatDe"];
    $v_liceuNume=$_POST["liceuNume"];
    $v_proba=$_POST["proba"];
    $v_localitate=$_POST["localitate"];
    $v_judet=$_POST["judet"];
    $v_tara=$_POST["tara"];
    $v_codPostal=$_POST["codPostal"];


    updateNume($v_idFormular,$v_Numele_De_Familie);
    updatePrenume($v_idFormular,$v_Prenume);
    updatePrenumeMama($v_idFormular,$v_PrenumeMama);
    updatePrenumeTata($v_idFormular,$v_PrenumeTata);
    updateInitialaTata($v_idFormular,$v_initialaTata);
    updateStareCivila($v_idFormular,$v_stareCivila);
    updateSex($v_idFormular,$v_sex);
    updateNationalitate($v_idFormular,$v_nationalitate);
    updateEtnie($v_idFormular,$v_etnie);
    updateLimbaMaterna($v_idFormular,$v_limbaMaterna);
    updateTelefon($v_idFormular,$v_nrDeTelefon);
    updateEmail($v_idFormular,$v_email);
    updateCNP($v_idFormular,$v_cnp);
    updateTipBuletin($v_idFormular,$v_tipBuletin);
    updateSerieBuletin($v_idFormular,$v_serieBuletin);
    updateNumarBuletin($v_idFormular,$v_nrBuletin);
    updateBuletinEliberatDe($v_idFormular,$v_eliberatDe);
    updateNumeLiceu($v_idFormular,$v_liceuNume);
    updateMaterieTest($v_idFormular,$v_proba);
    updateLocalitate($v_idFormular,$v_localitate);
    updateJudet($v_idFormular,$v_judet);
    updateTara($v_idFormular,$v_tara);
    updateCodPostal($v_idFormular,$v_codPostal);

    updateDataNasterii($v_idFormular,$v_DataDay,$v_DataMonth,$v_DataYear);
    updateDataBuletin($v_idFormular,$v_DataBuletinDay,$v_DataBuletinMonth,$v_DataBuletinYear);

    validare($v_idFormular);

    header('Location: administrator.php?success=1');




?>