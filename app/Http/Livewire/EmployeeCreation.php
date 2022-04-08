<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class EmployeeCreation extends Component
{

        // public $service;
    public Employee $employee;
    // public $employeeServices;
        // public Employee $employee;
    // protected $validationAttributes = [
    //     'employeeServices' => 'Services',
    // ];

    public function mount(Employee $employee)
    {
        // dd($this);
        // dd($this->employeeServices);

        $this->employee = $employee ?? new Employee;
        // $this->employeeServices = $this->employee->services()->pluck('id');
    }

    protected function rules()
    {
        return [
            'employee.title' => 'required | string',
        ];
    }

    public function submit()
    {
        $this->validate();

        // dd($this);
        $this->employee->save();
        // $this->employee->services()->sync($this->employeeServices);
        // $appointment->service()->associate($this->selectedService);
        // $appointment->employee()->associate($this->selectedEmployee);
        return redirect()->route('employee.attach', $this->employee);
    }

    public function render()
    {
        return view('livewire.employee-creation')
        ->layout('layouts.guest');
    }
}
