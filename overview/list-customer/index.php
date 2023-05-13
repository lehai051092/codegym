<?php
$customerList = array(
    "1" => array(
        "name" => "Mai Văn Hoàn",
        "birthday" => "1983-08-20",
        "address" => "Hà Nội",
        "image" => "images/img1.jpg"
    ),
    "2" => array(
        "name" => "Nguyễn Văn Nam",
        "birthday" => "1983-08-20",
        "address" => "Bắc Giang",
        "image" => "images/img2.jpg"
    ),
    "3" => array(
        "name" => "Nguyễn Thái Hòa",
        "birthday" => "1983-08-21",
        "address" => "Nam Định",
        "image" => "images/img3.jpg"
    ),
    "4" => array(
        "name" => "Trần Đăng Khoa",
        "birthday" => "1983-08-22",
        "address" => "Hà Tây",
        "image" => "images/img4.jpg"
    ),
    "5" => array(
        "name" => "Nguyễn Đình Thi",
        "birthday" => "1983-08-17",
        "address" => "Hà Nội",
        "image" => "images/img5.jpg"
    )
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Customer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<table border="1">
    <caption>
        <h1>Customer List</h1>
    </caption>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>BirthDay</th>
        <th>Address</th>
        <th>Image</th>
    </tr>
    <?php foreach ($customerList as $key => $customer) : ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $customer['name'] ?></td>
            <td><?= $customer['birthday'] ?></td>
            <td><?= $customer['address'] ?></td>
            <td>
                <img src="<?= $customer['image'] ?>" alt="<?= $customer['name'] ?>">
            </td>
        </tr>
    <?php endforeach; ?>
</body>
</html>