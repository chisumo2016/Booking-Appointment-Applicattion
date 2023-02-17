## Table Inline Editing | Vue 3 & Laravel
    - Objective  is to add the dropdown menu on the Role, so user can select , toastr msg will be showing.
    - Open the UserListItem.vue file
        * create a ref for our roles
        * v-for for our roles
        * Perform ajax request
        * listen for changeRole event
                 <select
                    @change="changeRole(user , $event.target.value)"
                    class="form-control">
                    <option v-for="role in roles" :value="role.value">{{ role.name }}</option>
                </select>
        * Define the method changeRole
        * add the web route in file
        * Define the changeRole method loogic into UserController
        * Add mass assign into User Model
        * Fix on ui part to show selected
                <td>
                <select
                    @change="changeRole(user , $event.target.value)"
                    class="form-control">
                    <option v-for="role in roles" :value="role.value" :selected="user.role === role.name">{{ role.name }}</option>
                </select>
            </td>

                
        

    

