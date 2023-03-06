<?php
$conn = mysqli_connect("localhost", "root", "", "ucapan");

function add($data)
{
    global $conn;
    $nama_lengkap = htmlspecialchars($data["nama"]);
    $doa = htmlspecialchars($data["cakap"]);
    $insert = "INSERT INTO tbucapan VALUES ('', '$nama_lengkap', '$doa')";
    mysqli_query($conn, $insert);
    return (mysqli_affected_rows($conn));
}
