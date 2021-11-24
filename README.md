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