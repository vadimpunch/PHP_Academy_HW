<?php

$db_data = array
(

    'username' => 'Vadim',
    'password' => 'Panchenko'
);
$status = true;

if($_POST)
{
    $username = isset($_POST['username']) ? $_POST['username'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
} elseif ($_COOKIE)
{
    $username = isset($_COOKIE['username']) ? $_COOKIE['username'] : null;
    $password = isset($_COOKIE['password']) ? $_COOKIE['password'] : null;
}
else die("Restricted access");

foreach ($db_data as $key=>$value)
{
    $status = $status && ($$key===$value);
}

if ($status) {
    if ($_POST['remember']) {
        setcookie('username', $username, time() + 60 * 60 * 24 * 360);
        setcookie('password', $password, time() + 60 * 60 * 24 * 360);

    }
    echo "Call it magic! Agahahah(No)";
}