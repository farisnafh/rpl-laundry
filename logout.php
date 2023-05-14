<?php 
  session_start();

  // menghapus session semua data session yang masih tersimpan pada server.
  $_SESSION = [];
  session_unset();
  session_destroy();
  setcookie('laundry', '', time() - 3600);
  setcookie('logout', '', time() - 3600);

  header("Location: login.php");
  exit;
?>



