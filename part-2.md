## Vue Router 
    - Use the vue router to navigate.
    - In order to use the vue route , install the package.
        https://router.vuejs.org/installation.html#direct-download-cdn
        npm install vue-router@4
    - Make a controller called ApplicationController
        php artisan make:controller ApplicationController   
    - Create a method inside the controller called __invoke()
    - Create a folder resources/views/admin/layouts/app.blade.php
    - Copy everything from dashbaaord and paste into app.blade.php
    - In thee web route 
            Route::get('{view}', ApplicationController::class)->where('view','(.*)');
    - Let use the vue-router 
        <div class="content-wrapper">
                 <router-view></router-view>
        </div>
    - Open js file
            import {createApp} from "vue";
            import {createRouter, createWebHistory} from "vue-router";
            
            const app       = createApp({});
            const router    = createRouter({
            routes:'',
            history:createWebHistory()
            });
     Create the routter.js  inside resource/js/routes.js
            [
                {
                    path:'/admin/dashboard',
                    name:'admin.dashbooard',
                    component:Dashboard
                }
            ]
    - Create a component folder inside resource/js 
    - Create a dashboard vue file  
            resources/js/components/Dashboard.vue
    - Install 
        [plugin:vite:import-analysis] Failed to resolve import 
        npm install @vitejs/plugin-vue@4
    - Add the configuratin in vite 

    -Error
            Vite manifest not found at: /Users/developer/Documents/code/appointment-project/public/build/manifest.json
    - SOLUTION
        Run again npm run dev
