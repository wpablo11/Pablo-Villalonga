<?php
// This is in the PHP file and sends a Javascript alert to the client
$message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>";
trigger_error("Llego aqui",E_USER_ERROR);
?>