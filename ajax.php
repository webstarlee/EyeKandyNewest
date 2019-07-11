<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eyekandiesnew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql_1 = "SELECT sum(performer_amount) as total_earn, sum(admin_amount) as total_paid from earning where performer_id=517 and payment_date LIKE '2019-01%'";
// echo $sql_1;
$sql_2 = "SELECT sum(performer_amount) as total_earn, sum(admin_amount) as total_paid from earning where performer_id=517 and payment_date LIKE '2019-02%'";
$sql_3 = "SELECT sum(performer_amount) as total_earn, sum(admin_amount) as total_paid from earning where performer_id=517 and payment_date LIKE '2019-03%'";
$sql_4 = "SELECT sum(performer_amount) as total_earn, sum(admin_amount) as total_paid from earning where performer_id=517 and payment_date LIKE '2019-04%'";
$sql_5 = "SELECT sum(performer_amount) as total_earn, sum(admin_amount) as total_paid from earning where performer_id=517 and payment_date LIKE '2019-05%'";
$sql_6 = "SELECT sum(performer_amount) as total_earn, sum(admin_amount) as total_paid from earning where performer_id=517 and payment_date LIKE '2019-06%'";
$result_1 = $conn->query($sql_1);
$result_2 = $conn->query($sql_2);
$result_3 = $conn->query($sql_3);
$result_4 = $conn->query($sql_4);
$result_5 = $conn->query($sql_5);
$result_6 = $conn->query($sql_6);

if ($result_1->num_rows > 0) {
    // output data of each row
    while($row_1 = $result_1->fetch_assoc()) {

        $data['total_earn_1'] =  $row_1['total_earn'];
        $data['total_paid_1'] =  $row_1['total_paid'];
    }
} else {
    echo "0 results";
}
if ($result_2->num_rows > 0) {
    // output data of each row
    while($row_2 = $result_2->fetch_assoc()) {

        $data['total_earn_2'] =  $row_2['total_earn'];
        $data['total_paid_2'] =  $row_2['total_paid'];
    }
} else {
    echo "0 results";
}
if ($result_3->num_rows > 0) {
    // output data of each row
    while($row_3 = $result_3->fetch_assoc()) {

        $data['total_earn_3'] =  $row_3['total_earn'];
        $data['total_paid_3'] =  $row_3['total_paid'];
    }
} else {
    echo "0 results";
}
if ($result_4->num_rows > 0) {
    // output data of each row
    while($row_4 = $result_4->fetch_assoc()) {

        $data['total_earn_4'] =  $row_4['total_earn'];
        $data['total_paid_4'] =  $row_4['total_paid'];
    }
} else {
    echo "0 results";
}
if ($result_5->num_rows > 0) {
    // output data of each row
    while($row_5 = $result_5->fetch_assoc()) {

        $data['total_earn_5'] =  $row_5['total_earn'];
        $data['total_paid_5'] =  $row_5['total_paid'];
    }
} else {
    echo "0 results";
}
if ($result_6->num_rows > 0) {
    // output data of each row
    while($row_6 = $result_6->fetch_assoc()) {

        $data['total_earn_6'] =  $row_6['total_earn'];
        $data['total_paid_6'] =  $row_6['total_paid'];
    }
} else {
    echo "0 results";
}
echo json_encode($data);

?>