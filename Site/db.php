<?php

require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=users_taxi',
        'root', 'root' );

session_start();
?>