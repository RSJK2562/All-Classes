1. App1 (Laravel with React kit) - CURD
----------------------------------------
- Install:
    composer global require laravel/installer
    laravel new app1

    run: composer run dev


2. App2 (Laravel with WorkOS) - Social Media Login
---------------------------------------------------
- Install:
    laravel new app2

- Config Client_id & Redirect URI
    (https://workos.com/)
    - env
        (WORKOS_CLIENT_ID=client_01K39YP73BNY36WJ3Y1CA3ZKVV)
        (WORKOS_API_KEY=sk_test_a2V5XzAxSzM5WVA2RjFKTVNBRzMzWTBFODEzRVBYLFRXU2Fld0FVVjJUcHZhSHN1Q1FsT2I5bUY)
        (WORKOS_REDIRECT_URL="http://localhost:8000/authenticate")

    - Redirect URI - WorkOS
        Redirect - 1. http://localhost:8000/
                   2. http://localhost:8000/authenticate


3. App3 (Laravel with React kit) - Roles & Permissions
-------------------------------------------------------
- Install:
    laravel new app3

- Install - laravel spatie roles and permissions
    (https://spatie.be/docs/laravel-permission/v6/introduction)
    1. composer require spatie/laravel-permission
    2. php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
    3. php artisan optimize:clear & php artisan config:clear (Optional)
    4. php artisan migrate 
    ------------/-> After Complete <-/------------
    5. php artisan make:seeder PermissionSeeder
    6. php artisan db:seed PermissionSeeder


4. App4 (Laravel with React kit) - Pagination 
----------------------------------------------
- Install:
    laravel new app4

- Test Data
    php artisan tinker
    User::factory()->count(50)->create();

- Create components
    Pagination.tsx

=> App4.1 -> aap3 (React kit - RolesPermissions + Pagination + FlashMessage) 

~//=====================================================================//~
~//=====================================================================//~
~//=====================================================================//~

5. App5 (Laravel with Vue kit) - Roles & Permissions
----------------------------------------------------
- Install:
    laravel new app4

- Install - laravel spatie roles and permissions
    (https://spatie.be/docs/laravel-permission/v6/introduction)
    1. composer require spatie/laravel-permission
    2. php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
    3. php artisan optimize:clear & php artisan config:clear (Optional)
    4. php artisan migrate 
    ------------/-> After Complete <-/------------
    5. php artisan make:seeder PermissionSeeder
    6. php artisan db:seed PermissionSeeder


6. App6 (Laravel with Vue kit) - Pagination 
-------------------------------------------
- Install:
    laravel new app6

- Test Data
    php artisan tinker
    User::factory()->count(50)->create();

- Create components
    Pagination.vue

=> App7 -> aap5 (Vue kit - RolesPermissions  + FlashMessage) 