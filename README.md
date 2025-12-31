# Jejak Nusantara – Platform Digital Budaya Indonesia

## 🧭 Deskripsi Proyek
Jejak Nusantara adalah aplikasi web berbasis Laravel yang bertujuan untuk mendokumentasikan, mengenalkan, dan melestarikan budaya Indonesia secara digital.  
Platform ini menyediakan informasi budaya dari berbagai daerah di Indonesia, dilengkapi dengan fitur kontribusi publik agar data budaya dapat terus berkembang.

## 🎯 Tujuan
- Melestarikan budaya Indonesia dalam bentuk digital
- Menjadi media edukasi budaya yang mudah diakses
- Memberi ruang kontribusi publik dalam pendataan budaya
- Mendukung pembelajaran berbasis teknologi

## ✨ Fitur Utama
- 📚 Daftar Budaya Nusantara (lengkap dengan detail)
- 🗺️ Jelajah Budaya Berdasarkan Wilayah
- 🆕 Budaya Terbaru
- 🤝 Kontribusi Budaya oleh Pengguna
- 🛠️ Panel Admin untuk Review Kontribusi
- 📷 Gambar Budaya (Storage Laravel)
- 🔐 Login & Register (Dummy / UI Only)

## 🧑‍💻 Teknologi yang Digunakan
- Laravel 10
- PHP 8
- Blade Template Engine
- Tailwind CSS
- MySQL / MariaDB
- Git & GitHub

## 📂 Struktur Folder Penting
```
jejak-nusantara/
├── app/
├── database/
│   └── seeders/
│       └── CultureSeeder.php
├── public/
│   └── storage/   ← (gambar budaya)
├── resources/
│   └── views/
├── routes/
│   └── web.php
├── .env.example
└── README.md
```

## 🗄️ Database & Dummy Data
Project ini menggunakan **Laravel Seeder** untuk data awal budaya.  
Seeder yang digunakan: `database/seeders/CultureSeeder.php`  

Seeder ini berisi data dummy budaya agar aplikasi langsung menampilkan konten saat dijalankan.

## 🚀 Cara Menjalankan Project
### 1. Clone Repository
```bash
git clone https://github.com/Kipasangind/jejak-nusantara.git
cd jejak-nusantara
```

### 2. Install Dependency
```bash
composer install
```

### 3. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```
⚠️ Atur database di file `.env`

### 4. Migrasi & Seeder
```bash
php artisan migrate --seed
```

### 5. Storage Link
```bash
php artisan storage:link
```

### 6. Jalankan Server
```bash
php artisan serve
```

Akses di browser:  
http://127.0.0.1:8000

## 🖼️ Catatan Penting
- Folder `public/storage` tidak di-ignore dan sudah di-upload ke GitHub  
- Pastikan menjalankan `php artisan storage:link` agar gambar budaya muncul

## 👤 Kontributor
- Nama: Vincent Tan  
- Project: Lomba / Ujian Akhir  
- Sekolah: (isi sesuai kebutuhan)

## 📌 Status Project
- ✅ Selesai
- ✅ Siap Dinilai
- ✅ Siap Dipresentasikan
- ✅ Data Dummy Tersedia

## 📄 Lisensi
Proyek ini dibuat untuk keperluan pendidikan dan lomba.
