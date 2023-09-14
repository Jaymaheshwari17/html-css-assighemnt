<?php

function year_check($my_year){
    if($my_year % 400 == 0)
    echo "it is a leap year";

elseif($my_year % 100 == 0)
    echo "it is a not leap year";

elseif($my_year % 4 == 0)
    echo "it is a leap year";

else

    echo "it is a not leap year";
}

$my_year=2004;
year_check($my_year);

?>