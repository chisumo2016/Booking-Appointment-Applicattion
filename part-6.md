## Client Side Form Validation using Vue, VeeValidate and Yup
    - Objective is to validate the input from client side  with Vue js and VeeValidate and Yup
    - Install two packages  (READ DOCUMENTATION)
            * https://vee-validate.logaretm.com/v4/guide/overview/
                npm i vee-validate --save
            * https://www.npmjs.com/package/yuphttps://www.npmjs.com/package/yup
                    npm i -S yup
    - After installing tthe package, wrap the modal insside the form
        * Use Form
            <form action=""> TO <Form action="">
        * With   <input></input> will be replace by <Field>
        *With Field we dont need a v-model, use name="email"
            eg v-model="form.password" TO  name="password"
        * With @click="createUser" remove annd replace with type="submit"
        * Form element we can to add   <Form @submit="createUser">
                READ DOC
    - Let go to the function createUser(){}
                const createUser = (values) => {
                console.log(values);
            };
    - Test the application , we caan see the values on the console.
    - Now its time to validate our input /fields, There many ways
            * Use the schema techniques.
                    <Form @submit="createUser" :validation-schema="schema">
            * Define schema
                /**Validate the Inputs*/
                const schema = yup.object({
                name: yup. string().required(),
                email: yup. string().email().required(),
                password: yup. string().required().min(8),
                
                });
    - To show the validation on UI 
             <Form @submit="createUser" :validation-schema="schema" v-slot="{ errors}">
                :class="{'is-invalid' : errors.name}"
                <span class="invalid-feedback">{{ errors.name}}</span>
    - We will not using the form, comment


