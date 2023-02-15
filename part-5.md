## How to use Bootstrap Modal with Laravel and Vue 3 and store records in the database 
    - Objective is to store the data inside the databasee using Bootstrap Modal.
    - Add New User button , Pop form will be populated once you click add new user button with aid of Modal
    - Add the Modal under the page
    - Once user has filled the information and click save ,data information will stored into database
            * Add the click event to listen for the button called @click="createUser"
            * create a method inside the script called createUser(){}
            * declare the form data as reactive.
            * add the v-model to our inputs
            * add route to store 
            * clear the value in the input  and Hide the Modal
                install the jquery
                npm install jquery
                import the jquery on boostrap.js
                        /**Import the Jquery Plugin**/
                        import jquery from  'jquery';
                        window.$ = window.jQuery = jquery;
                - Comment out jquery in app.js
        
    - Try to enter the data , OK ,once issue of delaying.
              users.value.unshift(response.data);

            
    


