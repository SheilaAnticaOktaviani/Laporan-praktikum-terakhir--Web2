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
## 4. Inisialisasi Database & Migrasi Data Awal
Buatlah sebuah skema basis data baru di dalam server MySQL Anda, lalu jalankan perintah seeder untuk mengisi data pengguna awal:
```
SQL
CREATE DATABASE lab_ci4;
Bash
php spark db:seed UserSeeder
```
## 5. Mengaktifkan Server Development
Jalankan server lokal bawaan dari CodeIgniter dengan mengeksekusi perintah berikut di terminal:
```
Bash
php spark serve
Aplikasi web kini dapat diakses secara langsung melalui penjelajah web (browser) pada tautan: http://localhost:8080
```
📁 Tata Letak & Struktur Direktori Proyek
```
Plaintext
lab_ci4/
├── app/                        ← Logika Inti Aplikasi Sisi Backend (CI4)
│   ├── Controllers/            ← Pengendali Arus Data & Logika Bisnis
│   │   ├── Artikel.php         ← Controller Pengelolaan Berita
│   │   ├── Page.php            ← Controller Manajemen Halaman Statis
│   │   ├── User.php            ← Controller Penanganan Sesi Pengguna
│   │   ├── AjaxController.php  ← Controller Pemrosesan Request Asinkronus
│   │   └── Api/                
│   │       ├── Post.php        ← Endpoint Layanan CRUD RESTful API
│   │       └── Auth.php        ← Endpoint Manajemen Autentikasi API
│   ├── Models/                 ← Representasi Data & Interaksi Tabel Basis Data
│   │   ├── ArtikelModel.php
│   │   ├── UserModel.php
│   │   └── KategoriModel.php
│   ├── Views/                  ← Presentasi Antarmuka Pengguna / UI
│   │   ├── layout/             
│   │   │   └── main.php        ← Master Page Layout Induk
│   │   ├── template/           ← Komponen Tampilan Bersama (Include)
│   │   │   ├── header.php
│   │   │   └── footer.php
│   │   ├── artikel/            ← Lembar Kerja View Khusus Modul Berita
│   │   │   ├── index.php
│   │   │   ├── detail.php
│   │   │   ├── admin_index.php
│   │   │   ├── form_add.php
│   │   │   └── form_edit.php
│   │   ├── user/               
│   │   │   └── login.php       ← Antarmuka Login Ruang Administrator
│   │   ├── components/         
│   │   │   └── artikel_terkini.php
│   │   └── ajax/               
│   │       └── index.php       ← Ruang Kerja Tampilan Berbasis AJAX
│   ├── Cells/                  
│   │   └── ArtikelTerkini.php  ← Logika Widget Komponen Modular Dinamis
│   ├── Filters/                
│   │   ├── Auth.php            ← Penjaga Gerbang Otentikasi Web (Middleware)
│   │   └── ApiAuthFilter.php   ← Sistem Validasi Keamanan Token API
│   └── Config/                 
│       ├── Routes.php          ← Berkas Pemetaan URL Rute Aplikasi
│       └── Filters.php         ← Registrasi Middleware Secara Global
├── public/                     ← Direktori Akses Terbuka / Publik
│   ├── index.php               
│   ├── style.css               
│   ├── gambar/                 ← Direktori Penyimpanan Berkas Hasil Unggahan
│   └── assets/                 
│       └── js/                 
│           └── jquery-3.6.0.min.js
├── lab8_vuejs/                 ← Basis Kode Aplikasi Sisi Frontend (SPA VueJS)
│   ├── index.html              
│   └── assets/                 
│       ├── css/                
│       │   └── style.css       
│       └── js/                 
│           ├── app.js          ← Berkas Inisialisasi Utama Aplikasi Vue
│           └── components/     ← Daftar Komponen Halaman Sisi Frontend
│               ├── Home.js     
│               ├── Artikel.js  
│               ├── Login.js    
│               └── About.js    
├── .env                        
└── spark
```
## Ringkasan Hasil Pembelajaran Praktikum
Modul 1 – Dasar Arsitektur MVC & Konsep Routing
1. Tujuan Kompetensi: Memahami pembagian peran struktur dalam pola desain arsitektur MVC serta teknik pengaturan rute URL pada framework CodeIgniter 4.
2. Konsep Esensial: Model (logika data), View (presentasi visual), dan Controller (jembatan penghubung sistem).
3. Hasil Eksperimen: Proses instalasi awal sistem framework, penyusunan peta routing baik manual maupun otomatis, perancangan Page Controller, serta implementasi layout halaman dasar menggunakan struktur berkas header dan footer.

