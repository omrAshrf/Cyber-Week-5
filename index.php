<?php
require './inc/conn.php';
require './inc/form.php';
require './inc/select.php';
require './inc/conn_close.php';
?>

<?php include_once './template/header.php'; ?>

<!-- Wilcome Head -->
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <img
    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQir1uzkJn3TuN8MkxTy9JF_RMH5ZK-vL4g31F505zzXu3YT2AkDPv9LYw&s"
    alt="">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 fw-normal">أهلا بكم !</h1>
    <p class="lead fw-normal">الوقت المتبقي على سحب الجوائز</p>
    <h4 id="counter"></h4>
    <button id="win-btn" class="btn btn-primary">من الرابح؟</button>
  </div>
</div>
<!-- End Head -->

<!-- Modal Winner -->
<div class="modal fade" id="win-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">الرابح في السحب</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach ($winner_list as $win): ?>
          <h1 class="display-3 text-center">
            <?php echo htmlspecialchars($win["fname"]) . " " . htmlspecialchars($win["lname"]) ?>
          </h1>
        <?php endforeach ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->

<!-- From -->
<div id="sign-form" class="position-relative overflow-hidden text-center">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?> " method="POST">
      <h3>سجل للسحب معنا</h3>
      <br>
      <div class="mb-3 ">
        <label for="fname" class="form-label">الأسم الأول</label>
        <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $fname ?>">
        <div class="form-text error"><?php echo $errors_arr['fname_err']; ?></div>
      </div>
      <div class="mb-3">
        <label for="lname" class="form-label">الأسم الثاني</label>
        <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $lname ?>">
        <div class="form-text error"><?php echo $errors_arr['lname_err']; ?></div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">عنوان البريد الإلكتروني</label>
        <input type="text" class="form-control" name="email" id="email" value="<?php echo $email ?>">
        <div class=" form-text error"><?php echo $errors_arr['email_err']; ?></div>
      </div>
      <div class="mb-3">
        <label for="passd" class="form-label">مفتاح الحماية الخاص بك</label>
        <input type="password" class="form-control" name="passd" id="passd" value="<?php echo $passd ?>">
        <div class="form-text error "> <?php echo $errors_arr['passd_err']; ?> </div>
      </div>
      <button type="submit" name="submit" id="sign-btn" class="btn btn-primary">سجل</button>
    </form>
  </div>
</div>
<!-- End Form -->

<?php require_once './template/footer.php'; ?>