<?php

require_once 'includes/users.php';
user_sign_out();
header('location: index.php');