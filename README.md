# PBW — Pemrograman Berbasis Web

Repository ini berisi kumpulan latihan dan proyek mini mata kuliah **Pemrograman Berbasis Web (PBW)** yang dibangun menggunakan **HTML5, CSS3, JavaScript, PHP, dan MySQL**.

## Daftar Proyek & Latihan

| Direktori | Deskripsi | Teknologi |
| --- | --- | --- |
| `Pegunungan/` | *Landing page* informasi pegunungan Indonesia (*"Menjelajahi Deretan Gunung Terindah di Indonesia"*) dilengkapi galeri foto dan form pesan yang terhubung ke database MySQL (`db_Pegunungan`). | HTML, CSS, JavaScript, PHP, MySQL |
| `Tugas1PBW/` | Website *Daily Journal* multi-halaman (`Home.html`, `Article.html`, `Gallery.html`) dengan navigasi antarhalaman dan koleksi gambar. | HTML |
| `latihan-minggu-4/` | Latihan elemen dasar HTML, hyperlink, gambar, tabel nilai, serta form input (`Latihan_1.html`, `Latihan_2.html`). | HTML |

## Cara Menjalankan

### File HTML Statis (`Tugas1PBW/` dan `latihan-minggu-4/`)
Buka file `.html` (misalnya `Home.html` atau `Latihan_1.html`) langsung di browser atau gunakan ekstensi seperti *Live Server* di VS Code.

### Proyek PHP & MySQL (`Pegunungan/`)
1. Pindahkan atau clone repository ini ke direktori root web server lokal (misalnya `htdocs/` pada XAMPP).
2. Jalankan layanan **Apache** dan **MySQL**.
3. Buat database MySQL bernama `db_Pegunungan` beserta tabel `pesan` (kolom: `nama`, `email`, `pesan`) untuk fitur formulir kontak pada `Pegunungan/index.php`.
4. Akses melalui browser pada alamat `http://localhost/PBW/Pegunungan/`.

## Lisensi

Repository ini dirilis di bawah [MIT License](LICENSE).
