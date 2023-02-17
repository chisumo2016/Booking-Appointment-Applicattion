## Listing Appointments using Vue 3, Axios and Laravel
    - Objective of this section is to GET List of appointment from database and Loop on UI table
    - Create 10 Appointment using Tinker
            > \App\Models\Appointment::factory(10)->create()
    - We need to get the List of appointmeent from database using vue
        * Open the resources/js/pages/appointments/ListAppointments.vue
        * Add setup
        * Add route  appointment on web file
        * create an appointment controller
                php artisan make:controller Admin/AppointmentController
        * Add the logic inside the AppointmentController
        * Add the relationship on Appointtment Model
        * Add Mass Assigment on Appointtment Model
        * Format the daate via cast  Appointtment Model
    - Create new file called AppointmentStatus Enum
        
