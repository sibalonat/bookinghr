<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use App\Models\Service;
use Livewire\Component;

class CreateBooking extends Component
{
    public $employee;

    public $state = [
        'service' => null,
        'employee' => null
    ];

    public function updatedStateService($serviceId)
    {
        $this->state['employee'] = null;

        $this->employees = $this->selectedService->employees;
    }


    public function getSelectedServiceProperty()
    {
        if (!$this->state['service']) {
            return null;
        }

        return Service::find($this->state['service']);
    }

    public function render()
    {
        $services = Service::get();
        $employees = Employee::
        return view('livewire.create-booking', [
            'services' => $services
        ])
            ->layout('layouts.guest');
    }
}
