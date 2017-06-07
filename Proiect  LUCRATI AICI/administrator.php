<!DOCTYPE html>



<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script type="text/javascript">


    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#testimonial-slider").owlCarousel({
                items:2,
                itemsDesktop:[1000,1],
                itemsDesktopSmall:[979,1],
                itemsTablet:[768,1],
                pagination:true,
                navigation:false,
                navigationText:["",""],
                slideSpeed:9000,
                singleItem:false,
                autoPlay:false})});


        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">



    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <link rel="stylesheet" type="text/css" href="css/admin-style.css" />


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script type="text/javascript">



        $(document).ready(function () {



            $("#testimonial-slider").owlCarousel({

                items: 2,

                itemsDesktop: [1000, 1],

                itemsDesktopSmall: [979, 1],

                itemsTablet: [768, 1],

                pagination: true,

                navigation: false,

                navigationText: ["", ""],

                slideSpeed: 9000,

                singleItem: false,

                autoPlay: false



            });



            var $logo = $('#scroll');

            var $logo2 = $('#no-scroll');

            var $head2 = $('#header');



            $(document).scroll(function () {

                $head2.css({ display: $(this).scrollTop() < 50 ? "block" : "none" });

                $logo2.css({ display: $(this).scrollTop() < 50 ? "block" : "none" });

                $logo.css({ display: $(this).scrollTop() > 100 ? "block" : "none" });



            });



        });



    </script>



    <meta charset="UTF-8">



    <link href="css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="widt=device-width, initial-scale=1">



    <title>Administrator</title>

</head>



<body>

<div class="mare collapse navbar-collapse navbar nav-group nav-group--consistent">
    <div class="nav navbar-nav bar2">
        <ul style="widht:100%; height:40px; background-color:#3488CB;"></ul>
        <ul class="left-menu">
            <li class="lung"><a href="DespreFII.html">Despre FII</a></li>
            <li class="scurt"><a href="DespreFII.html">FII</a></li>
            <li><a href="paginaAdmitere.html">Admitere</a></li>
        </ul>
        <ul class="right-menu">
            <li><a href="IntrebariFrecvente.html">&#206;ntreb&#259;ri</a></li>
            <li><a href="contact.html" >Contact</a></li>
        </ul>
    </div>
    <a href="https://www.info.uaic.ro/bin/Main/" >
        <img id="no-scroll" class="sigla" src="imagini/sigla2.png" alt="sigla" />
        <img id="scroll" class="sigla" src="imagini/sigla2-Copy.png" alt="sigla" />
    </a>
</div >

<div class="mic" style="background-color:white; height:80px; width:100%;; z-index:90;">
    <a href="#menu" id="toggle"><span></span></a>
    <div id="menu">
        <ul class="tog1">
            <li class="tog2"><a href="DespreFII.html">Despre FII</a></li>
            <li class="tog2"><a href="paginaAdmitere.html">Admitere</a></li>
            <li class="tog2"><a href="IntrebariFrecvente.html">&#206;ntreb&#259;ri</a></li>
            <li class="tog2"><a href="contact.html">Contact</a></li>
        </ul>
    </div>
</div>

</br></br>
<?php

    if ( isset($_GET['success']) && $_GET['success'] == 1 )
    {
        echo '<script>alert("Formularul a fost validat cu succes.");</script>';
    }
?>

<div id="top">

    <div class="container">

        <div style="display: inline-flex;" class="col-md-10">

            <img class="icon-admin" src="imagini/admin-logo.png">
            <h1><span aria-hidden=true> Administra&#355;ie</span></h1>

        </div>

    </div>

</div>



<div class="container">

    <hr>

</div>

