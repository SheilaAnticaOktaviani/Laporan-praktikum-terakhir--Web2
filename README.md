# 📰 Repositori Portal Berita – Pemrograman Web 2

Dokumentasi Akhir Praktikum Pemrograman Web 2 | Implementasi Integrasi CodeIgniter 4 + VueJS
**Universitas Pelita Bangsa, Bekasi** **Dosen Pengampu:** Agung Nugroho | **Tahun Akademik:** 2024/2025

* **Nama Lengkap:** Sheila Antica Oktavian  
* **Nomor Induk Mahasiswa (NIM):** 312410002  
* **Kelas:** I241A  

> **📌 Catatan Pengantar:** > Seluruh berkas pengerjaan tugas laboratorium disimpan secara terstruktur di dalam direktori `praktikum/`. Folder tersebut dibagi menjadi 3 sub-direktori utama yang mencakup modul pembelajaran 1 sampai 14. Setiap folder materi telah dilengkapi dengan dokumen `readme.md` mandiri untuk menyajikan laporan yang lebih mendalam.

---

## 📅 Silabus & Pemetaan Materi Praktikum

| No | Modul Pembelajaran | Inti Bahasan & Pokok Pembahasan |
| :---: | :--- | :--- |
| **01** | Modul Pembelajaran 01 | Pengenalan Pola Desain MVC & Arsitektur Routing Dasar |
| **02** | Modul Pembelajaran 02 | Operasi Pengelolaan Data (CRUD) untuk Konten Artikel |
| **03** | Modul Pembelajaran 03 | Manajemen Tampilan Terpusat via View Layout & Komponen View Cell |
| **04** | Modul Pembelajaran 04 | Sistem Autentikasi Pengguna & Penerapan Lapisan Proteksi Auth Filter |
| **05** | Modul Pembelajaran 05 | Pembagian Halaman Data (Pagination) & Optimasi Fitur Pencarian |
| **06** | Modul Pembelajaran 06 | Implementasi Relasi Basis Data & Pemanfaatan Fitur Query Builder |
| **07** | Modul Pembelajaran 07 | Fitur Unggah Berkas & Validasi Keamanan Dokumen Gambar |
| **08** | Modul Pembelajaran 08 | Manajemen Pertukaran Data Asinkronus Menggunakan Teknologi AJAX |
| **09** | Modul Pembelajaran 09 | Integrasi Sinkronisasi AJAX untuk Fitur Pagination & Pencarian Dinamis |
| **10** | Modul Pembelajaran 10 | Perancangan Arsitektur Backend Berbasis Layanan RESTful API |
| **11** | Modul Pembelajaran 11 | Implementasi Library VueJS Framework untuk Sisi Antarmuka (Frontend) |
| **12** | Modul Pembelajaran 12 | Pembuatan Komponen Aplikasi Berbasis Single Page Application (SPA) |
| **13** | Modul Pembelajaran 13 | Sistem Proteksi Navigasi & Sesi Login pada Aplikasi Sisi Client |
| **14** | Modul Pembelajaran 14 | Manajemen Keamanan Lapisan API & Mekanisme Token Authentication |

---

## 🛠️ Stack Teknologi & Prasyarat Sistem

### Kebutuhan Lingkungan Perangkat Lunak
* **Runtime PHP:** Versi 8.0 atau yang lebih baru
* **Sistem Basis Data:** MySQL / MariaDB
* **Local Server Bundle:** Aplikasi XAMPP (Apache dan MySQL)
* **Dependency Manager:** Composer
* **Runtime Node.js:** Diperlukan untuk mendukung manajemen perkakas frontend (opsional)
* **API Client:** Postman (digunakan untuk pengujian endpoint RESTful API)

---

## 🚀 Prosedur Instalasi & Pengaktifan Aplikasi

### 1. Duplikasi Repositori Lokal
Unduh salinan berkas repositori ini ke dalam direktori lokal komputer Anda, lalu masuk ke folder proyek tersebut:
```bash
git clone [https://github.com/](https://github.com/)<username>/<nama-repo>.git
cd <nama-repo>
```
## 2. Penyesuaian Berkas Environment
Salin berkas konfigurasi default bawaan dari framework untuk dijadikan file konfigurasi aktif .env:
```
cp env .env
```
Buka file .env yang baru dibuat, kemudian pastikan mode aplikasi disesuaikan menjadi mode pengembangan:
```
CI_ENVIRONMENT = development
```
## 3. Sinkronisasi Koneksi Basis Data
Sesuaikan parameter pengaturan database pada file .env agar selaras dengan kredensial dari server lokal Anda:
```
Cuplikan kode
database.default.hostname = localhost
database.default.database = lab_ci4
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
```
