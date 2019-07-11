<?php
require('header.php');
$address = "";
if (isset($_GET['address'])) {
    $address = $_GET['address'];
    $vc = new Users();
    $result = $vc->update_profile($address);
//    echo "success";
} else {
    echo 'fault';
}
?>