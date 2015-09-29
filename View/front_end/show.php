<?php
    $listUser = get_all_user();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="content-language" content="vi" />
    <link rel="shortcut icon" href="./images/logo.ico"/>
    <title>Danh sách đăng ký</title>
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="css/Base.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div class="row container">
<h1 class="center red-text">Danh sách đăng ký</h1>
<table class="striped">
    <thead>
      <tr>
          <th data-field="id">ID</th>
          <th data-field="name">Họ Tên</th>
          <th data-field="email">Email</th>
          <th data-field="phone">Số điện thoại</th>
      </tr>
    </thead>

    <tbody>
        <?php foreach ($listUser as $user):?>
        <tr>
            <td><?=$user['id'] ?></td>
            <td><?=$user['name'] ?></td>
            <td><?=$user['email'] ?></td>
            <td><?=$user['phone'] ?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/scrolling-nav.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>