<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use App\Models\Service;
// use Illuminate\Support\Collection;
use Livewire\Component;

class CreateBooking extends Component
{
    public $employee;

    public $state = [
        'service' => '',
        'employee' => ''
    ];

    public function mount()
    {
        $this->employees = collect();
    }

    public function updatedStateService($serviceId)
    {
        $this->state['employee'] = '';

        if (!$serviceId) {
            $this->employees = collect();
            return;
        }

        $this->employees = $this->selectedService->employees;
    }




    public function getSelectedServiceProperty()
    {
        if (!$this->state['service']) {
            return null;
        }

        return Service::find($this->state['service']);
    }

    public function getSelectedemployeeProperty()
    {
        if (!$this->state['employee']) {
            return null;
        }

        return Employee::find($this->state['employee']);
    }

    public function render()
    {
        $services = Service::get();
        $employees = Employee::get();
        return view('livewire.create-booking', [
            'services' => $services,
            'employees' => $employees
        ])->layout('layouts.guest');
    }
}
