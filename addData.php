<?php
include 'hub.php';

$nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
$ucapan = htmlspecialchars($_POST['ucapan']);
$sql = mysqli_query($conn, "INSERT INTO tbucapan VALUES ('', '$nama_lengkap', '$ucapan')");
if ($sql) {
    $result['status'] = '1';
    $result['msg'] = 'Terima kasih atas ucapan dan doanya.';
} else {
    $result['status'] = '0';
    $result['msg'] = 'Ucapan dan doa belum tersampaikan.';
}
echo json_encode($result);
