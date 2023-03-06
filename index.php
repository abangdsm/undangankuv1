<?php
include 'hub.php';
require 'addData.php';
if (isset($_POST["btn-kirim"])) {
    if (add($_POST) > 0) {
        header('location: #ucapan');
    } else {
        echo "<script>alert('Yaah, ucapan dari Anda tidak dapat terkirim');</script>";
    }
}; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Resepsi Pernikahan Muda & Mala</title>
    <link rel="stylesheet" href="assets/style.css">

    <!-- icon dengan foto terbaru -->
    <!-- <link href="assets/img/favicon.png" rel="icon"> -->

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&family=Rouge+Script&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div id="home">
        <div class="prlx1">
            <div class="undangan">
                <p>The Wedding Of</p>
            </div>

            <div class="pengantin">
                <p>Muda <br> & <br>Mala</p>
            </div>

            <div class="tanggal">
                <div class="col-tanggal">
                    <p>Ahad</p>
                </div>

                <div class="garis"></div>

                <div class="col-tanggal">
                    <p>12</p>
                    <small>2023</small>
                </div>

                <div class="garis"></div>

                <div class="col-tanggal">
                    <p>Maret</p>
                </div>


                <div class="flower">
                    <img class="fw" src="assets/euc.png" alt="flower-white">
                </div>
            </div>
        </div>
    </div>


    <div class="nav">
        <ul>
            <li>
                <a href="#home"><i class="fa fa-home"></i>
                    <div class="lbutton">Home</div>
                </a>
            </li>
            <li>
                <a href="#sectionWaktu"><i class="fa fa-clock"></i>
                    <div class="lbutton">Waktu</div>
                </a>
            </li>
            <li>
                <a href="#sectionLokasi"><i class="fa fa-location-dot"></i>
                    <div class="lbutton">Lokasi</div>
                </a>
            </li>
            <li>
                <a href="#tentangmm"><i class="fa fa-heart"></i>
                    <div class="lbutton">Tentang Muda & Mala</div>
                </a>
            </li>
            <li>
                <a href="#ucapan"><i class="fa fa-comments"></i>
                    <div class="lbutton">Ucapan</div>
                </a>
            </li>
        </ul>
    </div>

    <div id="arrum">

        <div class="foto-nikah">
            <img class="ftnikah" src="assets/bg3.jpg" alt="foto-nikah">
        </div>

        <div class="ayat">
            <p>
                "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."
            </p>
            <p>- Q.S. Ar-Rum ayat 21 -</p>
        </div>

    </div>
    <div class="garis-bawah"></div>

    <div class="s2">
        <div class="wrapbismillah">
            <img class="bismillah" src="assets/bismillah2.png" alt="Bismillahirrahmanirrahim">
        </div>

        <div class="pengantar">
            <p>
                Assalamu'alaikum Warahmatullahi Wabarakatuh,
            </p>
            <p>
                Dengan memohon rahmat dan ridho Allah swt,
            </p>
            <p>
                kami bermaksud mengundang Bapak/Ibu/Saudara/Saudari pada acara pernikahan kami
            </p>
        </div>

        <div class="mudamala">
            <p>Dwi Star Muda</p>
            <p>&</p>
            <p>Nirmala Sari</p>
        </div>

        <div class="flower">
            <img class="fw" src="assets/euc.png" alt="flower-white">
        </div>

    </div>
    <div class="garis-bawah"></div>

    <div id="sectionWaktu">
        <p>Waktu</p>

        <div class="kartu">
            <div class="card">
                <p>Akad Nikah:</p>
                <p class="akad">Jum'at, 1 Juli 2022</p>
            </div>

            <div class="card">
                <p>Resepsi:</p>
                <p class="resepsi">Ahad, 12 Maret 2022</p>
            </div>
        </div>


        <div class="tombol">
            <a href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=MjM0dmliZmwyanYxbHBnZzNrNGc1YTM2MjIgaWQucmV2ZXJzYWxAbQ&tmsrc=id.reversal%40gmail.com" target="_blank" class="btnmd"><i class="fa-solid fa-calendar-days"></i> Google Calendar</a>
        </div>
    </div>
    <div class="garis-bawah"></div>

    <div id="sectionLokasi">
        <div class="judul">
            <p>Denah Lokasi Pesta</p>
        </div>
        <div class="gmaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.297796677385!2d98.7888400644867!3d3.5184659517543952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303139b57406ae95%3A0xed5434408264a54e!2sWisma%20Tanjung%20Indah!5e0!3m2!1sid!2sid!4v1676137436032!5m2!1sid!2sid" width="1100" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="tombol">
            <a href="https://www.google.com/maps/place/Wisma+Tanjung+Indah/@3.518461,98.789559,17z/data=!4m6!3m5!1s0x303139b57406ae95:0xed5434408264a54e!8m2!3d3.5184606!4d98.7895589!16s%2Fg%2F11cm0g52q0?hl=id" target="_blanks" class="btnmd"><i class="fa fa-location-dot"></i> Buka Google Maps</a>
        </div>
    </div>

    <div id="tentangmm">
        <div class="tentang">
            <p>Tentang Muda & Mala</p>
        </div>
    </div>

    <div id="ucapan">
        <div class="komentar">
            <p>Ucapan & Doa</p>
        </div>

        <div class="formulir">
            <form method="POST">
                <div class="lnama">
                    <label for="nama">Nama Lengkap</label>
                </div>
                <div class="fnama">
                    <input type="text" name="nama" id="nama" class="nama_lengkap" placeholder="Nama Anda"><br>
                </div>

                <div class="lucapan">
                    <label for="cakap">Ucapan</label><br>
                </div>

                <div class="fucapan">
                    <textarea name="cakap" id="cakap" class="ucapan" cols="10" rows="5" placeholder="Ucapan & Doa"></textarea>
                </div>

                <button class="btnmd" name="btn-kirim"><i class="fa fa-comments"></i> Kirim Ucapan</button>

            </form>
        </div>

        <div onload="table()">
            <div id="jlegek"></div>
        </div>

    </div>


    <div id="footer">
        <div class="copyright">
            <p>&copy; Muda & Mala - Undangan Resepsi Pernikahan, 2023</p>
        </div>
    </div>

    <script type="text/javascript" src="assets/tools.js"></script>
</body>

</html>