<section id="main">

    <div class="container">

        <div class="row">

            <div class="col-md-3">

                <div class="list-group">



                    <a href="#" class="list-group-item align-left active" onclick="showTable('#PreadmitereTable', this)">

                        <i class="glyphicon glyphicon-list-alt marg-r5 marg-l10"></i>

                        <span aria-hidden=true>Formulare Preadmitere</span>
                        <?php
                        include 'adminMainPage.php';
                        $nr_formulare_preadmitere = nrFormulare('preadmitere');
                        echo '<span>(';
                        echo $nr_formulare_preadmitere;
                        echo ')</span>';
                        ?>

                    </a>



                    <a href="#" class="list-group-item align-left" onclick="showTable('#AdmitereLicentaTable', this)">

                        <i class="glyphicon glyphicon-list-alt marg-r5 marg-l10"></i>

                        <span aria-hidden=true>

                Formulare Licen&#355;&#259;

              </span>

                        <?php
                        $nr_formulare_licenta = nrFormulare('licenta');
                        echo '<span>(';
                        echo $nr_formulare_licenta;
                        echo ')</span>';
                        ?>

                    </a>



                    <a href="#" class="list-group-item align-left" onclick="showTable('#AdmitereMasterTable', this)">

                        <i class="glyphicon glyphicon-list-alt marg-r5 marg-l10"></i>

                        <span aria-hidden=true>

                Formulare Master

              </span>

                        <?php
                        $nr_formulare_master = nrFormulare('master');
                        echo '<span>(';
                        echo $nr_formulare_master;
                        echo ')</span>';
                        ?>

                    </a>



                    <a href="#" class="list-group-item align-left" onclick="showTable('#IntrebariTable', this)">

                        <i class="glyphicon glyphicon-blackboard marg-r5 marg-l10"></i>

                        <span aria-hidden=true>

                &#206;ntreb&#259;ri Primite

              </span>

                        <?php
                        $nr_intrebari = nrIntrebari();
                        echo '<span>(';
                        echo $nr_intrebari;
                        echo ')</span>';
                        ?>

                    </a>



                </div>

            </div>

            <div class="col-md-9 scroll-page">

                <table id="PreadmitereTable" class="table table-hover" >

                    <thead>

                    <tr>

                        <th>#</th>

                        <th>Nume</th>

                        <th>Prenume</th>

                        <th>Data Aplic&#259;rii</th>

                        <th>Ac&#355;iuni</th>

                    </tr>

                    </thead>

                    <tbody>
                    <?php

                    set_error_handler(function($errno, $errstr, $errfile, $errline, array $errcontext) {
                        // error was suppressed with the @-operator
                        if (0 === error_reporting()) {
                            return false;
                        }

                        throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
                    });
                    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
                    /*$sql= " SELECT f.id,dpc.nume,dpc.prenume,f.creation_date from formular f
                                          join  date_personale_candidat dpc on f.date_personale_candidat_id=dpc.id
                                           join  detalii_aplicare da on f.detaliiaplicare_id=da.id 
                                           where da.tip_aplicare = 'preadmitere';";*/
                    $sql1=" select * from liceu;";
                    $s = oci_parse($c, " select f.id,dpc.nume,dpc.prenume,f.creation_date from formular f
                                          ,date_personale_candidat dpc , detalii_aplicare da  where da.tip_aplicare = 'preadmitere'
                                           and f.date_personale_candidat_id=dpc.id
                                           and f.detaliiaplicare_id=da.id ");
                    oci_execute($s);
                    $i=1;
                    while (($row = oci_fetch_array($s, OCI_BOTH)) != false)
                    {   echo '<form action="DetaliiPentruAdmin.php" method="post">';
                        echo '<tr>';
                        echo ' <th scope="row">'.$i.'</th>';
                        echo '<td>'.$row['NUME'].'</td>';
                        echo '<td>'.$row['PRENUME'].'</td>';
                        echo '<td>'.$row['CREATION_DATE'].'</td>';
                        echo '<td>';
                        echo '<input type="submit" value="Detalii" name="id_formular" >';

                        echo '</td>';
                        echo '</tr>';
                        echo ' <input type="hidden" name="id_formular" value='.$row['ID'].' />';
                        echo '</form>';

                        $i++;

                    }
                    oci_free_statement($s);
                    oci_close($c);
                    ?>
                    </tbody>

                </table>
                <table id="AdmitereLicentaTable" class="table table-hover" style="display:none;">

                    <thead>

                    <tr>

                        <th>#</th>

                        <th>Nume</th>

                        <th>Prenume</th>

                        <th>Data Aplic&#259;rii</th>

                        <th>Ac&#355;iuni</th>

                    </tr>

                    </thead>

                    <tbody>

                    <?php

                    set_error_handler(function($errno, $errstr, $errfile, $errline, array $errcontext) {
                        // error was suppressed with the @-operator
                        if (0 === error_reporting()) {
                            return false;
                        }

                        throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
                    });
                    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
                    /*$sql= " SELECT f.id,dpc.nume,dpc.prenume,f.creation_date from formular f
                                          join  date_personale_candidat dpc on f.date_personale_candidat_id=dpc.id
                                           join  detalii_aplicare da on f.detaliiaplicare_id=da.id
                                           where da.tip_aplicare = 'preadmitere';";*/
                    $sql1=" select * from liceu;";
                    $s = oci_parse($c, " select f.id,dpc.nume,dpc.prenume,f.creation_date from formular f
                                          ,date_personale_candidat dpc , detalii_aplicare da  where da.tip_aplicare = 'licenta'
                                           and f.date_personale_candidat_id=dpc.id
                                           and f.detaliiaplicare_id=da.id ");
                    oci_execute($s);
                    $i=1;
                    while (($row = oci_fetch_array($s, OCI_BOTH)) != false)
                    {
                        echo '<form action="DetaliiPentruAdmin.php" method="post">';
                        echo '<tr>';
                        echo ' <th scope="row">'.$i.'</th>';
                        echo '<td>'.$row['NUME'].'</td>';
                        echo '<td>'.$row['PRENUME'].'</td>';
                        echo '<td>'.$row['CREATION_DATE'].'</td>';
                        echo '<td>';
                        echo '<input type="submit" value="Detalii" name="id_formular" >';
                        echo '</td>';
                        echo '</tr>';
                        echo ' <input type="hidden" name="id_formular" value='.$row['ID'].' /> ';
                        echo '</form>';
                        $i++;

                    }
                    oci_free_statement($s);
                    oci_close($c);
                    ?>
                    </tbody>

                </table>
                <table id="AdmitereMasterTable" class="table table-hover" style="display: none;">

                    <thead>

                    <tr>

                        <th>#</th>

                        <th>Nume</th>

                        <th>Prenume</th>

                        <th>Data Aplic&#259;rii</th>

                        <th>Ac&#355;iuni</th>

                    </tr>

                    </thead>

                    <tbody>

                    <?php

                    set_error_handler(function($errno, $errstr, $errfile, $errline, array $errcontext) {
                        // error was suppressed with the @-operator
                        if (0 === error_reporting()) {
                            return false;
                        }

                        throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
                    });
                    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
                    /*$sql= " SELECT f.id,dpc.nume,dpc.prenume,f.creation_date from formular f
                                          join  date_personale_candidat dpc on f.date_personale_candidat_id=dpc.id
                                           join  detalii_aplicare da on f.detaliiaplicare_id=da.id
                                           where da.tip_aplicare = 'preadmitere';";*/
                    $sql1=" select * from liceu;";
                    $s = oci_parse($c, " select f.id,dpc.nume,dpc.prenume,f.creation_date from formular f
                                          ,date_personale_candidat dpc , detalii_aplicare da  where da.tip_aplicare = 'master'
                                           and f.date_personale_candidat_id=dpc.id
                                           and f.detaliiaplicare_id=da.id ");
                    oci_execute($s);
                    $i=1;
                    while (($row = oci_fetch_array($s, OCI_BOTH)) != false)
                    {
                        echo '<form action="DetaliiPentruAdmin.php" method="post">';
                        echo '<tr>';
                        echo ' <th scope="row">'.$i.'</th>';
                        echo '<td>'.$row['NUME'].'</td>';
                        echo '<td>'.$row['PRENUME'].'</td>';
                        echo '<td>'.$row['CREATION_DATE'].'</td>';
                        echo '<td>';
                        echo '<input type="submit" value="Detalii" name="id_formular" >';
                        echo '</td>';
                        echo '</tr>';
                        echo ' <input type="hidden" name="id_formular" value='.$row['ID'].' />';
                        echo '</form>';
                        $i++;

                    }
                    oci_free_statement($s);
                    oci_close($c);
                    ?>

                    </tbody>

                </table>

                <table id="IntrebariTable" class="table table-hover" style="display: none;">

                    <thead>

                    <tr>

                        <th>#</th>

                        <th>Nume</th>

                        <th>Prenume</th>

                        <th>Categorie</th>

                        <th>Ac&#355;iuni</th>

                    </tr>

                    </thead>

                    <tbody>
                    <?php

                    set_error_handler(function($errno, $errstr, $errfile, $errline, array $errcontext) {
                        // error was suppressed with the @-operator
                        if (0 === error_reporting()) {
                            return false;
                        }

                        throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
                    });
                    $c = oci_connect("ADMITERE", "ADMITERE", "localhost/xe");
                    /*$sql= " SELECT f.id,dpc.nume,dpc.prenume,f.creation_date from formular f
                                          join  date_personale_candidat dpc on f.date_personale_candidat_id=dpc.id
                                           join  detalii_aplicare da on f.detaliiaplicare_id=da.id
                                           where da.tip_aplicare = 'preadmitere';";*/

                    $s = oci_parse($c, " select i.id,u.nume,u.prenume,c.nume from intrebare i,useri u,categorie c 
                                                where i.user_id=u.id and i.categorie_id=c.id ");
                    oci_execute($s);
                    $i=1;
                    while (($row = oci_fetch_array($s, OCI_BOTH)) != false)
                    {
                        echo '<tr>';
                        echo ' <th scope="row">'.$i.'</th>';
                        echo '<td>'.$row[1].'</td>';
                        echo '<td>'.$row[2].'</td>';
                        echo '<td>'.$row[3].'</td>';
                        echo '<td>';
                        echo '<a href="#" class="actions-admin",nume="'.$row['ID'].'">R&#259;spunde</a>';
                        echo '</td>';
                        echo '</tr>';
                        $i++;


                    }
                    oci_free_statement($s);
                    oci_close($c);
                    ?>
                    </tbody>

                </table>
            </div>



        </div>



</section>
<script src="js/bootstrap.min.js"></script>
<script src="js/page-admin.js"></script>
</body>

<footer class="footer-distributed">

    <div class="footer-left">
        <h3 class="headernou2">Admitere <span> FII</span></h3>
        <p class="footer-links">
            <a href="DespreFII.html">Despre FII</a>
            ·
            <a href="paginaAdmitere.html">Admitere</a>
            ·
            <a href="IntrebariFrecvente.html">&#206;ntrebari frecvente</a>
            ·
            <a href="contact.html">Contact</a>
        </p>
    </div>

    <div class="footer-center">
        <h3 class="headernou2">Contact</h3>
        <div>
            <i class="fa fa-map-marker" id="bloc1"></i>
            <div id="bloc2"><p>&nbsp&nbspStrada General Henri Mathias Barthelot 16</p>
                <p>Iasi, Rom&#226;nia</p></div>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>&nbsp&nbsp0232 201 102</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p class="footer-links"><a href="secretariat AT info.uaic.ro">&nbsp&nbspsecretariat AT info.uaic.ro</a></p>
        </div>

    </div>

    <div class="footer-right">
        <h3 class="headernou">Linkuri</h3>
        <div class="footer-links">
            <img class="footer_img grayscale" src="imagini/fii.png" alt="fii "  id="bloc1"/>
            <a href="https://www.info.uaic.ro/bin/Main/"><p id="bloc2" class="footer-links"> &nbsp&nbspFacultatea de informatic&#259; Iasi<p></a>
        </div>
        <div class="footer-links">
            <img class="footer_img grayscale" src="imagini/logo.png" alt="uaic" id="bloc1" />
            <a href="http://www.uaic.ro/"><p id="bloc2" > &nbsp&nbspUAIC<p></a>
        </div>

        <div class="footer-links">
            <img class="footer_img grayscale" src="imagini/facebook-icon.png" alt="fb" id="bloc1" >
            <a href="https://www.facebook.com/FacultateaDeInformaticaUAICIasi/?fref=ts"><p id="bloc2"> &nbsp&nbspFacebook-ul faculta&#355;ii de informatic&#259;<p></a>
        </div>



    </div>

    <div class="footer-4"> <img class="footer_img2 grayscale" src="imagini/fii.png" alt="fii "  id="bloc1"/>
    </div>


    <hr class="hr_footer">
    <p class="hr_text">&copy; 2017 Grupa B3 Facultatea de Informatic&#259; Iasi</p>
    </hr>
</footer>
</html>

