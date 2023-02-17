## How to add search filter using Vue 3, Laravel and Debounce
    - Objectives  is to add the the filter box  so that , the user of this application can search a person name 
        If the person doesnnt exisst will display 'No results found'
    - Add the Search Input on Parent which is UserList.vue file
    - define the const searchQuery in UserList.vue file
    - define the logic on search method  and bind the v-model 
    - Define the route of ssearch
    - Define  the search method in UserController and implement the logic,
    - Display the no result found
            <tbody v-if="users.length > 0">
                        <UserListItem
                            v-for="(user, index) in users"
                            :key="user.id"
                            :user=user
                            :index=index
                            @edit-user="editUser"
                            @user-deleted="userDeleted"
                        />
                        </tbody>
                        <tbody v-else>
                            <tr>
                                <td colspan="6" class="text-center">No Result Found .......</td>
                            </tr>
                        </tbody>
    - Add the automatic ssearch by using usin watch() ,comes from vue.
            watch(searchQuery, ()=>{
            search();
             });
    - We need to stop many  request stroke to the serve. Use debounce and pass time ,send single request
            watch(searchQuery, debounce(()=>{
            search();
             },300));
            
