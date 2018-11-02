# Api Sederhana menggunakan Laravel
--------
## Installation
* Clone this repository
* Do composer update
> composer update
* Migrate database
> php artisan migrate
* Seed Database
> php artisan db:seed

## Usage

* GET /employee : Menampilkan semua data employee
* GET /employee/{id} : Menampilkan data employee berdasarkan id
* POST /employee : Menambah employee
* PUT /employee/{id} : Mengubah data employee berdasarkan id
* DELETE /employee/{id} : Menghapus data employee berdasarkan id