<?php
if (strtolower($_SERVER['REQUEST_METHOD']) === 'post') {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  if (empty($username)) {
    throw new Exception("Please input username!");
  }

  if (empty($email)) {
    throw new Exception("Please input email!");
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    throw new Exception("Please input email format!");
  }

  if (empty($phone)) {
    throw new Exception("Please input phone!");
  }

  $data = [
    'username' => $username,
    'email' => $email,
    'phone' => $phone
  ];

  $dataCurrent = file_get_contents('user.json');
  $dataArr = (!empty(json_decode($dataCurrent, true))) ? json_decode($dataCurrent, true) : [];
  array_push($dataArr, $data);
  $dataJson = json_encode($dataArr);
  file_put_contents('user.json', $dataJson);
  $username = null;
  $email = null;
  $phone = null;
}
?>
<a href="Index.php">Back</a>
