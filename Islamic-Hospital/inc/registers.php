<?php

$query = "SELECT * FROM `registers`";

$result = mysqli_query($db_conn, $query);

$registers = mysqli_fetch_all($result, MYSQLI_ASSOC);

