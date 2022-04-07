<?php

namespace App\Http\Livewire;

// use App\Models\Employee;
use App\Models\Service;
use Livewire\Component;

class ServiceCreation extends Component
{
    // public $state = [
    //     'service' => '',
    //     'employee' => '',
    // ];

    // public $service;
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
            'service.duration' => 'required',
        ];
    }

    public function submit()
    {
        $this->validate();
        // dd($this);
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
