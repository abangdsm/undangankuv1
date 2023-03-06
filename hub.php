<?php
$conn = mysqli_connect("localhost", "root", "", "ucapan");

function query($data)
{
    global $conn;
    $hasil = mysqli_query($conn, $data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows;
}
