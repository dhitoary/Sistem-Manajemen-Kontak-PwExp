# Dhito Aryo Trengginas — Sistem Manajemen Kontak (Tugas Akhir Praktikum PW)

[![PHP](https://img.shields.io/badge/PHP-Native-blue.svg)](https://www.php.net/) [![HTML](https://img.shields.io/badge/HTML-5-orange.svg)](https://developer.mozilla.org/en-US/docs/Web/HTML) [![CSS](https://img.shields.io/badge/CSS-3-green.svg)](https://developer.mozilla.org/en-US/docs/Web/CSS)

Selamat datang! Ini adalah repository untuk Tugas Akhir Praktikum Pemrograman Web (Percobaan 4) — sebuah **Sistem Manajemen Kontak Sederhana** yang dinamis.

---

## 🚀 Tentang Proyek

Saya **Dhito Aryo Trengginas** — Mahasiswa Teknik Informatika (NPM **2315061015**).

Proyek ini adalah implementasi dari Modul Praktikum Percobaan 4: PHP & Manipulasi Form. [cite_start]Tugas ini menuntut pembuatan aplikasi web dinamis untuk mengelola data kontak, yang mencakup semua aspek dasar **CRUD (Create, Read, Update, Delete)** dan **Session Management** [cite: 578-582].

- **Bahasa:** PHP, HTML5, CSS3
- **Data Storage:** PHP `$_SESSION`. Seluruh data kontak disimpan di dalam sesi server.
- **Tema:** Desain 2-layer (konten di atas latar belakang gradasi hijau-putih) yang *aesthetic* dan sederhana.

---

## ✨ Fitur Utama

Sistem ini mencakup fungsionalitas penuh untuk manajemen kontak:

* [cite_start]**Session Management:** Sistem login dan logout aman menggunakan `$_SESSION` PHP [cite: 501-576].
* [cite_start]**Create:** Menambah kontak baru dengan validasi form (nama, email, telepon) [cite: 281-383].
* **Read:** Menampilkan semua data kontak dalam tabel yang rapi.
* **Update:** Mengedit data kontak yang sudah ada.
* **Delete:** Menghapus data kontak dengan validasi konfirmasi dan token (Anti-CSRF).

---

## 📸 Tampilan (Screenshots)

Berikut adalah beberapa tampilan dari aplikasi:

### 1. Halaman Login
Halaman untuk autentikasi pengguna.
*(Letakkan screenshot Anda di `Images/login.png`)*
![Halaman Login](Images/login.png)

### 2. Dashboard Utama
Menampilkan daftar semua kontak yang tersimpan di dalam sesi.
*(Letakkan screenshot Anda di `Images/dashboard.png`)*
![Dashboard](Images/dashboard.png)
![DashboardTambah](Images/dashboardtambah.png)

### 3. Form Tambah & Validasi
Form untuk menambah data baru, dilengkapi validasi error-handling.
*(Letakkan screenshot Anda di `Images/tambah.png`)*
![Form Tambah](Images/tambah.png)
![Email Gagal](Images/email.png)
![Telepon Gagal](Images/telepon.png)

### 4. Form Edit
Form untuk memperbarui data kontak yang sudah ada.
*(Letakkan screenshot Anda di `Images/edit.png`)*
![Form Edit](Images/edit.png)

### 5. Validasi Hapus
Pesan konfirmasi (alert) sebelum data dihapus secara permanen.
*(Letakkan screenshot Anda di `Images/hapus.png`)*
![Validasi Hapus](Images/hapus.png)

### 6. Tampilan Data Session (Debug)
Tampilan *real-time* dari data mentah `$_SESSION` yang ada di server, menunjukkan data kontak tersimpan.
*(Letakkan screenshot Anda di `Images/session.png`)*
![Tampilan Session](Images/dashboardsession.png)
![Tampilan Json](Images/json.png)

---

## 📬 Kontak

- **Email:** aryodhito20@gmail.com
- **GitHub:** https://github.com/dhitoary
- **LinkedIn:** https://www.linkedin.com/in/dhito-aryo-trengginas-1b886629

---

Terima kasih sudah melihat proyek ini.
