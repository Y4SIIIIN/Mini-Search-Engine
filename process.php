<?php

$url = $_REQUEST["q"];
$secret = $_COOKIE['n1stock'];
$user_id = getSecretUser($secret, 'id');

if(!isUserExist($user_id)) die;

?>
