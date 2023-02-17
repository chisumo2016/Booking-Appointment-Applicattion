## Getting users from Database 
    - Objective is to get the users from Database and display on UI
    - Add the Table Layouts 
    - Add the logic inside the  script
    - Add the route in web
    - Create the controller
        php artisan make:controller Admin/UserController
    - Create a Factory tto seed the data
            https://dev.to/shanisingh03/generate-dummy-laravel-data-with-model-factories-seeder-gg4
            php artisan make:factory UserFactory --model=User
            php artisan make:seed UserTableSeeder
            php artisan make:seed UserTableSeeder
    - OR TINKER
            php artisan tinker
            User::factory()->create();
    - When the component is mounted , we should call getUsers()
    - Completed to write the logic to dissplay all users in admin area.


