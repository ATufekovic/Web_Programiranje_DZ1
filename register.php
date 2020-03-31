<?php
    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $passwordmd5 = md5($_POST["user_password"]);
    $result[] = array("name" => $user_name, "email" => $user_email, "passmd5" => $passwordmd5);
    echo json_encode($result);
?>