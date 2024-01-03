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
        <input type="text" name="amount" id="amount"><br>
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
</body>
</html>