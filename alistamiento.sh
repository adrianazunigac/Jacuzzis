composer install
php artisan key:generate
php artisan migrate:refresh --seed
php artisan serve