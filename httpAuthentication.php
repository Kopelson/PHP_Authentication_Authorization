<?php

    $username = 'admin';
    $password = 'password';

if (!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic realm="Parcel Tracker"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'You must provide a valid username and password to access this application';
    exit;
}

if ($_SERVER['PHP_AUTH_USER'] !== $username || $_SERVER['PHP_AUTH_PW'] !== $password) {
    header('HTTP/1.0 401 Unauthorized');
    echo 'Either your username or password was not valid\n';
    exit;
}