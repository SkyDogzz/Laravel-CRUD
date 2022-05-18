<p align="center"><a href="https://github.com/SkyDogzz/Laravel-CRUD/edit/main/README_LARAVEL.md" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Setting up the project

Clone and download npm and composer dependencies

```console
git clone https://github.com/SkyDogzz/Laravel-CRUD.git

cd Laravel-CRUD

npm install

composer install
```

Make a .env (you can copy the .env.example and replace data)

Generate the application encryption key

```console
php artisan key:generate
```

Yon can init table and generate data with the seeders

```console
php artisan migrate:fresh --seed
```
