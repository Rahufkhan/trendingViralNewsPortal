<?php

include "config.php";

session_start();

session_unset();//what ever variables value present in session will be removed 

session_destroy();

header("Location: {$hostname}/admin/");

?>
