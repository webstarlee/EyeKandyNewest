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

// $q = $this->db->query( "SELECT COUNT(*) as CNT FROM agency");
// 		$row = $q->row_array();
// 		$data['agents'] = $row['CNT'];

$sql = "SELECT COUNT(*) as CNT FROM agency";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo json_encode($row);
    }
} 
?>