## Modul 2 – Manajemen CRUD Konten Berita
- Tujuan Kompetensi: Membangun ekosistem pengelolaan data tabel berita secara menyeluruh dan terintegrasi.

- Rancangan Tabel: Struktur tabel artikel dikonfigurasi dengan kolom berupa id, judul berita, ringkasan isi, nama berkas gambar, status publikasi, serta slug tautan.

- Hasil Eksperimen: Penerapan ArtikelModel, perancangan halaman list artikel untuk pembaca umum, halaman baca berita detail berbasis slug, serta dashboard kendali admin untuk operasi manajemen data (input, update, dan delete).


## Modul 3 – Tata Letak Terpadu (Layout) & Komponen Dinamis (View Cell)
- Tujuan Kompetensi: Mengelola struktur presentasi web agar lebih efisien dan terorganisir melalui komponen modular.

## Analisis Struktur Tampilan:

- Metode Include (Parsial): Menyisipkan potongan file ke halaman; sulit dipelihara jika sistem berkembang menjadi besar.

- Metode View Layout: Memanfaatkan satu template induk tunggal yang diwariskan ke halaman anak; pemeliharaan tampilan menjadi terpusat.

### Hasil Eksperimen: Implementasi master template (layout/main.php) berbasis fungsi bawaan extend() dan section(), serta pembuatan widget sidebar dinamis memanfaatkan class ArtikelTerkini sebagai komponen View Cell.

## Modul 4 – Proteksi Area Admin & Penerapan Auth Filter
1. Tujuan Kompetensi: Mengamankan halaman dasbor manajemen administrator dari tindakan akses yang tidak sah.
## Mekanisme Alur Kerja Keamanan:
Setiap permintaan menuju rute /admin akan dievaluasi terlebih dahulu oleh komponen Filter. Jika data sesi (session) ditemukan kosong, sistem otomatis mengalihkan pengguna menuju halaman /user/login. Jika sesi valid, pengguna diizinkan masuk ke Controller tujuan.
### Hasil Eksperimen: Implementasi penyimpanan sandi aman via password_hash(), pembuatan UserModel, integrasi sistem Middleware keamanan, pemanfaatan database seeder untuk akun pengujian awal, dan fungsi penghancuran sesi (logout).

## Modul 5 – Pembagian Halaman (Pagination) & Fitur Cari Konten
1. Tujuan Kompetensi: Mengoptimalkan performa pemuatan data bervolume besar dengan sistem navigasi halaman dan pencarian data yang interaktif.

2. Teknis Implementasi: Menggabungkan logika query filter like() dan method bawaan paginate() langsung melalui object model untuk menampilkan data secara terukur.

3. Hasil Eksperimen: Pembatasan penampilan data sebanyak 10 konten per halaman, pembuatan form pencarian berbasis kata kunci judul, dan mempertahankan query pencarian saat berpindah halaman via perintah pager->only().

