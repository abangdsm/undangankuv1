<?php
include 'hub.php';

$sql = mysqli_query($conn, "SELECT * FROM tbucapan ORDER BY id DESC");
$result = array();
while ($fetchData = mysqli_fetch_array($sql)) {
    $result[] = $fetchData;
}
echo json_encode($result);
