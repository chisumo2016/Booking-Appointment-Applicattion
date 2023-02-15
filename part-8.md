## Unique Email Validation with VeeValidate and Laravel
    - Objective is to make our email validation unique.
    - Error when update the form
        Cannot destructure property 'resetForm of undefined as its undefined.
        Unique validation issue. Like email has been taken.
    - Will start on Add New User
        * we have createUser function  and we called it in handleSubmit()
        * Add the actions 
                    const handleSubmit = (values, actions) =>{}
        * Unique validation email.
            Add the validattion inn laravel on store method.
        * Show on UI
            1: add the const createUser = (values, { resetForm , setFieldError}) => {
            setFieldError('email', error.response.data.errors.email[0]);
           2:  const createUser = (values, { resetForm , setErrors}) 
                    setErrors(error.response.data.errors);  
            3:put the if(){}
    - Add the same validation on edit 
            Add the validattion inn laravel on update method.
