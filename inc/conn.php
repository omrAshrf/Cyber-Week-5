<?php
$usr = 'omr';
$pss = 'omr';
$hst = '127.0.0.1';
$sdb = 'randwin';
$conn = mysqli_connect($hst, $usr, $pss, $sdb);

if (!$conn) {
  echo 'Err: ' . mysqli_connect_errno();
}
?>
