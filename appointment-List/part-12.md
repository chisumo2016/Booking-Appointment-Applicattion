## How to format date using various different ways in Laravel and Vue 3
    - Objective is to display the date inn the Register colum on UI 
    - There's many various way to show that.
            * Using the map collection method
            * Using Accessor
            * Using Laravel Macro
            * Using moment JS Library
            * Using  Helper Function
    - Open the UserController index method  file .
            * Use the map collection method.
            * use the config() and create inn the app.php
                     'created_at' => $user->created_at->format(config('app.date_format')),
    - Open the ListUser.vue file and use it  <td>{{ user.created_at}}</td>
    
    - Use the map collection method.
                config/app.php
                public  function  index()
                {
                    $users  = User::latest()->get()->map(function ($user){
                        return [
                            'id' => $user->id,
                            'name' => $user->name,
                            'email' => $user->email,
                            'created_at' => $user->created_at->format(config('app.date_format')),
                        ];
                    });
                    return $users;
                }
    -  Use Accessor
        * Open the user model
            protected $casts = [
                'email_verified_at' => 'datetime',
            ];

            public  function  getFormattedCreatedAtAttribute()
            {
                return $this->created_at->format(config('app.date_format'));
            }
        * use on ui 
                      <td>{{ user.formatted_created_at}}</td>
    - Using Laravel Macro
        * open the UserController in index()
                   public  function  index()
                    {
                        $users  = User::latest()->get()->map(function ($user){
                           // dd($user->created_at->toFormattedDate());
                            return [
                                'id' => $user->id,
                                'name' => $user->name,
                                'email' => $user->email,
                                'created_at' => $user->created_at->toFormattedDate(),
                            ];
                        });
                        return $users;
                    }
        * open AppServiceProvider
                public function boot()
                {
                    Carbon::macro('toFormattedDate',function (){
                        return $this->format('Y-m-d');
                    });
                }
        * Use on ui public function boot()
            <td>{{ user.created_at}}</td>
        
    - Using Moment JS Library
        * https://momentjs.com/
            npm install moment
        * Remove every map function in userController
        * import the moment on ListUser.vue file
        * Use it in UI
                <td>{{ moment(user.created_at). format('YYYY-MM-DD')}}</td>
    - Using  Helper Function
        We can have some issue from <td>{{ moment(user.created_at). format('YYYY-MM-DD')}}</td>
        if we want to use in multiple places.We can use helper function.
    
        * create a file called resources/js/helper.jsresources/js/helper.js
                import moment from 'moment';
                export function  formatDate(value){
                    if (value){
                        return moment(String(value)).format('YYYY-MM-DD')
                    }
                }
        * Go to ListUser.vue file and remove the import moment
                import { formatDate} from "../../helper.js";
            UI   <td>{{ formatDate(user.created_at)}}</td>

    - TESTED ALL METHOD PASSED.

                
        

    

