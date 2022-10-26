<?php
$conn = mysqli_connect("localhost", "root", "", "flight_api");

$queryString = http_build_query([
    'access_key' => 'aa0fd0c2bef4782274efcc297d8ddc8e'
  ]);
  
  $ch = curl_init(sprintf('%s?%s', 'http://api.aviationstack.com/v1/countries', $queryString));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  $json = curl_exec($ch);   
  #print($json);
  curl_close($ch);
  
  $airport_data = json_decode($json, true);

  foreach($airport_data['data'] as $row){
    $sql = "INSERT INTO countries (country_name, country_iso2, country_iso3, country_iso_numeric, populations, capital, continent, 
                                    currency_name, currency_code, fips_code, phone_prefix)
            VALUES ('".$row["country_name"]."', '".$row["country_iso2"]."', '".$row["country_iso3"]."', '".$row["country_iso_numeric"]."', 
                    '".$row["population"]."', '".$row["capital"]."', '".$row["continent"]."', '".$row["currency_name"]."', '".$row["currency_code"]."', 
                    '".$row["fips_code"]."', '".$row["phone_prefix"]."')";

            mysqli_query($conn, $sql);
  }

?>