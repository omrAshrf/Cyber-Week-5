<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$passd = $_POST["passd"];

$errors_arr = [
  'lname_err' => '',
  'fname_err' => '',
  'email_err' => '',
  'passd_err' => '',
];

if (empty($fname)) {
  $errors_arr['fname_err'] = "يجب أدخال الإسم الأول";
}
if (empty($lname)) {
  $errors_arr['lname_err'] = "يجب أدخال الإسم الثاني";
}
if (empty($email)) {
  $errors_arr['email_err'] = "يجب أدخال عنوان البريد الإلكتروني";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors_arr['email_err'] = "يجب إدخال عنوان البريد بشكل صحيح";
}
if (empty($passd) || strlen($passd) < 8) {
  $errors_arr['passd_err'] = "يجب إدخال متفاح التحقق ولا يقل عن ثمانية أحرف";
}
if (!array_filter($errors_arr)) {

  if (isset($_POST['submit'])) {
    
    $fname = mysqli_real_escape_string($conn, $_POST["fname"]);
    $lname = mysqli_real_escape_string($conn, $_POST["lname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $passd = mysqli_real_escape_string($conn, $_POST["passd"]);

    $query = "INSERT INTO users(fname, lname, email, passd) VALUES('$fname', '$lname', '$email', '$passd')";

    if (mysqli_query($conn, $query)) {
      header('Location: ' . $_SERVER['PHP_SELF']);
    } else {
      echo 'Err' . mysqli_connect($conn);
    }
  }
}

