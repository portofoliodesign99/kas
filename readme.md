
**###cara install**

`$ > git clone https://github.com/portofoliodesign99/kas.git`
`$ > cd kas`
`$ > composer install`
`$ > cp env.example .env`
    `jangan lupa konfigurasi database dengan nama yang anda buat didatabase.` 
`$ > composer dump-autoload`
`$ > php artisan migrate`
`$ > php artisan db:seed`
    `username : admin`
    `password : admin`

**###running program**

`$ > cd kas`
`$ > php artisan serve`
