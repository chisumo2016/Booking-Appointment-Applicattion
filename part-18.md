## How to add pagination using Vue 3, Laravel and Laravel Vue Pagination Package
    - Objectives is to add the pagination on the UI , switch to differnt pages
    - We need tto install the Laravel Vue Pagination.
        * https://laravel-vue-pagination.org/
        * npm install laravel-vue-pagination
        * Use Bootstrap 4 pagination , import on UseList.vue file
            import { Bootstrap4Pagination } from 'laravel-vue-pagination';
        * Go to bootstrap 4 component
            https://laravel-vue-pagination.org/guide/components/bootstrap-4.html
        * Modify the component to pass the write data
                    <Bootstrap4Pagination
                        :data="users.data"
                        @pagination-change-page="getUsers"
                    />
        * Slightly change the getUsers method to accept page= 1 ass arg
                const getUsers = (page = 1) => {
                axios.get(`/api/users?page=${page}`)
                    .then((response) => {
                        users.value = response.data;
                    })
            }
        * Open  the UserController and slightly modify get () to paginate()
                $users  = User::latest()->get(); TO
                $users  = User::latest()->paginate(10);
        * We dont see the data information on UI , SOLUTION is to loop users.data on v-for
             <tbody v-if="users.data.length > 0">
            v-for="(user, index) in users.data"
         Cannot read properties of undefined (reading 'length')

        Instead of passing the array with should pass the object array
                const users         = ref([]);  TO
                const users         = ref({'data':[]});
    - If u type on the search box , the error appear on the console 
            Cannot read properties of undefined (reading 'length')
        We need to use paginate() instead of get() in the search usercontroller
                $users = User::where('name' , 'like' , "%{$searchQuery}%")->get();
                TO
                $users = User::where('name' , 'like' , "%{$searchQuery}%")->paginate();
