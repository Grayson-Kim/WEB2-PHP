<?php
unlink('data/'.basename($_POST['id']));
header('Location: /WEB2-PHP/index.php');
?>