📸 Screenshot

<p align="center"><a href="" target="_blank"><img src="resources\assets\1.png" width="600" alt=""></a></p>

<p align="center"><a href="" target="_blank"><img src="resources\assets\2.png" width="600" alt=""></a></p>

<p align="center"><a href="" target="_blank"><img src="resources\assets\3.png" width="600" alt=""></a></p>

<p align="center"><a href="" target="_blank"><img src="resources\assets\4.png" width="600" alt=""></a></p>


# 📚 Website Perpustakaan Sederhana

Website ini adalah aplikasi manajemen perpustakaan sederhana yang dibangun menggunakan [Laravel](https://laravel.com/) dan [Filament](https://filamentphp.com/) sebagai admin panel.

## 🚀 Fitur

- Manajemen buku (tambah, edit, hapus)
- Kategori buku
- Peminjaman dan pengembalian buku
- Dashboard admin 
- UI modern dengan Filament Admin

## 🛠️ Teknologi yang Digunakan

- Laravel
- Filament PHP v3
- MySQL 

## 📦 Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini secara lokal:

```bash
# Clone repository
git clone https://github.com/elraztaqillah/Perpustakaan.git
cd Perpustakaan

# Install dependensi PHP
composer install

# Salin file .env dan konfigurasi
cp .env.example .env
php artisan key:generate

# Konfigurasi database di file .env
# Lalu jalankan migrasi
php artisan migrate

# (Opsional) Seeder data awal
php artisan db:seed

# Jalankan server lokal
php artisan serve

##🔐 Login Admin

Setelah seeding, kamu bisa login ke halaman admin:

URL Admin: /admin

Email: admin@gmail.com

Password: admin123

##📁 Struktur Folder Penting

app/Filament/Resources/ – Tempat resource Filament (CRUD)

app/Models/ – Model database

database/migrations/ – File migrasi database

database/seeders/ – Seeder data awal


##🤝 Kontribusi

Pull request dan issue sangat terbuka untuk pengembangan lebih lanjut!



