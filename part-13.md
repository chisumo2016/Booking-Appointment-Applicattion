## How to use PHP 8.1 Enums for creating role type using Laravel and Vue 3
    - Objective  is to use the latest PHP 8.1 to create Enums for Role Type
    - Create Enums folder , with the file called RoleType wh/c return integer
            app/Enums/RoleType.php
    - Add the column called Role in user migration/table
        php artisan make:migration  add_role_field_to_users_table
        php artisan migrate
    - Display the role in ListUser.vue file
        <td>{{ user.role}}</td>
    - Instead of displaying the number of Role we should display tthe name of the user.
        * We can use the accessor in the User Model
            public  function  role(): Attribute
            {
                return  Attribute::make(
                    get:fn($value) => RoleType::from($value)->name,
                    //get:fn($value) => $value,
                );
            }
        
        
    

                
        

    

