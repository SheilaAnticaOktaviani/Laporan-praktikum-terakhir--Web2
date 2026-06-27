#  Sistem Informasi Manajemen Artikel Berbasis Web (CMS)

###  Dokumentasi Proyek Akhir Semester (UAS) — Pemrograman Web
Proyek ini dikembangkan menggunakan **Laravel Framework** sebagai syarat pemenuhan serta evaluasi akhir pada mata kuliah Pemrograman Web.

---

##  Identitas Pengembang
| Komponen Data | Informasi Akademik |
| :--- | :--- |
| **Nama Lengkap** | SHEILA ANTICA OKTAVIANI|
| **NIM** | 312410002 |
| **Mata Kuliah** | Pemrograman Web |
| **Institusi** | Universitas Pelita Bangsa |

---

```
app/
├── Cells/
│   └── ArtikelTerkini.php       ← Praktikum 3 - View Cell
├── Controllers/
│   ├── Home.php
│   ├── Page.php
│   ├── Artikel.php              ← Praktikum 2,5,6,7
│   └── User.php                 ← Praktikum 4
├── Filters/
│   └── Auth.php                 ← Praktikum 4
├── Models/
│   ├── ArtikelModel.php         ← Praktikum 2,6
│   ├── KategoriModel.php        ← Praktikum 6
│   └── UserModel.php            ← Praktikum 4
├── Database/Seeds/
│   └── UserSeeder.php           ← Praktikum 4
├── Config/
│   ├── Routes.php
│   └── Filters.php
└── Views/
    ├── layout/main.php          ← Praktikum 3 - View Layout
    ├── components/
    │   └── artikel_terkini.php  ← Praktikum 3 - View Cell
    ├── template/
    │   ├── header.php
    │   ├── footer.php
    │   ├── admin_header.php
    │   └── admin_footer.php
    ├── artikel/
    │   ├── index.php
    │   ├── detail.php
    │   ├── admin_index.php      ← Praktikum 5 pagination+search
    │   ├── form_add.php         ← Praktikum 7 upload gambar
    │   └── form_edit.php
    └── user/
        └── login.php            ← Praktikum 4
public/
├── style.css
└── gambar/                      ← Folder upload gambar (Praktikum 7)
```

---
##  Ikhtisar Proyek

Aplikasi ini merupakan platform *Content Management System* (CMS) berbasis web yang dirancang khusus untuk mengelola sirkulasi publikasi artikel secara dinamis. Menggunakan arsitektur *Model-View-Controller* (MVC) bawaan Laravel, sistem ini memisahkan logika bisnis backend dengan komponen visual frontend secara efisien, serta menyediakan hak akses yang terproteksi bagi pengguna biasa maupun administrator.

---

##  Fungsionalitas Utama Sistem

* **Autentikasi & Otorisasi Multilevel:** Akses masuk (*Login*) dan pendaftaran (*Register*) yang aman dengan pembagian peran pengguna secara spesifik (**Admin** & **Member**).
* **Manajemen Konten Komprehensif (CRUD):** Fasilitas penuh bagi pengguna berwenang untuk memproduksi (*Create*), menampilkan (*Read*), memperbarui (*Update*), dan menghapus (*Delete*) data artikel.
* **Taksonomi & Filtrasi Dinamis:** Pengelompokan artikel terstruktur berdasarkan kategori tertentu guna mempermudah pencarian informasi oleh pembaca.
* **Panel Kontrol Administrator:** Dasbor khusus bagi Admin untuk melakukan moderasi data pengguna, manajemen kategori, serta pengawasan konten situs secara terpusat.
* **Antarmuka Responsif (Mobile-Ready):** Tata letak halaman yang adaptif di berbagai ukuran perangkat (Mobile, Tablet, Desktop) berkat integrasi framework CSS modern.

---

##  Spesifikasi Teknologi (*Tech-Stack*)

| Komponen | Spesifikasi Minimum / Versi | Peran dalam Sistem |
| :--- | :--- | :--- |
| **PHP** | v8.1+ | Bahasa pemrograman utama sisi server (*Server-side*) |
| **Laravel Framework** | v10.x | *Engine framework* utama berarsitektur MVC |
| **MySQL** | v8.0 | Sistem manajemen basis data relasional (RDBMS) |
| **Bootstrap** | v5.3 | *Library* CSS untuk strukturisasi komponen UI responsif |
| **JavaScript** | ECMAScript 6 (ES6) | Logika interaktivitas dinamis pada sisi klien (*Client-side*) |

---

##  Panduan Langkah Instalasi

Ikuti instruksi di bawah ini untuk melakukan replikasi proyek ke dalam lingkungan pengembangan lokal (*local development environment*):

### 1. Kloning Repositori
Lakukan kloning berkas proyek dari repositori Git menggunakan perintah:
```bash
git clone [https://github.com/nanda628h/UAS_Web_2.git](https://github.com/nanda628h/UAS_Web_2.git)
cd UAS_Web_2
