<?php
setcookie("page_color",$_POST['user_color'],time()+(24*60*60));
header("Location: index.php");