<?php $page_title = "Admin"; ?>
<?php require_once "./template/header.php"; ?>
<?php require_once "./inc/db_conn.php"; ?>
<?php require_once './inc/registers.php' ?>

<div class="container mb-5">
  <table class="table table-striped" id="users-table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
      <?php $row = 1; ?> <!-- index of row in table -->
      <?php foreach ($registers as $register): ?>
        <tr>
          <th scope="row"><?php echo $row ?></th> <!-- # -->
          <td><?php echo $register["id"]; ?></td> <!-- Id -->
          <td><?php echo $register["name"]; ?></td> <!-- Name -->
          <td><?php echo $register["mail"]; ?></td> <!-- Email -->
          <td><?php echo $register["date"]; ?></td> <!-- Date -->
        </tr>
        <?php $row += 1 ?>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<?php #  require_once './inc/db_close.php' ?>

<?php require_once './template/header.php' ?>