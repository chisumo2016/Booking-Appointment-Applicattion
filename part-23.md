## Listing Appointments using Vue 3, Axios and Laravel
    - Objective of this section is to GET List of appointment from database and Loop on UI table
    - Create 10 Appointment using Tinker
            > \App\Models\Appointment::factory(10)->create()
    - We need to get the List of appointmeent from database using vue
        * Open the resources/js/pages/appointments/ListAppointments.vue
        * Add setup
        * Add end point  appointment on web file
        * create an appointment controller , index method
                php artisan make:controller Admin/AppointmentController
        * Add the logic inside index method the AppointmentController
        *Loop each data inside the ListAppointement.vue file
            Error: Can not read the propertties of undefined (reading 'data')
            Soln:  pass an array on ref([])
            . To get /load  the Client details , use relationship with('')
        * Add the relationship on Appointment Model
        * Add Mass Assigment on Appointtment Model
        * Format the daate via cast  Appointment Model
            . Pass the protected $casts[]
            .   Format inside the index method - AppointmentController with help of throug()
    - Create new file called AppointmentStatus Enum, to show the color
              app/Enums/AppointmentStatus.php 
                define enum
                define case
                define color  function
                define color  function
                Cast our Appointment Enum within the Appointment Model
                We can use the Status Enum in the AppointmentController
                Use in the ListAppointment.vue with color.
                
        
