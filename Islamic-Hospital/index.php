<?php $page_title = "Register";
require_once "./template/header.php";
require_once "./inc/db_conn.php";
?>
<?php include "./inc/regist.php"; ?>

<div class="container">
  <h2 id="register-title" class="mb-3">حجز موعد</h2>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

    <div class="form-floating mb-3">
      <input type="text" class="form-control rtl" name="name" id="name" value="<?php echo $name ?>">
      <label for="name">الأسم</label>
      <div id="form-err" class="form-text error rtl"><?php echo $errors_arr['name_err']; ?></div>
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control rtl" name="mail" id="mail" value="<?php echo $mail ?>">
      <label for="email">البريد الإكتروني</label>
      <div id="form-err" class="form-text error rtl"><?php echo $errors_arr['mail_err']; ?></div>

    </div>

    <div class="form-floating mb-3">
      <input type="date" class="form-control rtl" name="date" id="date" value="<?php echo $date ?>">
      <label for="date">المعاد</label>
      <div id="form-err" class="form-text error rtl"><?php echo $errors_arr['date_err']; ?></div>
    </div>

    <input type="submit" name="regist" id="register-btn" class="btn btn-primary mb-3" value="أحجز الأن">
  </form>
</div>




<?php require_once './inc/db_close.php' ?>

<?php require_once './template/header.php' ?>