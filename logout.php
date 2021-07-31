<?php
    setcookie('user',"",time() - 3600);
    header("Location: admin_login.php");
?>