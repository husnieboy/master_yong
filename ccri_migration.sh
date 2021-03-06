composer -o dumpautoload
composer dump-autoload
php artisan dump-autoload

echo "Dump autoload. \n";
php artisan migrate:refresh
echo "Seeding..";
php artisan db:seed
echo "Dump autoload. \n";
php app/cron/ewms_cron_dump.php
echo "Refreshed database. \n";
php artisan config:publish lucadegasperi/oauth2-server-laravel
echo "Migrated Oauth tables. \n";
php artisan oauth2-server:migrations
php artisan db:seed --class=OauthclientSeeder
php artisan db:seed --class=OauthscopeSeeder
echo "Seeded oauth tables. \n";