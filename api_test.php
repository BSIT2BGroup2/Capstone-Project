<?php

$queryString = http_build_query([
  'access_key' => 'aa0fd0c2bef4782274efcc297d8ddc8e'
]);

$ch = curl_init(sprintf('%s?%s', 'http://api.aviationstack.com/v1/airlines', $queryString));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$json = curl_exec($ch);
print($json);
curl_close($ch);

$api_result = json_decode($json, true);
/*
foreach ($api_result['data'] as $flight) {
        echo
            $flight['airport_name'],
            $flight['iata_code'],
            $flight['icao_code'],
            $flight['latitude'],
            $flight['longitude'],
            $flight['geoname_id'],
            $flight['timezone'],
            $flight['gmt'],
            $flight['phone_number'],
            $flight['country_name'],
            $flight['country_iso2'],
            $flight['city_iata_code']
            ;
    
}*/