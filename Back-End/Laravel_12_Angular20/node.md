## --------- CURD ---------
1. App1
    - app
    - api
----------
-> app
    - npm install bootstrap --save
    - ng g service post/postService | ng g s post/postService
    - ng g interface post/post
-> api
    - php artisan install:api
    - php artisan make:model Post -m
    - php artisan migrate
    - php artisan make:controller Post --resource
    - php artisan route:list

---

## ---------  ---------
2. 