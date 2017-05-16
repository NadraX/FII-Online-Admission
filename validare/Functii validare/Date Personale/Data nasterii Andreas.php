<?php
function checkData_Nasterii($dataNastere) {
    if(strlen($dataNastere)!=10)
        return 0;
    if(substr($dataNastere,-5,1)!='.')
        return 0;
    if(substr($dataNastere,-8,1)!='.')
        return 0;
    if(substr($dataNastere,-4,4)<1950 || substr($dataNastere,-4,4)>2010)
        return 0;
    if(substr($dataNastere,-7,2)!= '01' && substr($dataNastere,-7,2)!= '02' && substr($dataNastere,-7,2)!= '03' && substr($dataNastere,-7,2)!= '04' && 
       substr($dataNastere,-7,2)!= '05' && substr($dataNastere,-7,2)!= '06' && substr($dataNastere,-7,2)!= '07' && substr($dataNastere,-7,2)!= '08' && 
       substr($dataNastere,-7,2)!= '09' && substr($dataNastere,-7,2)!= '10' && substr($dataNastere,-7,2)!= '11' && substr($dataNastere,-7,2)!= '12')
          return 0;
    if(substr($dataNastere,-7,2) == '01' || substr($dataNastere,-7,2) == '03' || substr($dataNastere,-7,2) == '05' || substr($dataNastere,-7,2) == '07' || 
       substr($dataNastere,-7,2) == '08' || substr($dataNastere,-7,2) == '10' || substr($dataNastere,-7,2) == '12'){
        if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '31')
            return 0;
    }
    if(substr($dataNastere,-7,2) == '04' || substr($dataNastere,-7,2) == '06' || substr($dataNastere,-7,2) == '09' || substr($dataNastere,-7,2) == '11') {
        if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '30')
            return 0;
    }
    if(substr($dataNastere,-7,2) == '02'){
        if(an_bisect(intval(substr($dataNastere,-4,4)))){
            if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '29')
                return 0;
        }
        else 
            if(substr($dataNastere,-10,2) < '01' || substr($dataNastere,-10,2) > '28')
                return 0;
    }
        
        
    return 1;
}


function an_bisect($year)
{
    return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
}


?>

