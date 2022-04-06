<div class="max-w-sm p-5 m-6 mx-auto bg-gray-400 rounded-lg">
    <form>
        <div class="mb-6">
            <label for="service" class="inline-block mb-2 font-bold text-gray-700">Select Service</label>
            <select name="service" id="service" class="w-full h-10 bg-white border-none rounded-lg" wire:model='state.service'>
                <option value="">Select Service</option>
                @foreach ($services as $service)
                    <option value="{{}}">{{$service->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="employee" class="inline-block mb-2 font-bold text-gray-700">Select Service</label>
            <select name="employee" id="employee" class="w-full h-10 bg-white border-none rounded-lg" wire:model='state.employee'>
                <option value="">Select Employe</option>
                @foreach ($services as $service)
                    <option value="{{}}">{{$service->title}}</option>
                @endforeach
            </select>
        </div>
    </form>
</div>
