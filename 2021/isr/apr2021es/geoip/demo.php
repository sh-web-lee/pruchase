<?php
function getIP()
{
	if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
		$cip = $_SERVER["HTTP_CLIENT_IP"];
	} elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
		$ip_arr = explode(',', $_SERVER["HTTP_X_FORWARDED_FOR"]);
		$cip = $ip_arr[0];
	} elseif (!empty($_SERVER["REMOTE_ADDR"])) {
		$cip = $_SERVER["REMOTE_ADDR"];
	} else {
		$cip = '';
	}
	return $cip;
}

require 'geoip2.phar';
$reader = new GeoIp2\Database\Reader('GeoLite2-City.mmdb');
echo $ip = getIP();
try {
	$record = $reader->city($ip);
	$continent = $record->continent->names['en'];
	$city = $record->city->names['en'];
	var_dump($record->country->isoCode);
} catch (GeoIp2\Exception\AddressNotFoundException $e) {
	echo 'UNKNOWN';
}