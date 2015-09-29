<?php
if (isset($_POST['name']) && isset($_POST["email"]) && isset($_POST['phone'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    //check email
    $user = get_user_by_mail($email);
    if(!empty($user)){
        $return["insert"] = FALSE;
        $return["msg"] = "email đã được đăn ký";
        echo json_encode($return);
        return FALSE;
    }
    //check phone
    $user = get_user_by_phone($phone);
    if(!empty($user)){
        $return["insert"] = FALSE;
        $return["msg"] = "Số điện thoại đã được đăng ký";
        echo json_encode($return);
        return FALSE;
    }
    
    $intIsOK = add_user($name, $email, $phone);
    
    $return["insert"] = $intIsOK;
    echo json_encode($return);

//    echo"<script>location.href='index.php?page=success'</script>";
} else {
    require 'index.phtml';
}



