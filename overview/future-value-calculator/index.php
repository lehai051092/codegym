<?php
if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    $amount = (int)round($_POST['amount']);
    $rate = (int)$_POST['rate'];
    $years = (int)round($_POST['years']);

    if (empty($amount) || $amount < 0 || !is_numeric($amount)) {
        echo "Format amount wrong!";
    }

    if (empty($rate) || $rate < 0 || $rate > 1000 || !is_numeric($rate)) {
        echo "Format rate wrong!";
    }

    if (empty($years) || $years < 0 || !is_numeric($years)) {
        echo "Format rate wrong!";
    }

    $futureValue = ($amount + ($amount * ($rate / 100))) * $years;

    echo $futureValue . " VND";
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
    <title>Future Value Calculator</title>
</head>
<body>
<h2>Future Value Calculator</h2>
<form method="post">
    <input type="text" name="amount" placeholder="Investment Amount"/>
    <input type="text" name="rate" placeholder="Yearly Interest Rate"/>
    <input type="text" name="years" placeholder="Number of Years"/>
    <input type="submit" id="submit" value="Calculate"/>
</form>
</body>
</html>