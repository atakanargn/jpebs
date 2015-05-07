<?php
setcookie("jbAuth",false);
unset($_COOKIE['jbAuth']);
setcookie("jbAuth","",time()-60*60*24);
header("Location:index.php");
?>