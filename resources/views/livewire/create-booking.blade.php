<div class="max-w-sm p-5 m-6 mx-auto bg-gray-400 rounded-lg">
    <form wire:submit.prevent='createBooking'>
        <div class="mb-6">
            <label for="service" class="inline-block mb-2 font-bold text-gray-700">Select Service</label>
            <select name="service" id="service" class="w-full h-10 bg-white border-none rounded-lg" wire:model='state.service'>
                <option value="">Select Service</option>
                @foreach ($services as $service)
                    <option value="{{$service->id}}">{{$service->name}} ({{$service->duration}})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6 {{!$employees->count() ? 'opacity-25%' : ''}}">
            <label for="employee" class="inline-block mb-2 font-bold text-gray-700">Select Service</label>
            <select name="employee" id="employee" class="w-full h-10 bg-white border-none rounded-lg" wire:model='state.employee' {{!$employees->count() ? 'dissabled=dissabled' : ''}}>
                <option value="">Select Employe</option>
                @foreach ($employees as $employee)
                    <option value="{{$employee->id}}">{{$employee->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6 {{!$this->selectedService || !$this->selectedEmployee ? 'opacity-25%' : ''}}">
            <label for="employee" class="inline-block mb-2 font-bold text-gray-700">Select Appointment Time</label>

            <livewire:booking-calendar :service="$this->selectedService" :employee="$this->selectedEmployee" :key="optional($this->selectedEmployee)->id" />

        </div>

        @if ($this->hasDetailsToBook)
        {{-- confirfmation --}}
        <div class="mb-6">
            <div class="mb-2 font-bold text-gray-700">
                your ready to book
            </div>
            <div class="py-2 border-t border-b border-gray-300">
                {{-- details --}}
                {{$this->selectedService}}: ({{$service->duration}}) with {{ $this->selectedEmployee }}
                on {{$this->timeObject->format('D js M Y')}} at {{$this->timeObject->format('g:i A')}}
            </div>

            <div class="mb-6">
                <div class="mb-3">
                    <label for="name" class="inline-block mb-2 font-bold text-gray-700">Your name</label>
                    <input type="text" id="name" name="name" class="w-full h-10 bg-white border-none rounded-lg" wire:model.defer='state.name'>

                    @error('state.name')
                    <div class="mt-2 text-sm font-semibold text-red-500">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="inline-block mb-2 font-bold text-gray-700">Your name</label>
                    <input type="text" id="email" name="email" class="w-full h-10 bg-white border-none rounded-lg" wire:model.defer='state.email'>
                    @error('state.email')
                    <div class="mt-2 text-sm font-semibold text-red-500">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="w-full px-4 font-bold text-center text-white bg-indigo-500 rounded-lg h-11">Book Now</button>
        </div>
        @endif

    </form>
</div>
