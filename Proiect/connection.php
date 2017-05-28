<?php

//Oracle DB user name
$username = 'ip';

// Oracle DB user password
$password = 'ip';

// Oracle DB connection string
$connection_string = 'localhost/xe';

//Connect to an Oracle database
$connection = oci_connect(
$username,
$password,
$connection_string
);
If (!$connection)
echo 'The keks were not in your favour -- connection failed';
else
echo 'Connection successful!<br />';

?>