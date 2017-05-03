<?php
include "exemplu.php";
    
if($_POST['Submit'] == 'Register')
{
    
   $name_p = $_POST["Input"];
     $v = exempluValidate($name_p);
    if($v==1) echo "Bun";
        else echo "NuBun";

}
?>