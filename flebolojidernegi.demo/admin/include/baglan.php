
<?php
$bag = new mysqli("localhost","fleboloji-admin","zkhlHDpjt6CKvlX9","fleboloji");

// Check connection
if ($bag -> connect_errno) {
  echo "Veritabanı bağlantı hatası: " . $bag -> connect_error;
  exit();
}

$bag -> set_charset("utf8");

?>