## Modul 5 – Pembagian Halaman (Pagination) & Fitur Cari Konten
- Tujuan Kompetensi: Mengoptimalkan performa pemuatan data bervolume besar dengan sistem navigasi halaman dan pencarian data yang interaktif.
- Teknis Implementasi: Menggabungkan logika query filter like() dan method bawaan paginate() langsung melalui object model untuk menampilkan data secara terukur.
- Hasil Eksperimen: Pembatasan penampilan data sebanyak 10 konten per halaman, pembuatan form pencarian berbasis kata kunci judul, dan mempertahankan query pencarian saat berpindah halaman via perintah pager->only().
## Modul 7 – Mekanisme Unggah Berkas & Validasi Gambar
- Tujuan Kompetensi: Menyediakan fasilitas pengunggahan berkas media gambar sebagai pelengkap isi artikel secara aman.
- Mekanisme Kerja: Menangkap kiriman form bertipe multipart, memvalidasi kesesuaian berkas, memindahkan file ke folder publik, dan mencatat nama berkas ke dalam database.
## Strategi Mitigasi Bahaya Keamanan:
- Penyusupan Berkas Berbahaya: Dihalau dengan pengujian tipe berkas (MIME Type) dan ekstensi gambar.
- Konflik Nama Berkas: Diantisipasi menggunakan fitur enkripsi nama berkas acak ($file->store()).
- Beban Server Berlebih: Dibatasi lewat aturan ukuran maksimal (max size).

## Modul 8 – Interaksi Komunikasi Asinkronus Berbasis AJAX
1. Tujuan Kompetensi: Memperbarui muatan data pada halaman web secara langsung tanpa perlu memicu proses pemuatan ulang seluruh halaman (zero-reload).
2. Mekanisme Komunikasi: Aksi pemicu (Event) pada browser ditangkap JavaScript $\rightarrow$ Request dikirim ke server lewat jQuery $\rightarrow$ Server memproses dan membalas dengan format data terstruktur JSON $\rightarrow$ Elemen DOM halaman web diperbarui secara instan.
3. Hasil Eksperimen: Pembuatan komponen AjaxController, penyediaan endpoint penyuplai data, serta pemanfaatan fungsi AJAX jQuery untuk mengelola data secara dinamis.
## Modul 9 – Sistem Navigasi & Pencarian Berbasis AJAX
- Tujuan Kompetensi: Menggabungkan fungsionalitas penjelajahan halaman dan filter pencarian secara asinkronus.
- Hasil Eksperimen: Penulisan logika backend untuk mendeteksi tipe request melalui isAJAX(), pengiriman data balasan berformat JSON, manipulasi tabel dan tautan halaman lewat frontend script, serta penambahan komponen visual indikator loading sewaktu proses penarikan data berjalan.
## Modul 10 – Pengembangan Arsitektur RESTful API
- Tujuan Kompetensi: Menyediakan layanan jembatan pertukaran data yang bersifat platform-agnostic agar bisa dikonsumsi oleh aplikasi klien pihak ketiga.
## Daftar Endpoint yang Tersedia:
- GET /post $\rightarrow$ Mengambil seluruh koleksi artikel.
- GET /post/{id} $\rightarrow$ Membaca satu artikel spesifik.
- POST /post $\rightarrow$ Menambahkan postingan artikel baru.PUT /post/{id} $\rightarrow$ Memperbarui data artikel yang sudah ada.
- DELETE /post/{id} $\rightarrow$ Menghapus data artikel.Efisiensi Kode: Proses registrasi seluruh rute endpoint CRUD di atas diringkas menjadi satu baris perintah memanfaatkan fungsi bawaan $routes->resource().

## Modul 11 – Implementasi Antarmuka Framework VueJS
1. Tujuan Kompetensi: Mengadopsi teknologi kerangka kerja modern pada sisi frontend untuk mengolah data dari RESTful API.
2. Hasil Eksperimen: Integrasi library Axios sebagai media penghubung komunikasi data, pembuatan modal form interaktif untuk fungsi tambah/ubah data, serta sistem konfirmasi pop-up sebelum eksekusi hapus data dijalankan.
## Modul 12 – Pengembangan Aplikasi Satu Halaman (SPA)
- Tujuan Kompetensi: Merancang arsitektur aplikasi web yang responsif memanfaatkan konsep komponen dari Vue Router.
- Hirarki Komponen SPA: Berkas index.html bertindak sebagai container utama yang memuat elemen navigasi link, yang nantinya akan merender komponen halaman seperti Home.js, Artikel.js, atau About.js ke dalam wadah <router-view> tanpa memicu reload browser.
- Hasil Eksperimen: Implementasi mode createWebHashHistory dan penyusunan halaman profil mahasiswa pada views About.
## Modul 13 – Autentikasi Pengguna pada Aplikasi SPA
- Tujuan Kompetensi: Menerapkan sistem manajemen proteksi keamanan rute halaman pada aplikasi berbasis JavaScript client-side.

