<?php

namespace App\Http\Controllers\Admin;

use App\Enums\AppointmentStatus;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {

        return Appointment::query()
            ->with('client:id,first_name,last_name') //dont put a space
            ->when(request('status'), function ($query){
                return $query->where('status', AppointmentStatus::from(request('status')));
            })
            ->latest()
            ->paginate()
            ->through(fn ($appointment) => [  //through each $appointment
                'id' => $appointment->id,
                'start_time' => $appointment->start_time->format('Y-m-d h:i A'),
                'end_time'   => $appointment->end_time->format('Y-m-d h:i A'),
                'status'     => [
                    'name'   => $appointment->status->name,
                    'color'  => $appointment->status->color(),
                ],
                'client'     => $appointment->client,
                //'status'     => $appointment->status,
            ]);
    }
}
