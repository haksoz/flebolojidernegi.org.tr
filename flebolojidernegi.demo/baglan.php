<?php
$bag = new mysqli("localhost","fleboloji-user","UCJL3eNFLgI1koTz","fleboloji");

// Check connection
if ($bag -> connect_errno) {
  echo "Failed to connect to MySQL: " . $bag -> connect_error;
  exit();
}

$bag -> set_charset("utf8");

?>