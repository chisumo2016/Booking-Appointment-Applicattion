## Client Side Form Validation using Vue, VeeValidate and Yup
    - Objective is to Edit the user information   with Vue js and VeeValidate and Yup
    - Have the icon on thee table to edit the user.
    - Once the user click the edit buton , modal form will be populate filled with information.
        <a @click.prevent="editUser(user)" href="#"><i class="fa fa-edit"></i></a>
    - We can change the information of the user.
    - If the input iss empty we will show the validation errors
    - The password will be optional.Save the specific information without changes the information.
    - The password will show 8 charact max
    - create the functiion  editUser(){} and add thee logic
    - Validate the specific user, add tthe initial-values in or form
       <Form @submit="createUser" :validation-schema="schema" v-slot="{ errors}" :initial-values="formValues">
    - To clear the form wit should use ref- from vue ref="form"
         <Form ref="form" @submit="createUser" :validation-schema="schema" v-slot="{ errors}" :initial-values="formValues">
    - We need to use tthe form, declare in script and method
        const form = ref(null)
         form.value.resetForm();
        //this.$refs.form.resetForm();//v2
    - Validation of editing the User
            createUserSchema
            ceditUserSchema
    - Change thee condition in the form
        @submit="editing ? updateUser : createUser"
    - This above doesnt work we should change to our form
        @submit="handleSubmit"
    - Write the condition to display our form

            const handleSubmit = (values) =>{
            if (editing.value){
            updateUser(values);
            }else {
            createUser(values);
            }
            }
    - Write the function updateUser to suubmit our form
    - Test : not passed
        405 (Method Not Alloweed)
    - Pass the formValues 
    - Define the route
    - Define method update in controller
