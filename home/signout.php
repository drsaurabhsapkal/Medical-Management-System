<?php
session_start();
session_destroy();
echo "<script>alert('SignOut Successully..!')</script>";
echo "<script>window.location.href = 'http://127.0.0.1/medical/';</script>";
?>