<?php
//Oracle DB user name
$username = 'ADMITERE1';

// Oracle DB user password
$password = 'ADMITERE1';

// Oracle DB connection string
$connection_string = 'localhost/xe';

//Connect to an Oracle database
$conn = oci_connect(
$username,
$password,
$connection_string, 'AL32UTF8'
);

// Close connection 


?>