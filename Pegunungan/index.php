<?php
// 1. Koneksi ke Database
$koneksi = mysqli_connect("localhost", "root", "", "db_Pegunungan");

// 2. Cek apakah tombol kirim ditekan
if (isset($_POST['kirim'])) {
    // 3. Ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // 4. Masukkan ke database
    $sql = "INSERT INTO pesan (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
    
    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Terima kasih! Pesanmu sudah tersimpan.');</script>";
    } else {
        echo "<script>alert('Gagal mengirim pesan.');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">
 <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
 <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap"
 rel="stylesheet" /> <title> HOME | Landing Page </title>
    </head>
        <body>
            <header>
                <section class="navigation">
 <div class="container">
 <div class="box-navigation">
 <div class="box">
<h1>Logo</h1>
</div>
 <div class="box menu-navigation">
 <ul>
 <li> <i class="ri-home-3-line"></i> <a href="#beranda">Beranda</a> </li>
<li> <i class="ri-information-line"></i> <a href="#about">About</a> </li>
 <li> <i class="ri-dashboard-line"></i> <a href="#famous">Famous</a> </li>
<li> <i class="ri-image-line"></i> <a href="#gallery">Gallery</a> </li>
<li> <i class="ri-contacts-line"></i> <a href="#contact">Contact</a> </li>
 </ul>
 </div>
<div class="box menu-bar">
<i class="ri-menu-3-fill" style="color: white;"></i>
 </div>
 </div>
 </div>
    </section>
            <section class ="hero" id="beranda">
            <h1>
                Menjelajahi Deretan Gunung Terindah di Indonesia
            </h1>
    </section>
            </header>

     <section class="about" id="about"> 
        <div class="container">
            <div class="box-about">
                <div class="box box-text" data-aos="fade-right">
                <h1>
                    Gunung
                </h1>
            <p>Gunung adalah bentang alam daratan yang menonjol tinggi secara signifikan dari wilayah di sekitarnya, biasanya didefinisikan memiliki ketinggian lebih dari 600 meter di atas permukaan laut dan dicirikan oleh lereng yang curam dan puncak yang terbatas; secara geologis, gunung terbentuk melalui aktivitas lempeng tektonik seperti tumbukan, patahan, atau letusan vulkanik, dan memiliki peran krusial sebagai sumber utama air, pengatur iklim regional, serta habitat bagi keanekaragaman hayati dengan zona vegetasi yang berbeda-beda dari kaki hingga puncaknya.</p>
                </div>
            <div class="box box-image" data-aos="fade-left">
            <img src="foto/edelweis.jpeg" alt="Bunga edelweis">
        </div>
    </div>
 </div>
</section>
                    <section class="famous" id="famous">
                        <div class="container">
                            <div class="box-famous">
                                <div class="box" data-aos="zoom-in">
                                        <img src="foto/Rinjani.jpeg" alt="Gunung Rinjani">
                                            <h3>
                                                Gunung Rinjani
                                            </h3>
                    <p>Gunung Rinjani (3.726 mdpl): Gunung berapi aktif tertinggi kedua di Lombok, terkenal dengan keindahan kaldera raksasa yang menampung Danau Segara Anak dan kerucut anak gunung Barujari, menawarkan pendakian yang menantang dengan pemandangan monumental.</p>
                                 </div>
                            <div class="box" data-aos="zoom-in" data-aos-delay="200">
                        <img src="foto/Merbabu.jpeg" alt="Gunung Merbabu">
                                <h3>
                                    Gunung Merbabu
                                </h3>
                                <p>Gunung Merbabu (3.145 mdpl): Gunung berapi tidak aktif di Jawa Tengah, terkenal dengan sabana luas yang indah di jalur pendakiannya dan menyajikan pemandangan spektakuler Gunung Merapi yang berdekatan dari puncaknya.</p>
                            </div>
                        <div class="box" data-aos="zoom-in" data-aos-delay="400">
                                    <img src="foto/Gunung prau.jpeg" alt="Gunung Prau">
                                        <h3>
                                            Gunung Prau
                                        </h3>
                         <p>Gunung Prau (2.590 mdpl): Gunung populer di Dataran Tinggi Dieng, Jawa Tengah, dikenal karena puncaknya berupa padang rumput luas dan merupakan spot favorit untuk menyaksikan Golden Sunrise dengan latar jajaran gunung-gunung besar.</p>
                            </div>
                        </div>
                </div>
        </section>

                <section class="gallery" id="gallery">
            <div class="container">
                <h1>Our Gallery</h1>
            <div class="box-gallery">
        <div class="box" data-aos="fade-up" data-aos-delay="0"><img src="foto/jayawijaya.jpeg" alt="Gunung Jayawijaya"> Gunung Jayawijaya </div>
        <div class="box" data-aos="fade-up" data-aos-delay="100"><img src="foto/Tea Fields of Gunung Kerinci.jpeg" alt="Gunung Kerinci"> Gunung Kerinci </div>
         <div class="box" data-aos="fade-up" data-aos-delay="200"><img src="foto/Kelimutu Volcano in Komodo National Park, Indonesia.jpeg" alt="Gunung Kelimutu"> Gunung Kelimutu </div>
        <div class="box" data-aos="fade-up" data-aos-delay="300"><img src="foto/Kawah Ijen volcano.jpeg" alt="Gunung Ijen"> Gunung Ijen </div>
        <div class="box" data-aos="fade-up" data-aos-delay="400"><img src="foto/Gunung gede.jpeg" alt="Gunung Gede"> Gunung Gede </div>
        <div class="box" data-aos="fade-up" data-aos-delay="500"><img src="foto/Gunung sindoro.jpeg" alt="Gunung Sindoro"> Gunung Sindoro </div>
    </div>
 </div>
 </section>

        <section class="contact" id="contact">
        <div class="container">
        <div class="box-contact">
            <div class="box" data-aos="fade-right">
                <h1>Contact</h1>
                    </div>
                        <div class="box" data-aos="fade-left">
            <form method="POST" action="">
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Masukkan Email" required>

    <label for="pesan">Pesan</label>
    <textarea id="pesan" name="pesan" placeholder="Masukkan Pesan..."></textarea>

    <button type="submit" name="kirim">Kirim Pesan</button>
</form>
 </div>
 </div>
 </div>
 </section>
 <footer>
        <div class="container">
         <p>&copy; Baraza Nandian Syah.</p>
 </div>
 </footer>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 
        <script src="script.js"></script>
 <script>
 AOS.init({
 duration: 1000,
 once: true,
 });
 </script>
</body>
</html>