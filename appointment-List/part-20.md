## Add select all option to perform bulk delete using Vue 3 and Laravel
    - Objectives  is to mark all user seelected or unmark all user using vue 3 and laravel.
        * Show the DELETE SELECTED whhen we selectt all users
    - First we neeed to select all users ,when the checkbox is clicked.
            * Open the UserList.Vue file and add the event @change="selectAllUsers on th
                    <th><input type="checkbox" @change="selectAllUsers"></th>
            * Define this method selectAllUsers() in UserList.Vue  and const selectAll
            * add the v-model="selectAll"
            * emit an event from child to parent
                const props = defineProps({
                    user: Object,
                    index : Number,
                    selectAll : Boolean
                });
                :checked="selectAll"

    - PROBLEM ON SELECT ALL.
      
