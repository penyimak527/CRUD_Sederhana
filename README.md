TodoList (CRUD Sederhana)
Aplikasi web sederhana berbasis PHP murni untuk mengelola daftar tugas pribadi dengan fungsi CRUD (Create, Read, Update, Delete). Repository ini berada di folder crud_sederhana. Penggunaan proyek ini memerlukan izin terlebih dahulu dari pencipta.

Fitur

✅ Tambah tugas baru
✅ Lihat daftar tugas
✅ Edit tugas
✅ Hapus tugas


Prasyarat

PHP 7.4 atau lebih baru
Server lokal (misalnya XAMPP, WAMP, atau Laragon)
MySQL
Web browser (Chrome, Firefox, dll.)


Instalasi
1. Clone Repository
git clone https://github.com/username/todolist.git

2. Masuk ke Direktori
cd crud_sederhana

3. Konfigurasi Database

Buat database di MySQL.
Impor file SQL dari folder database/.
Edit koneksi.php untuk mengatur koneksi database.

4. Jalankan Aplikasi

Salin folder crud_sederhana ke direktori server (misalnya htdocs pada XAMPP).

Jalankan server lokal:
php -S localhost:8000


Buka http://localhost:8000 di browser.



Struktur Folder
crud_sederhana/
├── assets/             # File CSS/JS (jika ada, menggunakan Bootstrap)
├── controller/         # Logika kontrol (misalnya delete.php, edit.php, tambah.php)
├── database/           # File SQL untuk struktur database
├── koneksi.php         # File koneksi database
├── page/               # Halaman PHP (edit.php, tambah.php, index.php)
├── README.md           # Panduan ini


Cara Penggunaan

Tambah Tugas: Isi form di tambah.php, lalu simpan.
Lihat Tugas: Buka index.php untuk daftar tugas.
Edit Tugas: Gunakan edit.php untuk mengubah tugas.
Hapus Tugas: Klik opsi hapus di index.php via delete.php.


Teknologi

Frontend: HTML, CSS (opsional, menggunakan Bootstrap)
Backend: PHP murni
Database: MySQL


Kontribusi
Penggunaan untuk tujuan pribadi atau publik membutuhkan izin dari pencipta. Untuk kontribusi:

Fork repository.

Buat branch:
git checkout -b fitur-baru


Commit perubahan:
git commit -m "Tambah fitur"


Push branch:
git push origin fitur-baru


Buat Pull Request setelah mendapatkan izin.



Lisensi
MIT LicenseHarus izin terlebih dahulu jika ingin menggunakan untuk publik.
