
# Inventory Management System

Sistem manajemen inventaris berbasis web menggunakan Laravel.

## Tech Stack

- **Backend:** Laravel 12 (PHP 8+)
- **Frontend:** Vite, Blade, Tabler UI
- **Database:** PostgreSQL
- **Authentication:** Laravel Fortify
- **Testing:** PestPHP, PHPUnit

## Main Libraries & Packages

- [barryvdh/laravel-dompdf](https://github.com/barryvdh/laravel-dompdf) — Export PDF laporan
- [laravel/fortify](https://github.com/laravel/fortify) — Auth & 2FA
- [laravel/sanctum](https://github.com/laravel/sanctum) — API authentication (opsional)
- [tabler/tabler](https://tabler.io/) — UI Kit
- [spatie/laravel-permission](https://github.com/spatie/laravel-permission) — Role & permission
- [nunomaduro/collision](https://github.com/nunomaduro/collision) — Error handler
- [fakerphp/faker](https://github.com/FakerPHP/Faker) — Data dummy seeder

## Fitur Utama

- CRUD Produk, Kategori, Supplier, Stok, Transaksi, User
- Manajemen stok masuk/keluar
- Laporan PDF
- Role & permission
- Pencarian & filter data
- Responsive UI (Tabler)

## Cara Menjalankan

1. Clone repo & install dependency:
	```sh
	composer install
	npm install && npm run build
	cp .env.example .env
	php artisan key:generate
	php artisan migrate --seed
	php artisan storage:link
	```
2. Jalankan server:
	```sh
	php artisan serve
	```
3. Buka di browser: [http://127.0.0.1:8000](http://127.0.0.1:8000)

## License

MIT
