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

    <!-- OpenGraph -->
    <meta property="og:type" content="page" />
    <meta property="og:title" content="Undangan Resepsi Pernikahan - Muda & Mala." />
    <meta property="og:description" content="Undangan Resepsi Pernikahan - Muda & Mala." />
    <meta property="og:url" content="https://letsocio.com" />
    <meta property="og:image" content="https://letsocio.com/og.jpg" />

    <title>Undangan Resepsi Pernikahan Muda & Mala</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">

    <!-- Custom AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- icon dengan foto terbaru -->
    <link href="assets/favicon.png" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&family=Rouge+Script&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <audio hidden autoplay loop>
        <source src="assets/audio/tulus.mp3" type="audio/mpeg">
        Yah, browser Anda tidak mendukung audio.
    </audio>

    <div id="home">
        <div class="prlx1">
            <div class="undangan" data-aos="fade-up" data-aos-duration="2000">
                <p>The Wedding Of</p>
            </div>

            <div class="pengantin" data-aos="fade-up" data-aos-duration="2000">
                <p>Muda <br> & <br>Mala</p>
            </div>

            <div class="tanggal" data-aos="fade-up" data-aos-duration="3000">
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
            </div>

            <div class="flower">
                <img class="fw" src="assets/euc.png" alt="flower-white">
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
                    <div class="lbutton">Galeri</div>
                </a>
            </li>
            <li>
                <a href="#ucapan"><i class="fa fa-comments"></i>
                    <div class="lbutton">Ucapan</div>
                </a>
            </li>
        </ul>
    </div>

    <div class="napeng" data-aos="fade-up" data-aos-duration="2000">
        <p class="inisial">M</p>
        <div class="ga-napeng"></div>
        <p class="inisial">M</p>
    </div>

    <div id="arrum">

        <div class="ayat" data-aos="fade-up" data-aos-duration="2000">

            <p>
                "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir."
            </p>
            <p>- Q.S. Ar-Rum ayat 21 -</p>
        </div>

        <div class="foto-nikah">
            <img class="ftnikah" src="assets/1.jpg" alt="foto-nikah" data-aos="zoom-in" data-aos-duration="2000">
        </div>

    </div>
    <div class="garis-bawah"></div>

    <div class="s2">
        <div class="wrapbismillah">
            <img class="bismillah" src="assets/bismillah2.png" alt="Bismillahirrahmanirrahim" data-aos="fade-up" data-aos-duration="2000">
        </div>

        <div class="pengantar" data-aos="fade-up" data-aos-duration="2000">
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

        <div class="mudamala" data-aos="fade-up" data-aos-duration="2000">
            <p>Dwi Star Muda</p>
            <p>&</p>
            <p>Nirmala Sari</p>
        </div>

    </div>

    <div id="profile1" data-aos="fade-up" data-aos-duration="2000">
        <img src="assets/prof1.jpg" alt="dwistarmuda" class="pfl" data-aos="zoom-in" data-aos-duration="2000">
        <p>Dwi Star Muda Al Achmad</p>
        <p>Putra Pertama Dari:</p>
        <p>Bapak Achmad dan Ibu Setiawati</p>
        <a href="https://instagram.com/dwistarmuda.id" target="_blank" class="btn-ig"><i class="fab fa-instagram"></i> instagram</a>
    </div>

    <div id="profile2" data-aos="fade-up" data-aos-duration="2000">
        <img src="assets/prof2.jpg" alt="dwistarmuda" class="pfl" data-aos="zoom-in" data-aos-duration="2000">
        <p>Nirmala Sari</p>
        <p>Putri Pertama Dari:</p>
        <p>Alm. Bapak Nirwansyah dan Ibu Sulastri</p>
        <a href="https://instagram.com/itsnirmalasari" target="_blank" class="btn-ig"><i class="fab fa-instagram"></i> instagram</a>
    </div>

    <div class="garis-bawah"></div>

    <div id="sectionWaktu">
        <p data-aos="fade-up" data-aos-duration="2000">Our Love Story</p>

        <div class="story" data-aos="fade-up" data-aos-duration="2000">
            <p class="time">Maret 2007</p>
            <p>
                Awal jumpa ketika berada di kelas 2 SMP. Saling mengenal tetapi masih begitu cuek dengan satu sama lain. Karena saat itu kami masih fokus untuk belajar dan belum mengerti apa itu cinta.
            </p>
        </div>

        <div class="story" data-aos="fade-up" data-aos-duration="2000">
            <p class="time">Agustus 2013</p>
            <p>
                Dipertemuan kedua, tanpa disangka kami berjumpa kembali di sebuah angkutan umum. Dan kami saling bertukar nomor handphone. Namun, belum ada tumbuh rasa suka di antara kami.
            </p>
        </div>

        <div class="story" data-aos="fade-up" data-aos-duration="2000">
            <p class="time">Oktober 2019</p>
            <p>
                Dipertemuan selanjutnya kami dipertemukan kembali di sebuah cafe yang berada di Center Point Mall Medan. Kami banyak bercerita dan memutuskan untuk bertukar kontak kembali dan saling follow sosial media. Seiring berjalannya waktu rasa suka pun tumbuh di antara kami.
            </p>
        </div>

        <div class="story" data-aos="fade-up" data-aos-duration="2000">
            <p class="time">Juli 2022</p>
            <p>
                Setelah cukup mengenal satu sama lain. Akhirnya kami memutuskan untuk membangun keluarga kecil kami pada hari Jum'at 1 Juli 2022. Semoga Allah S.W.T. memberikan kebahagiaan dan keberkahan di keluarga kami. "AMIIN"
            </p>
        </div>

        <div class="garis-bawah"></div>

        <p data-aos="fade-up" data-aos-duration="2000">Wedding Event</p>

        <div class="kartu" data-aos="fade-up" data-aos-duration="2000">
            <div class="card">
                <p>Akad Nikah:</p>
                <p class="akad">Jum'at, 1 Juli 2022</p>
            </div>

            <div class="card">
                <p>Resepsi:</p>
                <p class="resepsi">Ahad, 12 Maret 2023</p>
            </div>
        </div>


        <div class="tombol" data-aos="fade-up" data-aos-duration="2000">
            <a href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=MjM0dmliZmwyanYxbHBnZzNrNGc1YTM2MjIgaWQucmV2ZXJzYWxAbQ&tmsrc=id.reversal%40gmail.com" target="_blank" class="btnmd"><i class="fa-solid fa-calendar-days"></i> Google Calendar</a>
        </div>
    </div>
    <div class="garis-bawah"></div>

    <div id="sectionLokasi">
        <div class="judul">
            <p data-aos="fade-up" data-aos-duration="2000">Denah Lokasi Pesta</p>
        </div>
        <div class="gmaps" data-aos="fade-up" data-aos-duration="2000">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.297796677385!2d98.7888400644867!3d3.5184659517543952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303139b57406ae95%3A0xed5434408264a54e!2sWisma%20Tanjung%20Indah!5e0!3m2!1sid!2sid!4v1676137436032!5m2!1sid!2sid" width="1100" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="tombol" data-aos="fade-up" data-aos-duration="2000">
            <a href="https://www.google.com/maps/place/Wisma+Tanjung+Indah/@3.518461,98.789559,17z/data=!4m6!3m5!1s0x303139b57406ae95:0xed5434408264a54e!8m2!3d3.5184606!4d98.7895589!16s%2Fg%2F11cm0g52q0?hl=id" target="_blanks" class="btnmd"><i class="fa fa-location-dot"></i> Buka Google Maps</a>
        </div>
    </div>

    <div class="garis-bawah"></div>

    <div id="tentangmm">
        <div class="tentang" data-aos="fade-up" data-aos-duration="2000">
            <p>Gallery Our Moment</p>
        </div>

        <div class="fotos" data-aos="fade-up" data-aos-duration="2000">
            <img class="gale" src="assets/gallery/12.jpg" alt="satu">
            <img class="gale" src="assets/gallery/3.jpg" alt="dua">
            <img class="gale" src="assets/gallery/2.jpg" alt="tiga">
        </div>

        <div class="fotos" data-aos="fade-up" data-aos-duration="2000">
            <img class="gale" src="assets/gallery/6.jpg" alt="dua">
            <img class="gale" src="assets/gallery/5.jpg" alt="tiga">
            <img class="gale" src="assets/gallery/7.jpg" alt="satu">
        </div>

        <div class="fotos" data-aos="fade-up" data-aos-duration="2000">
            <img class="gale" src="assets/gallery/9.jpg" alt="satu">
            <img class="gale" src="assets/gallery/8.jpg" alt="dua">
            <img class="gale" src="assets/gallery/4.jpg" alt="tiga">
        </div>

        <div class="fotos" data-aos="fade-up" data-aos-duration="2000">
            <img class="gale" src="assets/gallery/1.jpg" alt="satu">
            <img class="gale" src="assets/gallery/10.jpg" alt="dua">
            <img class="gale" src="assets/gallery/11.jpg" alt="tiga">
        </div>

    </div>

    <div class="garis-bawah"></div>

    <div id="wedding-gift">
        <p class="wg" data-aos="fade-up" data-aos-duration="2000">Wedding Gift</p>
        <p data-aos="fade-up" data-aos-duration="2000">
            Bagi bapak/ibu/saudara/i yang ingin mengirimkan hadiah pernikahan dapat melalui virtual account atau e-wallet di bawah ini:
        </p>

        <div class="rekening" data-aos="zoom-in" data-aos-duration="2000">
            <p class="nama-bank">Jenius/BTPN</p>
            <p class="norek">90160258936</p>
            <p>a/n DWISTAR MUDA ALACHMAD</p>
            <!-- <a href="" onclick="salin()" id="norek" class="btn-ig"><i class="fas fa-copy"></i> salin no. rekening</a> -->
        </div>

        <div class="rekening" data-aos="zoom-in" data-aos-duration="2000">
            <p class="nama-bank">BRI</p>
            <p class="norek">338001054599535</p>
            <p>a/n NIRMALA SARI</p>
            <!-- <a href="" onclick="salin()" id="norek" class="btn-ig"><i class="fas fa-copy"></i> salin no. rekening</a> -->
        </div>
    </div>

    <div class="garis-bawah"></div>

    <div id="ucapan">
        <div class="komentar" data-aos="fade-up" data-aos-duration="2000">
            <p>Ucapan & Doa</p>
        </div>

        <div class="formulir" data-aos="fade-up" data-aos-duration="2000">
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
                    <textarea name="cakap" id="cakap" class="ucapan" cols="10" rows="5" placeholder="Ucapan & Doa" aria-valuetext="ucapan anonymous"></textarea>
                </div>

                <button class="btnmd" name="btn-kirim"><i class="fa fa-comments"></i> Kirim Ucapan</button>

            </form>
        </div>

        <div id="list-ucapan" data-aos="fade-up" data-aos-duration="2000">
            <?php foreach ($data_ucapan as $ucap) : ?>
                <div class="wrap-ucapan">
                    <p class="nama-lengkap"><?= $ucap['nama_lengkap']; ?></p>
                    <hr>
                    <p class="ucapan-doa"><?= $ucap['ucapan']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>


    </div>


    <div id="footer">
        <div class="copyright">
            <p>&copy; Muda & Mala - Undangan Resepsi Pernikahan, 2023</p>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        function salin() {
            document.getElementById("norek").select();
            document.execCommand("copy");
            alert("Nomor Rekening Berhasil Disalin Ke Clipboard.");
        }
    </script>
</body>

</html>