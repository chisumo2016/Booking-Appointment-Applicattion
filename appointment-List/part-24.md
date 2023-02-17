##Filtering Appointments based on different status using Vue 3 and Laravel
    - Objective of this section is to filter the status , by Schedule , Confirmed and Cancelled
    - Open the ListAppontment.vue file 
            * Add tab name  and count Schedule , Confirmed and Cancelled
            * When we click the Schedulled Tab button, listen for click event, pass the status 
                    @click="getAppointments()"
            * Define the const const appointmentStatus = {'scheduled' : 1 , 'confirmed' : 2 , 'cancelled' : 3};
            * Pass the appointmentStatus in click event @click="getAppointments()"
            * Pass the status in the getAppointments() method in the script
                        define the params = {};
                        Check if there's status
                        pass the params in the axios
    - Open the AppointmentController and use when() method to show the status
                    ->when(request('status'), function ($query){
                return $query->where('status', AppointmentStatus::from(request('status')));
            })
            * Use the same code from ui to show the rest of statusn in the button
                @click="getAppointments()"
                @click="getAppointments(appointmentStatus.scheduled)"
                @click="getAppointments(appointmentStatus.confirmed)"
                @click="getAppointments(appointmentStatus.cancelled)"
    
