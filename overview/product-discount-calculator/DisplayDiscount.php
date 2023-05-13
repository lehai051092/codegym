<?php

if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    $description = $_POST['description'];
    $price = (float)$_POST['price'];
    $discount = (float)$_POST['discount'];

    if (empty($description)) {
        echo "Please input description";
    }

    if (empty($price) || !is_numeric($price) || $price < 0) {
        echo "Something when wrong with price";
    }

    if (empty($discount) || !is_numeric($discount) || $discount < 0 || $discount > 1000) {
        echo "Something when wrong with discount";
    }

    $discountAmount = $price * ($discount / 100) * 0.1;
    $discountPrice = $price - $discountAmount;

    echo '<h2>Result</h2>';
    echo '<p>Description: '. $description . '</p>';
    echo '<p>Discount Amount: '. $discountAmount . ' VND</p>';
    echo '<p>Discount Price: '. $discountPrice . ' VND</p>';
}
?>

<a href="index.php">back</a>
