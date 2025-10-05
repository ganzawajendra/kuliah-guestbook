# Guestbook Project

Proyek sederhana Guestbook (Buku Tamu) yang dibangun menggunakan **Laravel**.

Aplikasi ini mendemonstrasikan fungsionalitas dasar seperti menampilkan data statis dari Controller dan memproses input form tanpa menggunakan database. Website untuk memnuhi tugas dari mata kuliah "Pemrograman Berbasis Framework"

---

## Persyaratan (Prerequisites)

Untuk menjalankan proyek ini, Anda memerlukan:

1.  **PHP** (Versi 8.1 atau yang lebih baru)
2.  **Composer** (Pengelola *dependencies* PHP)
3.  **Git** (Untuk *clone* repositori)

---

## Langkah-Langkah Instalasi & Menjalankan Aplikasi

Ikuti langkah-langkah di bawah ini di terminal Anda untuk menyiapkan dan menjalankan aplikasi Guestbook:

### 1. Clone Repositori

Unduh kode proyek ke komputer lokal Anda:

```bash
git clone https://github.com/ganzawajendra/kuliah-guestbook.git
cd guestbook
```
### 2. Instalasi Dependencies
```bash
composer install
```
### 3. Konfigurasi Environment
```bash
# Membuat file .env dari template
cp .env.example .env
# Menghasilkan Application Key
php artisan key:generate
```
### 4. Jalankan Server Development
```bash
php artisan serve
```
### 5. Akses Aplikasi
```bash
http://127.0.0.1:8000/guestbook
```


