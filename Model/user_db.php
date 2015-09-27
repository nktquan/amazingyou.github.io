<?php
function get_all_user(){
    global $db;
    $sql = "SELECT * FROM user";
    $user = $db->query($sql);
    $user = $user->fetchAll();
    return $user;
}

function add_user($name, $email, $phone) {
    global $db;
    $sql = "INSERT INTO user(name,email,phone) VALUES('$name', '$email', '$phone')";
    $user = $db->exec($sql);
    return $user;
}

function get_id_by_user($id){
    global $db;
    $sql = "SELECT * FROM user WHERE id='$id'";
    $user = $db->query($sql);
    $user = $user->fetch();
    return $user;
}

function del_user($id){
    global $db;
    $sql = "DELETE FROM user WHERE id='$id'";
    $user = $db->exec($sql);
    return $user;
}
?>