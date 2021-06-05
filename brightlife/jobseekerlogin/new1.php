
<form method="get" action="new2.php">
    <input type="text" name="regName" value="">
    <input type="submit">
</form>
<?php

session_start();

$_SESSION['regName'] = $regValue;

?>
