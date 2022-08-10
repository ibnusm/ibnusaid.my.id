<?php
/*
================
|  By NuLz404  |
================
*/

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	$ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
} else
{
	$ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
}

$tz = 'Asia/Jakarta';
$dt = new DateTime("now", new DateTimeZone($tz));
$timestamp = $dt->format('Y-m-d G:i:s');
$whead = "=========================\n|  Visitor Information  |\n=========================\n";
$wend =  "\n\n================\n|  By NuLz404  |\n================\n\n\n\n";
$log = "\n-----[USER LOG INDEX]-----\n|".$ipaddress."|".$timestamp.PHP_EOL."-----[========]-----\n";
$useragent = "[-]User-Agent | ";
$browser = $_SERVER['HTTP_USER_AGENT'];
$kernel = "\n[-]Server Kernel | ";
$ker = php_uname();
$software = "\n[-]Server | ";
$soft = $_SERVER['SERVER_SOFTWARE'];
$operating_system = "\n[-]Server Operating System | ";
$os = PHP_OS;
$infoip_api = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ipaddress));
$user_ip = "\n[-]User IP | " . $infoip_api->geoplugin_request;
$user_country = "\n[-]User Country | " . $infoip_api->geoplugin_countryName;
$user_country_code = "\n[-]User Country Code | " . $infoip_api->geoplugin_countryCode;
$user_city = "\n[-]User City | " . $infoip_api->geoplugin_city;
$user_region = "\n[-]User Region | " . $infoip_api->geoplugin_region;
$user_continent = "\n[-]User Continent | " . $infoip_api->geoplugin_continentName;
$user_continent_code = "\n[-]User Continent Code | " . $infoip_api->geoplugin_continentCode;
$user_currency_code = "\n[-]User Curency Code | " . $infoip_api->geoplugin_currencyCode;
$user_currency_symbol = "\n[-]User Curency Symbol | " . $infoip_api->geoplugin_currencySymbol;
$user_timezone = "\n[-]User Timezone | " . $infoip_api->geoplugin_timezone;
$user_latitude = "\n[-]User Latitude | " . $infoip_api->geoplugin_latitude;
$user_longitude = "\n[-]User Longitude | " . $infoip_api->geoplugin_longitude;
$user_location = "\n[-]User Location Coordinate | " . $infoip_api->geoplugin_latitude . " " . $infoip_api->geoplugin_longitude;
$user_location_accuracy = "\n[-]Location Accuracy | " . $infoip_api->geoplugin_locationAccuracyRadius . "%";


$file = '.user-access-index.txt';
$victim = "\n[-]User IP | ";
$fp = fopen($file, 'a');

fwrite($fp, $whead);
fwrite($fp, $log);
fwrite($fp, $victim);
fwrite($fp, $ipaddress);
fwrite($fp, $useragent);
fwrite($fp, $browser);
fwrite($fp, $kernel);
fwrite($fp, $ker);
fwrite($fp, $software);
fwrite($fp, $soft);
fwrite($fp, $operating_system);
fwrite($fp, $os);
fwrite($fp, $user_ip);
fwrite($fp, $user_country);
fwrite($fp, $user_country_code);
fwrite($fp, $user_city);
fwrite($fp, $user_region);
fwrite($fp, $user_continent);
fwrite($fp, $user_continent_code);
fwrite($fp, $user_currency_code);
fwrite($fp, $user_currency_symbol);
fwrite($fp, $user_timezone);
fwrite($fp, $user_latitude);
fwrite($fp, $user_longitude);
fwrite($fp, $user_location);
fwrite($fp, $user_location_accuracy);
fwrite($fp, $wend);

fclose($fp);
/*
================
|  By NuLz404  |
================
*/