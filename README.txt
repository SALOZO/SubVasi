Project Setup

Install Dependencies
Jalankan perintah:
composer install

Generate Application Key
Jalankan perintah:
php artisan key:generate

Link Storage to Public
Jalankan perintah:
php artisan storage:link

Setup reCAPTCHA

Install Package

Jalankan perintah:
composer require anhskohbo/no-captcha

Jalankan perintah:
php artisan vendor:publish --provider="Anhskohbo\NoCaptcha\NoCaptchaServiceProvider"

Tambahkan baris berikut ke dalam file .env:
NOCAPTCHA_SITEKEY=]
NOCAPTCHA_SECRET=
