<?php
$dictionary = [
    "hello" => "xin chào",
    "how" => "thế nào",
    "book" => "quyển vở",
    "computer" => "máy tính"
];

if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
    $term = $_POST['search'];

    if (!empty($dictionary[$term])) {
        echo $term . ': ' . $dictionary[$term];
    } else {
        echo 'Không tìm thấy!';
    }
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
    <title>Dictionary</title>
</head>
<body>
<h2>Từ Điển Anh - Việt</h2>
<form method="post">
    <input type="text" name="search" placeholder="Nhập từ cần tìm bằng tiếng anh"/>
    <input type="submit" id="submit" value="Tìm"/>
</form>
</body>
</html>