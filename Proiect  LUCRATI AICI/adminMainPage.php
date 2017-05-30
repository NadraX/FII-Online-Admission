<?php

        function nrFormulare($tip)
        {
            $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
            $s = oci_parse($c, " begin  select count(f.id) into :bv from formular f 
                                       join detalii_aplicare da on f.detaliiaplicare_id=da.id where da.tip_aplicare = '$tip'; end;");
            oci_bind_by_name($s, ":bv", $v, 10);
            oci_execute($s);
            oci_close($c);
            return $v;
        }

        function nrIntrebari()
        {
            $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
            $s = oci_parse($c, " begin  select count(id) into :bv from intrebare; end; ");
            oci_bind_by_name($s, ":bv", $v, 10);
            oci_execute($s);
            oci_close($c);
            return $v;
        }

        function getNume($id_formular)
        {
            $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
            $s = oci_parse($c, " begin  select dpc.nume into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
            oci_bind_by_name($s, ":bv", $v, 100);
            oci_execute($s);
            oci_close($c);
            return $v;
        }

function getPrenume($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.prenume into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getInitialaTata($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.initiala_tata into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getPrenumeTata($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.prenume_tata into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getPrenumeMama($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.prenume_mama into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getStareCivila($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.starecivila into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSex($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.sex into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNationalitate($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.nationalitate into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getEtnie($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.etnie into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}
function getLimbaMaterna($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.limba_materna into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getTelefon($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.telefon into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getEmail($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.email into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDataDay($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dpc.data_nasterii,'DD') into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDataMonth($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dpc.data_nasterii,'Month') into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getDataYear($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dpc.data_nasterii,'YYYY') into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getCNP($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.cnp into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}


function getTipBuletin($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.tip_buletin into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getSerieBuletin($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.serie_buletin into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNumarBuletin($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.numar_buletin into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinEliberatDe($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.buletin_eliberat_de into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}


function getBuletinDay($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dpc.buletin_data_eliberarii,'DD') into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinMonth($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dpc.buletin_data_eliberarii,'Month') into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getBuletinYear($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select to_char(dpc.buletin_data_eliberarii,'YYYY') into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}


function getStrada($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.strada into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrStrada($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.numar_domiciliu into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNrBloc($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.bloc_domiciliu into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getApartament($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.apartament_domiciliu into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getMaterieTest($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select da.proba_concurs into :bv from detalii_aplicare da
                                                 join formular f on f.detaliiaplicare_id=da.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getNumeLiceu($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select i.nume into :bv from institutie i
                                                 join pregatiri_anterioare pa on i.id=pa.institutie_id
                                                 join formular f on f.id=pa.formular_id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getCodPostal($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.cod_postal_domiciliu into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getLocalitate($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.localitate into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getJudet($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.judet into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}

function getTara($id_formular)
{
    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
    $s = oci_parse($c, " begin  select dpc.tara into :bv from date_personale_candidat dpc
                                                 join formular f on f.date_personale_candidat_id=dpc.id
                                                 where f.id='$id_formular'; end; ");
    oci_bind_by_name($s, ":bv", $v, 100);
    oci_execute($s);
    oci_close($c);
    return $v;
}
?>