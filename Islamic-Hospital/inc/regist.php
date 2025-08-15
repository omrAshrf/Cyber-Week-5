<?php
$errors_arr = [
  'name_err' => '',
  'mail_err' => '',
  'date_err' => '',
];

if (empty($_POST["name"])) {
  $errors_arr['name_err'] = "يجب إدخال الأسم";
} else {
  $name = $_POST["name"];
}
if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
  $errors_arr['mail_err'] = "يجب إدخال عنوان البريد بشكل صحيح";
} else {
  $mail = $_POST["mail"];
}
if (empty($_POST["date"])) {
  $errors_arr['date_err'] = "يجب إدخال معاد الحجز";
} else {
  $date = $_POST["date"];
}

if (!array_filter($errors_arr)) {
  $name = mysqli_real_escape_string($db_conn, $_POST["name"]);
  $mail = mysqli_real_escape_string($db_conn, $_POST["mail"]);
  $date = mysqli_real_escape_string($db_conn, $_POST["date"]);

  if ($_POST["regist"]) {
    $query = "INSERT INTO registers(name, mail, date) VALUES('$name',' $mail', '$date')";

    if (mysqli_query($db_conn, $query)) {
      echo "<h4 id='results_p' style='color: green'>تم الحجز</h4>";
    } else {
      // echo 'Err' . mysqli_connect_errno();
      echo "<h4 id='results_p' style='color: red'>لم يتم الحجز</h4>";
    }
  }
}


