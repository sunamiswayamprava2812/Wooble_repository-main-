<?php
session_start();
session_destroy();

header("Location:../L_S_Page/index.php");
exit;

?>
