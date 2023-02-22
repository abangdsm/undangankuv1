<?php
$conn = mysqli_connect('localhost', 'root', '', 'ucapan');
if (mysqli_connect_errno()) {
    echo "Database Gagal Terhubung" . mysqli_connect_error();
}
