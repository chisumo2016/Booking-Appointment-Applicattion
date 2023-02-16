## How to extract functionality into its own component using Laravel and Vue 3
    - Objective  is tto extract the functionality to its own component
    - Open the ListUsers.vue file 
        * Change the file name to UserList.vue file
        * Go router.js file
              {
                    path:'/admin/users',
                    name:'admin.users',
                    component:ListUsers,
                },
                    {
                    path:'/admin/users',
                    name:'admin.users',
                    component:UserList,
                },
    - Create another file called UserListItem.vue
        * Extract the table row to UserListItem
        * Acceept some props into UserListItem (eg. user and index)
        * remove the v-for from UserListItem
        * Pass the v-for to component in UserList.vue 
                .Acceept the props in Parent (UserList.vue )
                    <UserListItem
                            v-for="(user, index) in users"
                            :key="user.id"
                            :user=user
                            :index=index
                        />
    - Move the delete funtionalities into child.(UserListItem.vue)
        * add the property  const userIdBeingDeleted  = ref(null)
    - Move the deleteModal into UserListItem.vue
        * Instead of using the below code ,gonna use the emit to send data to parents
            users.value = users.value.filter(user => user.id !== userIdBeingDeleted.value);
            TO 
            emit('userDeleted', userIdBeingDeleted.value )
        * Define emit
            const emit = defineEmits(['userDeleted']);
        * To  listen / capture the emit to  parents
                @user-deleted="userDeleted" and is userDeleted function.
        * create a function userDeleted inside the parent 
            pass the userId innstead of userIdBeingDeleted.value
        * Import the toastr to child component.
    - Test .passed.
    - Click edit Button , you get an error editUser is not function
        soln: Define the editUser function w/c will be receving the user and emit an event
                const editUser = (user) => {
                emit('editUser', user)
            }
            *define this emit editUser on Child
                    const emit = defineEmits(['userDeleted' ,'editUser']);
            *Listen the emit to  Parent. in component
                <UserListItem
                            v-for="(user, index) in users"
                            :key="user.id"
                            :user=user
                            :index=index
                            @edit-user="editUser"
                            @user-deleted="userDeleted"
                 />
    - TESTED PASSED.
            
        
        
    

                
        

    

