# Lab7Web — Praktikum 1: PHP Framework (CodeIgniter 4)

**Mata Kuliah:** Pemrograman Web 2  
**Universitas Pelita Bangsa**  
**Dosen:** Agung Nugroho (agung@pelitabangsa.ac.id)

---

## Tujuan Praktikum

1. Memahami konsep dasar Framework.
2. Memahami konsep dasar MVC (Model-View-Controller).
3. Membuat program sederhana menggunakan Framework CodeIgniter 4.

---

## Langkah-langkah Praktikum

### 1. Persiapan — Konfigurasi PHP Extension

Sebelum menggunakan CodeIgniter 4, beberapa ekstensi PHP harus diaktifkan melalui **XAMPP Control Panel → Apache → Config → PHP.ini**.

Ekstensi yang perlu diaktifkan (hapus tanda `;` di depannya):

| Ekstensi | Kegunaan |
|---|---|
| `php-json` | Bekerja dengan JSON |
| `php-mysqlnd` | Native driver MySQL |
| `php-xml` | Bekerja dengan XML |
| `php-intl` | Aplikasi multibahasa |
| `libcurl` | (Opsional) Curl |

Setelah disimpan, restart Apache.

---

### 2. Instalasi CodeIgniter 4 (Manual)

1. Unduh CodeIgniter dari [https://codeigniter.com/download](https://codeigniter.com/download).
2. Ekstrak file zip ke direktori `htdocs/lab11_ci`.
3. Ubah nama folder hasil ekstrak menjadi `ci4`.
4. Buka browser: `http://localhost/lab11_ci/ci4/public/`

Tampilan awal yang berhasil:

> **Welcome to CodeIgniter 4.x** — *The small framework with powerful features*

---

### 3. Menjalankan CLI (Command Line Interface)

Buka terminal/command prompt, arahkan ke direktori project:

```bash
cd xampp/htdocs/lab11_ci/ci4
php spark
```

CLI menampilkan daftar perintah yang tersedia (cache, serve, db:migrate, dll.).

---

### 4. Mengaktifkan Mode Debugging

Secara default, mode debugging belum aktif. Untuk mengaktifkannya:

1. Ubah nama file `env` menjadi `.env`.
2. Buka file `.env`, ubah baris berikut:

```
CI_ENVIRONMENT = development
```

Setelah aktif, error akan ditampilkan secara detail (misal: `ParseError`, nama file, dan nomor baris).

---

### 5. Memahami Struktur Direktori CI4

```
ci4/
├── app/            ← Area kerja utama aplikasi
│   ├── Config/
│   ├── Controllers/
│   ├── Models/
│   └── Views/
├── public/         ← Asset publik (CSS, JS, gambar, index.php)
├── system/         ← Core CI4 (jangan diubah)
├── writable/       ← Upload, logs, session
├── vendor/         ← Library (Composer)
├── .env            ← Konfigurasi environment
├── spark           ← CLI runner
└── composer.json
```

**Fokus kerja:** folder `app/` untuk kode aplikasi, folder `public/` untuk aset web.

---

### 6. Konsep MVC

CodeIgniter 4 menggunakan arsitektur **MVC (Model-View-Controller)**:

| Komponen | Lokasi | Fungsi |
|---|---|---|
| **Model** | `app/Models/` | Pemodelan data (database, dll.) |
| **View** | `app/Views/` | Tampilan antarmuka (HTML/CSS) |
| **Controller** | `app/Controllers/` | Logic proses, menghubungkan Model & View |

---

### 7. Routing dan Controller

Router CI4 terletak di `app/Config/Routes.php`.

**Menambahkan route baru** di `Routes.php`:

```php
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
```

Cek route yang terdaftar:

```bash
php spark routes
```

---

### 8. Membuat Controller Page

Buat file `app/Controllers/Page.php`:

```php
<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title'   => 'Halaman About',
            'content' => 'Ini adalah halaman About yang menjelaskan tentang isi halaman ini.'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title'   => 'Halaman Kontak',
            'content' => 'Ini adalah halaman Kontak. Silakan hubungi kami.'
        ]);
    }

    public function faqs()
    {
        return view('faqs', [
            'title'   => 'Halaman FAQ',
            'content' => 'Ini adalah halaman FAQ (Frequently Asked Questions).'
        ]);
    }

    public function tos()
    {
        echo "ini halaman Term of Services";
    }
}
```

Setelah controller dibuat, halaman `/about`, `/contact`, dan `/faqs` dapat diakses.

---

### 9. Auto Routing

CI4 memiliki fitur autoroute yang aktif secara default:

```php
$routes->setAutoRoute(true);
```

Dengan autoroute, method `tos()` yang tidak didefinisikan di Routes.php tetap bisa diakses melalui URL: `http://localhost:8080/page/tos`

---

### 10. Membuat View

Buat file view untuk setiap halaman di folder `app/Views/`.

**Contoh `app/Views/about.php`:**

```php
<?= $this->include('template/header'); ?>

<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>

<?= $this->include('template/footer'); ?>
```

Pola yang sama digunakan untuk `contact.php` dan `faqs.php`.

---

### 11. Membuat Layout dengan Template dan CSS

**Struktur template:**

```
app/Views/
├── template/
│   ├── header.php    ← Bagian atas (DOCTYPE, nav, wrapper)
│   └── footer.php    ← Bagian bawah (sidebar, footer, closing tags)
├── about.php
├── contact.php
└── faqs.php
```

File CSS disimpan di `public/style.css` dan dipanggil dari `header.php`:

```html
<link rel="stylesheet" href="<?= base_url('/style.css');?>">
```

**`app/Views/template/header.php`** berisi tag HTML awal, `<header>`, `<nav>`, dan pembuka `<section id="main">`.

**`app/Views/template/footer.php`** berisi penutup `</section>`, `<aside id="sidebar">`, `<footer>`, dan penutup tag HTML.

Navigasi di `header.php` mencakup semua link yang tersedia:

```html
<a href="<?= base_url('/');?>">Home</a>
<a href="<?= base_url('/artikel');?>">Artikel</a>
<a href="<?= base_url('/about');?>">About</a>
<a href="<?= base_url('/contact');?>">Kontak</a>
<a href="<?= base_url('/faqs');?>">FAQ</a>
```

---

## Penyelesaian Tugas

Tugas yang diberikan: *Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.*

**Yang sudah dilengkapi:**

| Route | Controller Method | View File |
|---|---|---|
| `/about` | `Page::about()` | `app/Views/about.php` |
| `/contact` | `Page::contact()` | `app/Views/contact.php` |
| `/faqs` | `Page::faqs()` | `app/Views/faqs.php` |

Semua halaman menggunakan template header dan footer yang sama, sehingga layout konsisten di seluruh halaman navigasi.

---

## Struktur File yang Dibuat/Dimodifikasi

```
ci4/
├── app/
│   ├── Config/
│   │   └── Routes.php          ← Ditambahkan route /about, /contact, /faqs
│   ├── Controllers/
│   │   └── Page.php            ← Controller baru dengan 4 method
│   └── Views/
│       ├── template/
│       │   ├── header.php      ← Template header dengan navigasi lengkap
│       │   └── footer.php      ← Template footer dengan sidebar
│       ├── about.php           ← View halaman About
│       ├── contact.php         ← View halaman Contact
│       └── faqs.php            ← View halaman FAQ
└── public/
    └── style.css               ← CSS layout sederhana
```

---

## Cara Menjalankan

1. Pastikan XAMPP berjalan (Apache aktif).
2. Letakkan folder `ci4` di dalam `htdocs/lab11_ci/`.
3. Salin semua file dari repo ini ke lokasi yang sesuai di dalam `ci4/`.
4. Buka browser dan akses:
   - `http://localhost/lab11_ci/ci4/public/` → Home
   - `http://localhost/lab11_ci/ci4/public/about` → About
   - `http://localhost/lab11_ci/ci4/public/contact` → Kontak
   - `http://localhost/lab11_ci/ci4/public/faqs` → FAQ

Atau gunakan CLI development server:

```bash
cd htdocs/lab11_ci/ci4
php spark serve
```

Lalu buka `http://localhost:8080`.

---

*Lab7Web — Universitas Pelita Bangsa © 2024*
