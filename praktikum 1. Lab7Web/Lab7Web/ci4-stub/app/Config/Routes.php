<?php

// Tambahkan baris-baris berikut ke dalam file app/Config/Routes.php
// di bawah route default yang sudah ada:

$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
