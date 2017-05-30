<?php



function updateNume($id_formular,$nume)
{

    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into date_personale_candidat dpc
                                using formular f 
                                on (f.date_personale_candidat_id=dpc.id)
                                when matched then 
                                update set dpc.nume='$nume'  where f.id='$id_formular'");
    oci_execute($s);
    oci_close($c);
}

function updatePrenume($id_formular,$prenume)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.prenume='$prenume'
                                                 where f.id='$id_formular'");

    oci_execute($s);
    oci_close($c);

}

function updateInitialaTata($id_formular,$initialaTata)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.initiala_tata='$initialaTata'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updatePrenumeTata($id_formular,$prenumeTata)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.prenume_tata='$prenumeTata'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updatePrenumeMama($id_formular,$prenumeMama)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.prenume_mama='$prenumeMama'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateStareCivila($id_formular,$stareCivila)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.starecivila='$stareCivila'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateSex($id_formular,$sex)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.sex='$sex'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateNationalitate($id_formular,$nationalitate)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.nationalitate='$nationalitate'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateEtnie($id_formular,$etnie)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.etnie='$etnie'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}
function updateLimbaMaterna($id_formular,$limbaMaterna)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.limba_materna='$limbaMaterna'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateTelefon($id_formular,$telefon)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.telefon='$telefon'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateEmail($id_formular,$email)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.email='$email'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateDataNasterii($id_formular,$dataDay,$dataMonth,$dataYear)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.data_nasterii=date '$dataYear-$dataMonth-$dataDay'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}



function updateCNP($id_formular,$cnp)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.cnp='$cnp'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}


function updateTipBuletin($id_formular,$tipBuletin)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.tip_buletin='$tipBuletin'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateSerieBuletin($id_formular,$serieBuletin)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.serie_buletin='$serieBuletin'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateNumarBuletin($id_formular,$numarBuletin)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.numar_buletin='$numarBuletin'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateBuletinEliberatDe($id_formular,$buletinEliberatDe)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.buletin_eliberat_de='$buletinEliberatDe'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateDataBuletin($id_formular,$dataDay,$dataMonth,$dataYear)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.buletin_data_eliberarii=date '$dataYear-$dataMonth-$dataDay'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}


function updateStada($id_formular,$strada)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.strada='$strada'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateNrStada($id_formular,$nrStrada)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.numar_domiciliu='$nrStrada'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateNrBloc($id_formular,$nrBloc)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.bloc_domiciliu='$nrBloc'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateApartament($id_formular,$apartament)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.apartament_domiciliu='$apartament'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateMaterieTest($id_formular,$materieTest)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into detalii_aplicare da
                                                 using formular f 
                                                 on (f.detaliiaplicare_id=da.id)
                                                 when matched then
                                                 update set da.proba_concurs='$materieTest'
                                                 where f.id='$id_formular'");

    oci_execute($s);
    oci_close($c);

}

function updateNumeLiceu($id_formular,$numeLiceu)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into institutie i
                                    using (select  pa.institutie_id as i_id
                                             from  pregatiri_anterioare pa
                                             join formular f
                                             on f.id=pa.formular_id
                                             where   f.id='$id_formular') src
                                             on (i.id = src.i_id)
                                             when matched then
                                             update set i.nume_institutie = '$numeLiceu' ");

    oci_execute($s);
    oci_close($c);

}

function updateCodPostal($id_formular,$codPostal)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.cod_postal_domiciliu='$codPostal'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateLocalitate($id_formular,$localitate)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.localitate='$localitate'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateJudet($id_formular,$judet)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.judet='$judet'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function updateTara($id_formular,$tara)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " merge into  date_personale_candidat dpc
                                                 using formular f 
                                                 on (f.date_personale_candidat_id=dpc.id)
                                                 when matched then
                                                 update set dpc.tara='$tara'
                                                 where f.id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}

function validare($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " update formular set validat=1 where id='$id_formular' ");

    oci_execute($s);
    oci_close($c);

}
?>