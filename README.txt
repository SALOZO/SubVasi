Setup reCAPTCHA

1. Install package:
   composer require anhskohbo/no-captcha

2. Publish konfigurasi:
   php artisan vendor:publish --provider="Anhskohbo\NoCaptcha\NoCaptchaServiceProvider"

3. Tambahkan SITE_KEY dan SECRET_KEY di file .env:
   NOCAPTCHA_SITEKEY=your_site_key
   NOCAPTCHA_SECRET=your_secret_key
