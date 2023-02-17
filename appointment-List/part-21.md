## Let's do some refinement and bug fixing using Vue 3 and Laravel
    - Some bugs in the applicaation when tring to create a new user
            * Uncaught (in promise) TypeError: Cannot read properties of undefined (reading 'data')
            * Let us go UserList.vue file on createUser method we need to change the logic because of pagination
                     users.value.unshift(response.data);  TO
                     users.value.data.unshift(response.data); 
            * Add the icon on Add New User
            * Add the icon on Delete Selected
            * Add the message to show how many user has been selected
                <button
                            v-if="selectedUsers.length > 0"
                            @click="bulkDelete"
                            type="button"
                            class="btn btn-danger mb-2 ml-2">
                            <i class="fa fa-trash mr-1"></i>
                            Delete Selected
                        </button>
        
