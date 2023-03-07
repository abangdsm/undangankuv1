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

function add($data)
{
    global $conn;
    $nama_lengkap = htmlspecialchars($data["nama"]);
    $doa = htmlspecialchars($data["cakap"]);
    if ($nama_lengkap == "" && $doa == "") {
        $nama_lengkap = 'Anonymous';
        $doa = 'Tidak ada ucapan dan doa yang tertulis di sini.';
    } else if ($nama_lengkap == "") {
        $nama_lengkap = "Anonymous";
    }
    $insert = "INSERT INTO tbucapan VALUES ('', '$nama_lengkap', '$doa')";
    mysqli_query($conn, $insert);
    return (mysqli_affected_rows($conn));
}

function delcom($data)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbucapan WHERE id=$data");
    return (mysqli_affected_rows($conn));
}
