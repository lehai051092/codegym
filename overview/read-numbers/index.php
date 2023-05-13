<?php

if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    function getTextNumberLittleThan10($number)
    {
        if (strpos($number, "0") == 0) {
            $number = substr($number, 0);
        }

        switch ($number) {
            case 0:
                $number = "zero";
                break;
            case 1:
                $number = "one";
                break;
            case 2:
                $number = "two";
                break;
            case 3:
                $number = "three";
                break;
            case 4:
                $number = "four";
                break;
            case 5:
                $number = "five";
                break;
            case 6:
                $number = "six";
                break;
            case 7:
                $number = "seven";
                break;
            case 8:
                $number = "eight";
                break;
            case 9:
                $number = "nine";
                break;
            default:
                $number = "out of ability";
                break;
        }

        return $number;
    }

    function getTextNumberLittleThan20($number)
    {
        switch ($number) {
            case 0:
                $number = "ten";
                break;
            case 1:
                $number = "eleven";
                break;
            case 2:
                $number = "twelve";
                break;
            case 3:
                $number = "thirteen";
                break;
            case 4:
                $number = "fourteen";
                break;
            case 5:
                $number = "fifteen";
                break;
            case 6:
                $number = "sixteen";
                break;
            case 7:
                $number = "seventeen";
                break;
            case 8:
                $number = "eighteen";
                break;
            case 9:
                $number = "nineteen";
                break;
            default:
                $number = "out of ability";
                break;
        }

        return $number;
    }

    function getTextNumberLittleThan100($numberStart, $numberEnd) {
        switch ($numberStart) {
            case 2:
                $number = "twenty";
                break;
            case 3:
                $number = "thirty";
                break;
            case 4:
                $number = "forty";
                break;
            case 5:
                $number = "fifty";
                break;
            case 6:
                $number = "sixty";
                break;
            case 7:
                $number = "seventy";
                break;
            case 8:
                $number = "eighty";
                break;
            case 9:
                $number = "ninety";
                break;
            default:
                $number = "out of ability";
                break;
        }

        switch ($numberEnd) {
            case 1:
                $number .= " one";
                break;
            case 2:
                $number .= " two";
                break;
            case 3:
                $number .= " three";
                break;
            case 4:
                $number .= " four";
                break;
            case 5:
                $number .= " five";
                break;
            case 6:
                $number .= " six";
                break;
            case 7:
                $number .= " seven";
                break;
            case 8:
                $number .= " eight";
                break;
            case 9:
                $number .= " nine";
                break;
            default:
                break;
        }

        return $number;
    }

    $number = (int)$_POST['number'];

    if (strlen($number) < 0 || strlen($number) > 3 || $number < 0 || !is_numeric($number)) {
        echo "Không đúng format";
    }

    if (strpos($number, "0") == 0) {
        $number = substr($number, 0);
    }

    if ($number < 10) {
        $number = getTextNumberLittleThan10($number);
    } elseif ($number >= 10 && $number < 20) {
        $number = substr($number, -1);
        $number = getTextNumberLittleThan20($number);
    } elseif ($number >= 20 && $number < 100) {
        $number = str_split($number);
        $numberStart = $number[0];
        $numberEnd = $number[1];
        $number = getTextNumberLittleThan100($numberStart, $numberEnd);
    } else {
        $number = str_split($number);
        $numberStart = $number[0];
        $numberBetween = $number[1];
        $numberEnd = $number[2];
        $numberCheck = (int)($numberBetween . $numberEnd);

        switch ($numberStart) {
            case 1:
                $number = "one hundred ";
                break;
            case 2:
                $number = "two hundred ";
                break;
            case 3:
                $number = "three hundred ";
                break;
            case 4:
                $number = "four hundred ";
                break;
            case 5:
                $number = "five hundred ";
                break;
            case 6:
                $number = "six hundred ";
                break;
            case 7:
                $number = "seven hundred ";
                break;
            case 8:
                $number = "eight hundred ";
                break;
            case 9:
                $number = "nine hundred ";
                break;
            default:
                break;
        }

        if ($numberCheck < 10) {
            $number .= getTextNumberLittleThan10($numberCheck);
        } elseif ($numberCheck >= 10 && $numberCheck < 20) {
            $number .= getTextNumberLittleThan20($numberCheck);
        } elseif ($numberCheck >= 20 && $numberCheck < 100) {
            $number .= getTextNumberLittleThan100($numberBetween, $numberEnd);
        }

        if ($numberEnd == 0) {
            $number = substr($number, 0, strpos($number, 'zero'));
        }
    }

    echo $number;
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
    <title>Đọc số thành chữ</title>
</head>
<body>
<h2>Đọc số thành chữ</h2>
<form method="post">
    <input type="text" name="number" placeholder="Nhập số cần đọc"/>
    <input type="submit" id="submit" value="submit"/>
</form>
</body>
</html>