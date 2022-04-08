<?php

namespace App\Http\Livewire;

// use App\Models\Employee;

use App\Models\Employee;
// use App\Models\EmployeeService;
use App\Models\Service;
use Livewire\Component;

class ServiceCreation extends Component
{

    public Service $service;
    // public $service;

    public $employeeServices;

    public $employee;

    public function mount(Service $service, Employee $employee)
    {
        $this->employee = $employee;
        // $this->employeeServices = $this->service->employees()->pluck('id');
        // dd($this->employeeServices);
        $this->service = $service ?? new Service;

        // if ($this->employeeServices != null) {
        //     $this->employeeServices = $this->service->employees()->pluck('id');
        // } else {
        //     return;
        // }
    }

    protected $validationAttributes = [
        'employeeServices' => 'Employees',
    ];

    protected function rules()
    {
        return [
            'service.name' => 'required | string',
            'service.duration' => 'required',
            'employeeServices' => 'sometimes'
        ];
    }

    public function submit()
    {
        $this->validate();
        $this->service->save();
        $this->service->employees()->sync($this->employee->id);
        return redirect()->route('book.service');
    }


    public function render()
    {
        return view('livewire.service-creation')
        ->layout('layouts.guest');
    }
}
