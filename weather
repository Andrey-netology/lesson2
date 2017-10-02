<?php
$city_id=524901;
$weather="http://api.openweathermap.org/data/2.5/weather?id=$city_id&mode=xml&lang=ru&units=metric&APPID=5888b8b93ed8d1906c9665e31bed55ff";
$test = file_get_contents($weather,0);
$xm = new SimplexmlElement($test);
print_r($xm);
?>
