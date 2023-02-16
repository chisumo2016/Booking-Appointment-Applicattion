## Vue 3 Events naming convention and dispatching event from the template | Laravel & Vue 3
    - Objective  is to dispatch event from template 
    - In the editUser method , we're emit the event called 'editUser',
        * Using camel event name letter.eg 'editUser'
        * But in the  parent component , we listen the event in kababu letter
                 @editUser="editUser"
                 @edit-user="editUser"
    - In the child component , UserListItem.vue, we're emit the event 
            const editUser = (user) => {
                emit('editUser', user)
            }
        * We can emit our event directly to our component  UserListItem.vue
                <a @click.prevent="editUser(user)" href="#"><i class="fa fa-edit"></i></a>
            TO
            <a @click.prevent=$emit('editUser', user)" href="#"><i class="fa fa-edit"></i></a>

                
        

    

