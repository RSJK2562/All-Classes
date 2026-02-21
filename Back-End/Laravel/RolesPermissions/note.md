1. role-permission-l12
- Install:
    <!-- laravel new [role-permission-l12] --using=imacrayon/blade-starter-kit -->
    laravel new role-permission-l12
- Auth
    - composer require laravel/breeze --dev
    - php artisan breeze:install
    - npm install
    - npm run dev
- Install - laravel spatie roles and permissions
    (https://spatie.be/docs/laravel-permission/v7/installation-laravel)
    1. composer require spatie/laravel-permission
    2. php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
    3. php artisan optimize:clear & php artisan config:clear (Optional)
    4. php artisan migrate 
    ------------/-> After Complete <-/------------
    5. php artisan make:seeder PermissionSeeder
    6. php artisan db:seed PermissionSeeder

