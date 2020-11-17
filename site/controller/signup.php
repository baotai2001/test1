<?php
    //include_once ('model/login.php');
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'index':
            header('location:view/signup.php');
        break;
    }
?>