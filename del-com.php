<?php
include 'hub.php';

$id = $_GET["id"];

if (delcom($id) > 0) {
    echo "<script>alert('Ucapan dan doa berhasil dihapus.'); document.location.href='comments'</script>";
} else {
    echo "<script>alert('Ucapan dan doa gagal dihapus'); document.location.href='comments'</script>";
}
