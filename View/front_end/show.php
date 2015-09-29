<?php
    $listUser = get_all_user();
?>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
    </tr>
    <?php foreach ($listUser as $user):?>
    <tr>
        <td><?=$user['id'] ?></td>
        <td><?=$user['name'] ?></td>
        <td><?=$user['email'] ?></td>
        <td><?=$user['phone'] ?></td>
    </tr>
    <?php endforeach;?>
</table>

