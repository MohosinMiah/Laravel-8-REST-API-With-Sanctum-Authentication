## Project Name : Laravel 8 CRUD REST API With Sanctum Authentication

## Uses
 <p>Laravel </p>
 <p>MySql </p>
 <p>Sanctum Authentication </p>
 <p>Postman </p>

 ## Technical Working Flow

 <h3> 1) Create Model : php artisan make:model Product --migration </h3>

 <code>
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->decimal('price',5,2);
            $table->timestamps();
</code>            

<h3> 2) Migrate : php artisan migrate </h3>

<h3> 3) Product Controller : php artisan make:controller ProductController --api </h3>

<h3> Added Laravel Sanctum For API Authentication </h3>

<p> More Details : <a href="https://laravel.com/docs/8.x/sanctum"  >Laravel Sanctum</a> </p>

<h3> Authentication Controller : php artisan make:controller AuthController </h3>

## MySQL  Database Upload in : Database/Laravel-8-REST-API-With-Sanctum-Authentication.sql
