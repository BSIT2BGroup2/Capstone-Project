<?php

$queryString = http_build_query([
  'access_key' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI0IiwianRpIjoiZTVkNWI2MDYwMDhhMDUxMDA5N2YxYmExMzAzY2U2YjkxN2U3MjVlODdlYzQ5YjVhZjM5NWRkODY1YTZiMjRiMDhiNWFkMTc2N2Y3NTNkZmMiLCJpYXQiOjE2NjcxOTcyNTIsIm5iZiI6MTY2NzE5NzI1MiwiZXhwIjoxNjk4NzMzMjUyLCJzdWIiOiIxNjUyNCIsInNjb3BlcyI6W119.HPWz0uJwWavxRp19OJHMCixzj-3DmnKaGwNd-nn7ZsViRQn0U5AEDFPxoQnzKYf5dJnyIAQSaL4cnZoCps2yGw',
]);

$ch = curl_init(sprintf("%s?%s", "http://app.goflightlabs.com/airports", $queryString));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$json = curl_exec($ch);
print($json);
curl_close($ch);

$api_result = json_decode($json, true);

foreach ($api_result['data'] as $flight) {
        echo $flight['airport_name'],
              $flight['iata_code'],
              $flight['icao_code'],
              $flight['country_name']
            ;
}