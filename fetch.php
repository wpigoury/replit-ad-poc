<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://e-11172.adzerk.net/api/v2',
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
    "blockedCreatives": [
        113199452,
        113539770,
        114142107,
        114139774,
        114140717,
        114141933,
        112333843,
        113556975,
        296557230
    ],
    "placements": [
        {
            "divName": "div1",
            "networkId": "11172",
            "siteId": "1196902",
            "adTypes": [5]
        }
    ]
}',
    CURLOPT_HTTPHEADER => array(
        'X-Adzerk-ApiKey: '.$_ENV['KEVEL_API_KEY'],
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo "const kevelAds = ".$response.";";


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://e-11172.adzerk.net/api/v2',
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
    "blockedCreatives": [
        113199452,
        113539770,
        114142107,
        114139774,
        114140717,
        114141933,
        112333843,
        113553484,
        113556975
    ],
    "placements": [
        {
            "divName": "div2",
            "networkId": "11172",
            "siteId": "1196902",
            "adTypes": [163]
        }
    ]
}',
    CURLOPT_HTTPHEADER => array(
        'X-Adzerk-ApiKey: '.$_ENV['KEVEL_API_KEY'],
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo "const kevelVideoAds = ".$response.";";
?>