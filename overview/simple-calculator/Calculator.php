<?php
if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    $fOperand = (float)$_POST['first_operand'];
    $sOperand = (float)$_POST['second_operand'];
    $operator = $_POST['operator'];

    if (empty($operator)) {
        echo "Please select operator!<br/>";
        echo '<a href="Index.php">back</a>';
        return;
    }

    if (!isset($fOperand) || !isset($sOperand)) {
        echo "Please input operand or wrong format!<br/>";
        echo '<a href="Index.php">back</a>';
        return;
    }

    if (!is_float($fOperand) || !is_float($sOperand)) {
        echo "Something when wrong format operand!<br/>";
        echo '<a href="Index.php">back</a>';
        return;
    }

    $result = "Please not input second operand equal zero!";

    switch ($operator) {
        case 1:
            $operator = " + ";
            $result = $fOperand + $sOperand;
            break;
        case 2:
            $operator = " - ";
            $result = $fOperand - $sOperand;
            break;
        case 3:
            $operator = " * ";
            $result = $fOperand * $sOperand;
            break;
        case 4:
            $operator = " / ";
            if ($sOperand != 0) {
                $result = $fOperand / $sOperand;
            }
            break;
        case 5:
            $operator = " % ";
            if ($sOperand != 0) {
                $result = $fOperand % $sOperand;
            }
            break;
        default:
            break;
    }
}
?>

<?php if (is_float($result) || is_numeric($result)): ?>
    <h1>Result</h1>
    <p><?= $fOperand . $operator . $sOperand . " = " . $result?></p>
<?php else: ?>
    <h1>Error</h1>
    <p><?= $result ?></p>
<?php endif; ?>
<a href="Index.php">back</a>
