<?php

namespace App\Http\Livewire;

// use App\Models\Employee;

use App\Models\Employee;
use App\Models\EmployeeService;
use App\Models\Service;
use Livewire\Component;

class ServiceCreation extends Component
{

    public Service $service;

    public $employeeServices = null;

    public $employee;

    public function mount(Service $service, Employee $employee)
    {

        $this->employee = $employee;

        // dd($this->employee);

        $this->employeeServices = $this->employee->services()->get();

        // if ($this->employeeServices != null) {
        //     $this->employeeServices = $this->employee->services()->pluck('id');
        // } else {
        //     $this->employeeServices = $this->employee->id;
        // }


        $this->service = $service ?? new Service;
    }

    protected function rules()
    {
        return [
            'service.name' => 'required | string',
            'service.duration' => 'required',
            'employeeServices' => 'required'
        ];
    }

    public function submit()
    {
        // dd($this->employeeServices);
        $this->validate();
        // dd($this);
        $this->service->save();
        // dd($this->service->with('employee'));
        $this->service->employees()->sync($this->employeeServices);

        $this->emit('employeeServices');
        return redirect()->route('book.service');
    }


    public function render()
    {
        // return redirect()->route('videodash.show', $this->service);
        return view('livewire.service-creation')
        ->layout('layouts.guest');
    }
}
