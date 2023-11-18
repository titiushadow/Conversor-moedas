function fillCurrencyDropdown(currencies, dropdownId) {
    let dropdown = document.getElementById(dropdownId);

    for (let symbol in currencies) {
        let option = new Option(`${symbol} - ${currencies[symbol]}`, symbol);
        dropdown.add(option);
    }
}

function convertCurrency() {
    let amount = document.getElementById("amount").value;
    let fromCurrency = document.getElementById("fromCurrency").value;
    let toCurrency = document.getElementById("toCurrency").value;

    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                let result = JSON.parse(xhr.responseText);

                if (result && result.conversion_rates) {
                    let conversionRates = result.conversion_rates;

                    if (conversionRates[fromCurrency] && conversionRates[toCurrency]) {
                        let exchangeRate = conversionRates[toCurrency] / conversionRates[fromCurrency];
                        let convertedAmount = amount * exchangeRate;

                        document.getElementById("result").innerHTML = `${amount} ${fromCurrency} é equivalente a ${convertedAmount.toFixed(2)} ${toCurrency}`;
                    } else {
                    }
                } else {
                }
            } else {
            }
        }
    };
    xhr.open("GET", `conversor.php?amount=${amount}&from_currency=${fromCurrency}&to_currency=${toCurrency}`, true);
    xhr.send();
}


function showErrorMessage(message) {
    console.error(message);
    document.getElementById("result").innerHTML = message;
}

document.addEventListener("DOMContentLoaded", function () {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let currencies = JSON.parse(xhr.responseText);
            fillCurrencyDropdown(currencies.conversion_rates, "fromCurrency");
            fillCurrencyDropdown(currencies.conversion_rates, "toCurrency");
        }
    };
    xhr.open("GET", "conversor.php", true);
    xhr.send();
});
