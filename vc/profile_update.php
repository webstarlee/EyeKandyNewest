<?php
require('header.php');
$address = "";
if (isset($_GET['address'])) {
    $address = intval($_GET['address']);
} else {
    return;
}
var_dump($address);
exit(0);
//$vc = new Users();

?>