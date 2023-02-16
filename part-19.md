## How to add bulk delete feature using Vue 3 and Laravel
    - Objectives is to add the check box on UI , User can selectt all  and Delete Buttton will appear
        or select the specific user and delete the record.
    - Add the CHECKBOX and DELETE RECORD in the Parent(userList.vue)
        <th><input type="checkbox"></th>
    - Open the UserListItem.vue
            <th><input type="checkbox"></th>
    - Add the DEELETE RRECORD button UserListItem.vue file
    - We need to show the Delete Selected Button once we have selected user
        *In UserListItem.vue file, add a listen even called @change="toggleSelection"
        *Define the method toggleSelection in  UserListItem.vue and pass the emit event with props
                    const toggleSelection = () =>{
                        emit('toggleSelection', props.user);
                    }
        * define the props 
                const props = defineProps({
                    user: Object,
                    index : Number
                });
        * To listen the event to the Parent Componennt.
                  <UserListItem
                            v-for="(user, index) in users.data"
                            :key="user.id"
                            :user=user
                            :index=index
                            @edit-user="editUser"
                            @user-deleted="userDeleted"
                            @toggle-selection="toggleSelection"
                        />
        * create a method toggleSelection in UserList.vue
                const selectedUsers = ref([]);

                const toggleSelection = (user) =>{
                const index = selectedUsers.value.indexOf(user.id);
                if (index === -1) {
                    selectedUsers.value.push(user.id);
                }else {
                    selectedUsers.value.splice(index, 1)
                }
                //selectedUsers.value.push(user.id);
                console.log(selectedUsers.value);
            }
    
    - Add the conditional on the button v-if="selectedUsers.length > 0"
            * will show the DELETE SELECTED Button
    - To listen the click event to our  DELETE SELECTED Button and perform axios request
            * add the method in UserList.vue  called bulkDelete()
    - Add the URL in web file routes
    - Add bulkDelete method inside tthe userController file.
    - Will delete from database not on UI , implement that.
            * Open the UserList.vue file and the functionality inn the bulkDelete method
                    users.value.data  = users.value.data.filter(user => !selectedUsers.value.includes(user.id));
    - TESTED - OK
    - But the button still shhowing once the record has been deleted, we need to clear the selectedUsers.value = []
