### APPOINTEMENT  APPLICATION
    - Create laravel application
    - Install Vue
        npm i vue
    - Install AdminLte
        https://adminlte.io/docs/3.1/
        npm install admin-lte@^3.2 --save
    - Create a dashboard.blade.php
    - Copy the starter from adminLte and paste
    - You will see the broken line
    - Fix
        <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
           Takee: dist/css/adminlte.min.css
        open the  resources/css/app.css  and import
                @import 'admin-lte/dist/css/adminlte.min.css';
    - npn run dev
    - Read https://laravel.com/docs/9.x/vite#main-content
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    - Add the fontawesome
             <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    - Copy plugins/fontawesome-free/css/all.min.css 
    - Import to resources/css/app.css
            @import 'admin-lte/plugins/fontawesome-free/css/all.min.css';
    - Add google font
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    - Import to resources/css/app.css
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback');
   
    - ON JAVASCRIPT PART 
    - Using the jquery 
    - Open the resources/js/app.js
            - Import the jquery
                <script src="plugins/jquery/jquery.min.js"></script>
                    import 'admin-lte/plugins/jquery/jquery.min.js';
                <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    import 'admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js';
                <script src="dist/js/adminlte.min.js?v=3.2.0"></script>

            
