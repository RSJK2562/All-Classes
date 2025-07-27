All Commend For Laravel
=========================
composer create-project laravel/laravel crud
php artisan --version

composer create-project --prefer-dist laravel/laravel:10 ajax
composer create-project laravel/laravel:10 app

1. php artisan serve
   php artisan serve --port=8001

2. php artisan make:controller MyController
   php artisan make:controller MyStudent --resource

3. php artisan make:migration create_emp_table
   php artisan make:migration add_role_column_in_emp_table

   -> php artisan make:seeder UserTableSeeder 
   -> php artisan make:factory Emp
   -> php artisan db:seed

4. php artisan migrate

5. php artisan migrate:rollback

6. php artisan migrate:reset

7. php artisan migrate:fresh
   php artisan migrate:fresh --seed

8. php artisan make:model Orders

9. php artisan make:middleware EntarnceMiddleware

10.1. php artisan make:mail SendOtp
10.2. php artisan vendor:publish

11. composer require razorpay/razorpay:2.*


*****************************************************************
12.1. composer require maatwebsite/excel                        *
12.2. php artisan make:import UsersImport (use Laravel 11 only) *
*****************************************************************

13. composer dump-autoload
   - php artisan key:generate

**************************************************************************
Multi_Auth_Larave_11/10 => (auth10)                                     **
-----------------                                                       **
1. composer require laravel/breeze --dev | composer require laravel/ui  **
2. php artisan breeze:install | php artisan ui bootstrap --auth         **
3. npm install                                                          **
4. npm run dev                                                          **
                                                                        **
php artisan make:model Admin -m                                         **
php artisan route:list                                                  **
**************************************************************************

14. php artisan r:l

15. php artisan config:cache | php artisan cache:clear | php artisan optimize | php artisan route:clear

16. composer update

17. Laravel PDF library
   (https://github.com/barryvdh/laravel-dompdf)
   composer require barryvdh/laravel-dompdf

18. Live API
   - composer require fruitcake/laravel-cors
   - composer require laravel/sanctum
   - php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"

18. WebSocket
   1. composer require beyondcode/laravel-websockets || composer require beyondcode/laravel-websockets --with-dependencies
   2. php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="migrations"
   3. php artisan migrate
   4. php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="config"
   5. composer require pusher/pusher-php-server
      <!-- .env -->
      - BROADCAST_DRIVER=pusher
      <!-- update -->
      - config/broadcasting.php
   6. php artisan websockets:serve
   7. php artisan make:event NewEvent
   8. php artisan tinker
      - event (new \App\Events\NewEvent('101'))
   <!-- Front-end PART -->
   9. npm install
   10. npm install --save-dev laravel-echo pusher-js
      <!-- update -->
      - resources/js/bootstrap.js 
   11. npm run build | npm run dev OR npm run production - (for live)
   12. 












   