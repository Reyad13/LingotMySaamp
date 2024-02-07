<?php
    $pair = 'XAUEUR';

    $headers = array(
        'Content-Type: application/json',
        'TokenID: eyJhbGciOiJIUzUxMiJ9.eyJFbnRpdHkiOiJTUE0iLCJpc3MiOiJPcm9zb2Z0IFNvbHV0aW9ucyBQdnQuIEx0ZC4iLCJDbGllbnRJZCI6IlMwMTQiLCJlbnYiOiJkZW1vIiwiZXhwIjoxNzM1Njg5NTk5fQ.agokh8jQVL6JKLI2otJVn-nrn85OR2U2toDR-t_7pT2EMEYt8va_1MxcjIja43XhH21Say5RRjVuZrdJUUtNUA'
    );

    $ch = curl_init("https://pmxconnect.demo.stonex.com/v1_3/GetSpotRates/SPC/$pair");

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Erreur cURL : ' . curl_error($ch);
    } else {
        curl_close($ch);
    
        $data = json_decode($response, true);
        if ($data !== null) {
            $ask = $data['result'][0]['Ask'];
            echo json_encode(['taux' => $ask]);
        } else {
            echo json_encode(['erreur' => 'Erreur lors de la conversion JSON']);
        }
    }
?>
