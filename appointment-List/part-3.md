## Vue Router for Navigation
    - To navigate btn one page to another
    - When User click  links will navigate to another page
    - Open the app.blade.php
        Add the following links 
                    Dashboard
                    Appointments
                    Users
                    Settings
                    Profile
                    Logout
    - Add the routes in routes.js
    - Create a folder called pages inside js
        copy from the dashboard.vue
    - To prevent full page reload , vue link
         <router-link to=""></router-lnk>
    - Add the active class dynamically  
            active-class="active"
    - Create all vue page from above ,with corresponded folder
                    Dashboard
                    Appointments
                    Users
                    Settings
                    Profile
    - Copy the dashboard and paste .
