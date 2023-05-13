<?php
if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    $corner = $_POST['corner'];
    $width = (int)$_POST['width'];

    if (empty($corner)) {
        echo "Please select corner.<br/>";
        echo '<a href="../Index.php">back</a>';
        return;
    }

    if (!isset($width) || $width <= 0 || !is_numeric($width)) {
        echo "Please re-input width. Width is greater than zero and is numeric.<br/>";
        echo '<a href="../Index.php">back</a>';
        return;
    }

    switch ($corner) {
        case 1:
            for ($i = 0; $i < $width; $i++) {
                echo "<br/>";
                for ($j = 0; $j <= $i; $j++) {
                    echo "* ";
                }
            }
            break;
        case 2:
            for ($i = 0; $i < $width; $i++) {
                echo "<br/>";
                for ($j = $width; $j > $i; $j--) {
                    echo "* ";
                }
            }
            break;
        default:
            for ($i = 0; $i <= $width; $i++) {
                for ($j = $width; $j > $i; $j--) {
                    echo '&nbsp; &nbsp;';
                }
                for ($k = 0; $k < $i; $k++) {
                    echo '*&nbsp; &nbsp;';
                }
                echo '<br>';
            }
            break;
    }
}

?>
<p>
    <a href="../Index.php">back</a>
</p>