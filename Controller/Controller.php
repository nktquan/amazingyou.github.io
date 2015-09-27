<?php
session_start();
include 'Model/model.php';

//include 'Public/header.php';
//include 'Public/menu.php';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page == 'index') {
        require 'View/front_end/index.php';
    }
    if ($page == 'register') {
        register();
        require 'View/front_end/index.php';
    }
    
} else {
    require 'View/front_end/index.php';
}
//include 'public/footer.php';


function register(){
    var_dump($db);die;
    add_user($_POST['name'], $_POST['email'], $_POST['phone']);
}