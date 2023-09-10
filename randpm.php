<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $caracture  = $_POST['length'];
    $available_chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZabcdefABC1234567890+*/-.,>?@#$%^&_(){}|";
    $password = " ";
    for ($i = 0; $i < $caracture; $i++) {
        $password .= $available_chars[rand(0, strlen($available_chars) - 1)];
    }
    echo $password;
}
