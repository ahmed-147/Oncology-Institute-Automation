<?php

include "config.php";

session_start();

$sql1 = "UPDATE seci.users SET active = '0' WHERE `Serial` = '".$_SESSION['serial']."';";

mysqli_query($conn, $sql1);

session_unset();

session_destroy();

header('Location: index.php');
exit();

?>