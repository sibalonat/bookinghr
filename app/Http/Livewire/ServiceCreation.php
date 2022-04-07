<?php

namespace App\Http\Livewire;

// use App\Models\Employee;
use App\Models\Service;
use Livewire\Component;

class ServiceCreation extends Component
{
    public $state = [
        'service' => '',
        'employee' => '',
    ];

    public Service $service;
    // public Employee $employee;

    public function mount(Service $service)
    {
        $this->service = $service ?? new Service;
    }

    protected function rules()
    {
        return [
            'service.name' => 'required | string',
            'service.duration' => 'required | min:15',
            // 'service.name' => 'required | exists:services, id',
            // 'state.duration' => 'required | exists:employees, id',
            // 'state.time' => 'required | numeric',
            // 'state.name' => 'required | string',
            // 'state.email' => 'required | email',
        ];
    }

    public function submit()
    {
        $this->validate();
        $this->service->save();
        return redirect()->route('employee.attach', $this->service);
    }


    public function render()
    {
        // return redirect()->route('videodash.show', $this->service);
        return view('livewire.service-creation')
        ->layout('layouts.guest');
    }
}
