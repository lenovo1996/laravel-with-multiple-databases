## clone project
- git clone https://github.com/lenovo1996/laravel-with-multiple-databases.git
## copy enviroment file edit database information
- cp .env.example .env
## run composer
- composer install
## generate key
- php artisan key:generate
## run migration
-- php artisan migrate --database=[your connection]
(config connection name in ./config/database.php)
