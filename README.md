# TodoList (CRUD Sederhana) ✨

Aplikasi web sederhana berbasis PHP murni untuk mengelola daftar tugas pribadi dengan fungsi CRUD (Create, Read, Update, Delete). Repository ini berada di folder `crud_sederhana`. **Penggunaan proyek ini memerlukan izin terlebih dahulu dari pencipta**. 📝

---

## Fitur 📋

- ✅ Tambah tugas baru
- ✅ Lihat daftar tugas
- ✅ Edit tugas
- ✅ Hapus tugas

---

## Prasyarat 🛠️

- PHP 7.4 atau lebih baru
- Server lokal (misalnya XAMPP, WAMP, atau Laragon)
- MySQL
- Web browser (Chrome, Firefox, dll.)

---

## Instalasi 🚀

### 1. Clone Repository

```bash
git clone https://github.com/username/todolist.git
```

### 2. Masuk ke Direktori

```bash
cd crud_sederhana
```

### 3. Konfigurasi Database

- Buat database di MySQL.
- Impor file SQL dari folder `database/`.
- Edit `koneksi.php` untuk mengatur koneksi database.

### 4. Jalankan Aplikasi

- Salin folder `crud_sederhana` ke direktori server (misalnya `htdocs` pada XAMPP).
- Jalankan server lokal:

```bash
php -S localhost:8000
```

- Buka [http://localhost:8000](http://localhost:8000) di browser.

---

## Struktur Folder 📂

```
crud_sederhana/
├── assets/             # File CSS/JS (jika ada, menggunakan Bootstrap)
├── controller/         # Logika kontrol (misalnya delete.php, edit.php, tambah.php)
├── database/           # File SQL untuk struktur database
├── koneksi.php         # File koneksi database
├── page/               # Halaman PHP (edit.php, tambah.php, index.php)
├── README.md           # Panduan ini
```

---

## Cara Penggunaan 🖱️

1. **Tambah Tugas**: Isi form di `tambah.php`, lalu simpan.
2. **Lihat Tugas**: Buka `index.php` untuk daftar tugas.
3. **Edit Tugas**: Gunakan `edit.php` untuk mengubah tugas.
4. **Hapus Tugas**: Klik opsi hapus di `index.php` via `delete.php`.

---

## Teknologi 💻

- **Frontend**: HTML, CSS (opsional, menggunakan Bootstrap)
- **Backend**: PHP murni
- **Database**: MySQL

---

## Lisensi 📜

[MIT License](LICENSE)  
**Harus izin terlebih dahulu jika ingin menggunakan untuk publik.**

---