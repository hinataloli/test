<?php
session_start();
$code = file_get_contents('1.txt');
$_SESSION['abc'] = $code;  // Lưu vào session
