<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream</title>
</head>
<body>
    <form action="" method="get">
        <label for="amount">Amount to convert:</label>
        <input type="number" name="amount" id="amount"><br>
        <label for="from">Convert from:</label>
        <select name="from" id="from">
            <option value="euro">Euro</option>
            <option value="dollar">Dollar - USA</option>
            <option value="aud">Dollar - Australian</option>
            <option value="krona">Krona - Swedish</option>
            <option value="lira">Lira - Turkish</option>
        </select>
        <br>
        <label for="to">Convert to:</label>
        <select name="to" id="to">
            <option value="dollar">Dollar - USA</option>
            <option value="aud">Dollar - Australian</option>
            <option value="krona">Krona - Swedish</option>
            <option value="lira">Lira - Turkish</option>
            <option value="euro">Euro</option>
        </select>
        <br>
        <button type="submit">Convert</button>
    </form>
    <?php 
    function convertCurrency(int $amount, string $from, string $to) 
    {
        $conversionRates = [
            "dollar" => 1.2,
            "aud" => 2.0,
            "krona" => 10,
            "lira" => 0.2,
            "euro" => 1.0
        ];

        if (array_key_exists($to, $conversionRates) && array_key_exists($from, $conversionRates)) {
            $conversionRate = $conversionRates[$to] / $conversionRates[$from];
            $convertedAmount = $amount * $conversionRate;
    
            return $convertedAmount;
        }
        else return "Error: not a know currency!"
    }

    if (isset($_GET["amount"], $_GET["from"], $_GET["to"]))
    {
        $convertedValue = convertCurrency($_GET["amount"], $_GET["from"], $_GET["to"]);

        if (is_numeric($convertedValue))
            echo "Congrats, you now have " . $convertedValue . " " . $_GET["to"] . ".";
        else echo $convertedValue;
    }
    ?>
</body>
</html>