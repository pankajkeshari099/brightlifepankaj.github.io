<?php

session_start();

$regValue = $_GET['regName'];

echo "Your registration is: ".$regValue.".";

?>

<p><a href="new1.php">Back to set_reg.php</a>