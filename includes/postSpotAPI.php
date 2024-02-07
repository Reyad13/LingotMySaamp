<?php

    $clOrdID = 'MySaamp_' . date('Y-m-d_His');
    $pair = 'XAUEUR';
    $deal = 1;

    $poids = isset($_GET['poids']) ? $_GET['poids'] : null;
    $quantity = isset($_GET['quantity']) ? $_GET['quantity'] : null;

    $poidsTotalEnOnce = ($poids * $quantity) / 31.10348;
    //echo "xxxxxx $poidsTotalEnOnce";

    $remarks = 'SPOT AUCH WEB';

    $request_data = json_encode(array(
        "ClOrdId" => (string)$clOrdID,
        "Pair" => $pair,
        "Deal" => $deal,
        "Quantity" => $poidsTotalEnOnce,
        "Remarks" => $remarks
    ));

    $headers = array(
        'Content-Type: application/json',
        'TokenID: eyJhbGciOiJIUzUxMiJ9.eyJFbnRpdHkiOiJTUE0iLCJpc3MiOiJPcm9zb2Z0IFNvbHV0aW9ucyBQdnQuIEx0ZC4iLCJDbGllbnRJZCI6IlMwMTQiLCJlbnYiOiJkZW1vIiwiZXhwIjoxNzM1Njg5NTk5fQ.agokh8jQVL6JKLI2otJVn-nrn85OR2U2toDR-t_7pT2EMEYt8va_1MxcjIja43XhH21Say5RRjVuZrdJUUtNUA'
    );

    $ch = curl_init('https://pmxconnect.demo.stonex.com/v1_3/Trade');

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request_data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'Erreur cURL : ' . curl_error($ch);
    } else {
        // Affiche la réponse de l'API
        //echo "Réponse de l'API : " . $response;exit;
        curl_close($ch);
    }
    $data = json_decode($response, true);
    if ($data !== null) {
        $clOrdId = $data['result']['ClOrdId'];
        $quantityOnce = $data['result']['Quantity'];
        //echo "yy $quantityOnce";exit;
        $poidsTotalG = $quantityOnce * 31.10348;
        $rate = $data['result']['Rate'];
        $rateG = $rate / 31.10348;
        $EXID = $data['result']['EXID'];
    } else {
        echo "Erreur lors de la conversion JSON\n";
    }

?>
