## How to delete a user using the confirmation modal with Vue 3 and Laravel
    - Objective istto be able to delete the user and show the modal confirmation with Vue 3
    - Add the icon to delete the user on the TABLE.
    - Once you click on the delete button icon , the modal window will open
    - Once you press delete button , the toastr will be shown
    - Open the ListUser.vue file
        * Add the link to delete the record in table, with click.prevent - confirmUserDeletion
        *  Add the method to confirmUserDeletion in script
        *  Create the modal UI for deleteUserModal
        *  Write the function to display the modal
        *  Write the function to deleteUser via axios
        *  get the id and use it in the confirmUserDeletion (){}
        *  pass into axios
    - Create the web route for delete
    - We need to hide the modal once the user has been deleted, to remove the specific user.
        Will be delete 
        users.value = users.value.filter(user => user.id !== userIdBeingDeleted.value);

    

