<?php
include 'hub.php';
if (isset($_POST["btn-kirim"])) {
    if (add($_POST) > 0) {
        header('location: #list-ucapan');
    } else {
        echo "<script>alert('Yaah, ucapan dari Anda tidak dapat terkirim');</script>";
    }
}

$data_ucapan = mysqli_query($conn, "SELECT * FROM tbucapan ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ucapan dan Doa</title>

    <link rel="stylesheet" href="assets/style.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&family=Rouge+Script&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div id="list-ucapan">
        <?php foreach ($data_ucapan as $ucap) : ?>
            <div class="wrap-ucapan">
                <p class="nama-lengkap"><?= $ucap['nama_lengkap']; ?></p>
                <a class="btn-hapus" href="del-com?id=<?= $ucap["id"]; ?>"><i class="fa fa-trash"></i></a>
                <hr>
                <p class="ucapan-doa"><?= $ucap['ucapan']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>


</body>

</html>