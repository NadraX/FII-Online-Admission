<?php
function check_nationalitate($nationalitate) {
    if($nationalitate != 'daneza' && $nationalitate != 'engleza' && $nationalitate != 'estoniana' && $nationalitate != 'finlandeza' && 
      $nationalitate != 'islandeza' && $nationalitate != 'irlandeza' && $nationalitate != 'letoniana' && $nationalitate != 'lituaniana' && 
      $nationalitate != 'nord irlandeza' && $nationalitate != 'norvegiana' && $nationalitate != 'scotiana' && $nationalitate != 'suedeza' && 
      $nationalitate != 'britanica' && $nationalitate != 'galeza' && $nationalitate != 'austriaca' && $nationalitate != 'belgiana' && 
      $nationalitate != 'franceza' && $nationalitate != 'germana' && $nationalitate != 'olandeza' && $nationalitate != 'elvetiana' && 
      $nationalitate != 'albaneza' && $nationalitate != 'croata' && $nationalitate != 'cipriota' && $nationalitate != 'greca' && 
      $nationalitate != 'Italiana' && $nationalitate != 'portugheza' && $nationalitate != 'sarba' && $nationalitate != 'slovena' && 
      $nationalitate != 'spaniola' && $nationalitate != 'belarusa' && $nationalitate != 'bulgara' && $nationalitate != 'ceha' && 
      $nationalitate != 'maghiara' && $nationalitate != 'poloneza' && $nationalitate != 'romana' && $nationalitate != 'rusa' && 
      $nationalitate != 'slovaca' && $nationalitate != 'ucraineana' && $nationalitate != 'canadiana' && $nationalitate != 'mexicana' && 
      $nationalitate != 'americana' && $nationalitate != 'cubaneza' && $nationalitate != 'guatemaleza' && $nationalitate != 'jamaicana' && 
      $nationalitate != 'argentiniana' && $nationalitate != 'boliviana' && $nationalitate != 'braziliana' && $nationalitate != 'chiliana' && 
      $nationalitate != 'columbiana' && $nationalitate != 'ecuadoriana' && $nationalitate != 'paraguayana' && $nationalitate != 'peruana' && 
      $nationalitate != 'uruguayana' && $nationalitate != 'venezueleana' && $nationalitate != 'georgiana' && $nationalitate != 'iraniana' && 
      $nationalitate != 'iraqiana' && $nationalitate != 'israeliana' && $nationalitate != 'iordaniana' && $nationalitate != 'kuweitiana' && 
      $nationalitate != 'libaneza' && $nationalitate != 'palestiniana' && $nationalitate != 'din Arabia de Sud' && $nationalitate != 'siriana' && 
      $nationalitate != 'turca' && $nationalitate != 'yemeneana' && $nationalitate != 'yemenita' && $nationalitate != 'afgana' && 
      $nationalitate != 'din Banglades' && $nationalitate != 'indiana' && $nationalitate != 'cazaca' && $nationalitate != 'nepaleza' && 
      $nationalitate != 'pakistaneza' && $nationalitate != 'sri lankez' && $nationalitate != 'chineza' && $nationalitate != 'japoneza' && 
      $nationalitate != 'mongoleza' && $nationalitate != 'nord koreana' && $nationalitate != 'sud koreana' && $nationalitate != 'taiwaneza' && 
      $nationalitate != 'cambodgiana' && $nationalitate != 'indoneziana' && $nationalitate != 'laotiana' && $nationalitate != 'lao' &&
      $nationalitate != 'malaeziana' && $nationalitate != 'birmaneza' && $nationalitate != 'filipineza' && $nationalitate != 'singaporeza' &&
      $nationalitate != 'tailandeza' && $nationalitate != 'vietnameza' && $nationalitate != 'australiana' && $nationalitate != 'fijiana' &&
      $nationalitate != 'neo zeelandeza' && $nationalitate != 'algeriana' && $nationalitate != 'egipteana' && $nationalitate != 'ganaiana' &&
      $nationalitate != 'ivoriana' && $nationalitate != 'libaneza' && $nationalitate != 'marocana' && $nationalitate != 'nigeriana' &&
      $nationalitate != 'tunisiana' && $nationalitate != 'etiopiana' && $nationalitate != 'keniana' && $nationalitate != 'somaleza' &&
      $nationalitate != 'sudaneza' && $nationalitate != 'tanzaneza' && $nationalitate != 'ugandeza' && $nationalitate != 'angoleza' && 
      $nationalitate != 'botswaneza' && $nationalitate != 'congoleza' && $nationalitate != 'malagasa' && $nationalitate != 'mozambicana' && 
      $nationalitate != 'namibiana' && $nationalitate != 'sud African' && $nationalitate != 'zambiana' && $nationalitate != 'zimbabueana')
        return 0;
    
  
    return 1;
}

echo check_nationalitate('romana');




?>

