<?php
    $jsonFile = './json/moedas.json';
    $jsonData = file_get_contents($jsonFile);

    // Decodifica o JSON
    $data = json_decode($jsonData, true);

    if (isset($data['result']) && $data['result'] === 'success') {
        $conversionRates = $data['conversion_rates'];

        header('Content-Type: application/json');
        echo json_encode(array("conversion_rates" => $conversionRates));
    } else {
        echo "Erro ao obter moedas";
    }
?>
