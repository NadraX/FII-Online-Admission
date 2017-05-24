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

        function warnningsError()
        {
            set_error_handler(function($errno, $errstr, $errfile, $errline, array $errcontext) {
                // error was suppressed with the @-operator
                if (0 === error_reporting()) {
                    return false;
                }

                throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
            });
            return 1;
        }



?>