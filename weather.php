<?php
$weather=file_get_contents ('http://api.openweathermap.org/data/2.5/weather?zip=83843,us&APPID=5888b8b93ed8d1906c9665e31bed55ff');
//$test = file_get_contents($weather,0);
//$xm = new SimplexmlElement($test);
//print_r($xm);
$obj = json_decode($weather);
//print_r($weather)
print $obj->{'name'};
echo "<br/>";

echo " Текующая температура ";
print $obj->{'main'}->{'temp'};
echo "<br/>";
echo "Давление ";
print $obj->main->pressure;
echo "<br/>";
echo "Cкорость ветра ";
print $obj->wind->speed;
echo "<br/>";
echo "Влажность ";
print $obj->main->humidity;
?>
