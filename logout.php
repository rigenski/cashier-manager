<?php

// set session dan cookie menjadi kosong
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

// redirect / pindah halaman
header("Location: login.php");
exit;
