<?php
session_start();
$uid = $_POST['uid'];
$pws = $_POST['pid'];
if(!isset($_SESSION['login_session_ready'])){
    if($uid == 'treefolks' && $pws == 'tree'){
        $_SESSION['login_session_ready']='loggedin';
        echo 1;
    }else{
        echo 0;
    }
}else{
    session_destroy();
    header("location: ./GIS-login.php?code=logout");
}
?>