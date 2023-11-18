<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Remova a tag </link> pois ela não é necessária para folhas de estilo -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container">
    <h2 class="text-center">Conversor de Moeda</h2>

    <form id="currencyConverterForm">
        <div class="form-group">
            <label for="amount">Valor:</label>
            <input type="number" class="form-control" id="amount" placeholder="Insira o valor" required>
        </div>
        
        <div class="form-group">
            <label for="fromCurrency">De:</label>
            <select class="form-control" id="fromCurrency" required></select>
        </div>
        
        <div class="form-group">
            <label for="toCurrency">Para:</label>
            <select class="form-control" id="toCurrency" required></select>
        </div>
        
        <button type="button" class="btn btn-primary btn-block" onclick="convertCurrency()">Converter</button>
    </form>

    <div id="result" class="text-center"></div>
</div>

<!-- Adicione as bibliotecas do Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Inclua o seu script.js -->
<script src="./js/script.js"></script>
</body>
</html>
