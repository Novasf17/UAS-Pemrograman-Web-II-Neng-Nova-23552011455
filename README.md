# 📚 BookVerse - Sistem Manajemen Perpustakaan Digital

BookVerse merupakan aplikasi berbasis web yang dikembangkan menggunakan **Laravel 12** sebagai proyek UAS Mata Kuliah **Pemrograman Web II**. Aplikasi ini digunakan untuk membantu proses pengelolaan data buku perpustakaan secara digital sehingga lebih mudah, cepat, dan efisien.

## Identitas Mahasiswa

**Nama :** Neng Nova Siti Fathonah

**NIM :** 23552011455

**Mata Kuliah :** Pemrograman Web II

**Dosen Pengampu :** Muhammad Reksa Ariansyah, M.Kom.

# Deskripsi Aplikasi

BookVerse adalah aplikasi manajemen perpustakaan sederhana yang memiliki sistem autentikasi (Login & Register) serta fitur CRUD (Create, Read, Update, Delete) data buku.

Aplikasi ini dibangun menggunakan framework Laravel dengan database MySQL.

# Fitur Aplikasi

✅ Login Admin

✅ Register Admin

✅ Dashboard Admin

✅ Menampilkan Data Buku

✅ Menambahkan Data Buku

✅ Mengubah Data Buku

✅ Menghapus Data Buku

✅ Profil Admin

✅ Logout

# Teknologi yang Digunakan

- Laravel 12
- PHP 8.x
- MySQL
- Laravel Breeze
- Tailwind CSS
- Vite
- HTML5
- CSS3
- JavaScript
- Git
- GitHub
- XAMPP
- 
# Struktur Project`
bookverse
│
├── app
├── bootstrap
├── config
├── database
├── public
├── resources
│   ├── views
│   ├── css
│   └── js
├── routes
├── storage
├── vendor
├── .env
├── artisan
└── composer.json

# Cara Menjalankan Project

### 1. Clone Repository

```bash
git clone https://github.com/Novasf17/UAS-Pemrograman-Web-II-Neng-Nova-23552011455.git
```
Masuk ke folder project

```bash
cd bookverse
```
### 2. Install Dependency

```bash
composer install
```
```bash
npm install
```
### 3. Copy File Environment

```bash
cp .env.example .env
```
Generate Key

```bash
php artisan key:generate
```
### 4. Konfigurasi Database

Buat database baru di phpMyAdmin
```
bookverse
```
Kemudian ubah file **.env**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bookverse
DB_USERNAME=root
DB_PASSWORD=
```
---
### 5. Jalankan Migration

```bash
php artisan migrate
```
---
### 6. Jalankan Server
Terminal 1
```bash
php artisan serve
```
Terminal 2
```bash
npm run dev
```
Buka browser
```
http://127.0.0.1:8000
```
---
# Screenshot

## Halaman Login

<img width="1536" height="1024" alt="WhatsApp Image 2026-07-05 at 12 08 47" src="https://github.com/user-attachments/assets/237fac09-85d5-4cb6-b36b-3cd3652c1ef4" />

## Dashboard Admin
<img width="1536" height="1024" alt="WhatsApp Image 2026-07-05 at 12 08 46" src="https://github.com/user-attachments/assets/2df4e71a-3a8a-4a18-be4d-79b837306e71" />


## Data Buku

_
## Tambah Buku


## Edit Buku


# Database

Nama Database
```
bookverse
```
Tabel

- users
- books
- cache
- jobs

---
# Fitur CRUD

| Fitur | Status |
|--------|--------|
| Create | ✅ |
| Read | ✅ |
| Update | ✅ |
| Delete | ✅ 
---
# Lisensi

Project ini dibuat sebagai tugas UAS Mata Kuliah **Pemrograman Web II**.
---
# Author

**Neng Nova Siti Fathonah**
---
# ⭐ Terima Kasih

Terima kasih telah mengunjungi repository ini.

Semoga aplikasi BookVerse dapat bermanfaat sebagai media pembelajaran pengembangan aplikasi berbasis web menggunakan Laravel.




<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
