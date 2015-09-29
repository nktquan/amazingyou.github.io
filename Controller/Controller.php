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
    if ($page == 'show') {
        require 'View/front_end/show.php';
    }
    
} else {
    require 'View/front_end/index.php';
}
//include 'public/footer.php';
