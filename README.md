Sistem Informasi Manajemen Artikel Berbasis Web
Tugas UAS Pemrograman Web — Laravel Framework

 Identitas Mahasiswa
Field	Detail
Nama	SHEILA ANTICA OKTAVIANI
NIM	312410002
Mata Kuliah	Pemrograman Web
📌 Deskripsi Project
Aplikasi web berbasis Laravel untuk mengelola konten artikel secara dinamis. Sistem ini mencakup fitur autentikasi pengguna, manajemen artikel, serta panel admin untuk pengelolaan data secara menyeluruh.

Fitur Utama
 Autentikasi (Login & Register)
 CRUD Artikel (Create, Read, Update, Delete)
 Kategori & Filter Artikel
 Manajemen User (Admin & Member)
 Tampilan Responsif
 Teknologi yang Digunakan
Teknologi	Versi
PHP	8.1+
Laravel	10.x
MySQL	8.0
Bootstrap	5.3
JavaScript	ES6
 Cara Instalasi
# 1. Clone repository
git clone https://github.com/nanda628h/UAS_Web_2.git

# 2. Masuk ke folder project
cd UAS_Web_2

# 3. Install dependencies
composer install
npm install

# 4. Copy file environment
cp .env.example .env

# 5. Generate app key
php artisan key:generate

# 6. Konfigurasi database di file .env
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

# 7. Migrasi database
php artisan migrate --seed

# 8. Jalankan aplikasi
php artisan serve
 Struktur Folder
UAS_Web_2/
├── app/
│   ├── Http/Controllers/
│   │   ├── ArtikelController.php
│   │   ├── AdminController.php
│   │   └── AuthController.php
│   └── Models/
│       ├── ArtikelModel.php
│       └── UserModel.php
├── resources/views/
│   ├── layouts/
│   ├── artikel/
│   └── admin/
├── routes/
│   └── web.php
└── database/
    └── migrations/
 Screenshot
(Tambahkan screenshot aplikasi di sini)

 Lisensi
Project ini dibuat untuk keperluan akademik — Universitas Pelita Bangsa, Semester Genap 2024/2025.
