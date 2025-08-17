<?php
$stmt = "SELECT * FROM users ORDER BY rand() LIMIT 1";

$result = mysqli_query($conn, $stmt);

$winner_list = mysqli_fetch_all($result, MYSQLI_ASSOC);