- Skema Autentikasi: Saat login berhasil, client menerima string token dari server lalu menyimpannya di dalam localStorage. Sebelum berpindah halaman, fungsi router.beforeEach() akan memeriksa keberadaan token tersebut; jika tidak valid, user otomatis diarahkan kembali ke halaman login.

- Hasil Eksperimen: Komponen form otentikasi Login.js, manajemen state login pada browser, dan kontrol tampilan tombol navigasi secara kondisional.

## Modul 14 – Penyelarasan Keamanan End-to-End API & Token Auth
1. Tujuan Kompetensi: Mengamankan jalur pertukaran data API di server sekaligus menyuntikkan token otentikasi secara otomatis dari client.
2. Arsitektur Keamanan Terpadu: Aplikasi VueJS mengambil token dari penyimpanan lokal $\rightarrow$ Axios Interceptor secara otomatis menyisipkan token tersebut ke dalam header HTTP Authorization: Bearer <token> pada setiap request $\rightarrow$ ApiAuthFilter di sisi CodeIgniter 4 memverifikasi validitas token sebelum mengizinkan akses data.
3. Komparasi Lapisan Keamanan:Vue Router Guards: Beroperasi di browser (Client-Side). Berperan menjaga tampilan/halaman agar user-experience lebih baik. Dapat dimanipulasi melalui menu Developer Tools.CI4 Filters: Beroperasi di server (Server-Side). Berperan mengamankan basis data asli dan endpoint API. Bersifat mutlak dan tidak dapat dibobol dari sisi client.

### 🗄️ Rancangan Skema Basis Data (MySQL)
```
SQL
-- 1. Struktur Entitas Tabel Kategori Konten
CREATE TABLE kategori (
    id_kategori   INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama_kategori VARCHAR(100) NOT NULL,
    slug_kategori VARCHAR(100)
);

-- 2. Struktur Entitas Tabel Konten Artikel (Berita)
CREATE TABLE artikel (
    id           INT(11) AUTO_INCREMENT PRIMARY KEY,
    judul        VARCHAR(200) NOT NULL,
    isi          TEXT,
    gambar       VARCHAR(200),
    status       TINYINT(1) DEFAULT 0,
    slug         VARCHAR(200),
    id_kategori  INT(11),
    CONSTRAINT fk_kategori_artikel FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori)
);

-- 3. Struktur Entitas Tabel Autentikasi Pengguna
CREATE TABLE user (
    id           INT(11) AUTO_INCREMENT PRIMARY KEY,
    username     VARCHAR(200) NOT NULL,
    useremail    VARCHAR(200),
    userpassword VARCHAR(200)
);
```
🔑 Akun Akses Default Untuk Pengujian
```
Parameter Akun = Kredensial Akses
Email Pengguna = admin@email.com
Kata Sandiadmin = 123
```
### Catatan Keamanan: Seluruh string kata sandi yang tersimpan di dalam database diproses dalam format hash terenkripsi dengan memanfaatkan algoritma satu arah melalui fungsi bawaan password_hash().

📝 Lisensi & Hak Cipta
Aplikasi proyek ini dibangun khusus untuk memenuhi kriteria penugasan akademis pada mata kuliah Praktikum Pemrograman Web 2.

Universitas Pelita Bangsa, Bekasi © 2024/2025.
