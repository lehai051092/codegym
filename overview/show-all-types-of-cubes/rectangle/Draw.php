<?php
if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    $length = (int)$_POST['length'];
    $width = (int)$_POST['width'];

    if (!isset($length) || $length <= 0 || !is_numeric($length)) {
        echo "Please re-input length. Length is greater than zero and is numeric.<br/>";
        echo '<a href="../Index.php">back</a>';
        return;
    }

    if (!isset($width) || $width <= 0 || !is_numeric($width)) {
        echo "Please re-input width. Width is greater than zero and is numeric.<br/>";
        echo '<a href="../Index.php">back</a>';
        return;
    }

    for ($i = 0; $i < $width; $i++) {
        echo "<Br>";
        for ($j = 0; $j < $length; $j++) {
            echo "*";
        }
    }
}

?>
<p>
    <a href="../Index.php">back</a>
</p>