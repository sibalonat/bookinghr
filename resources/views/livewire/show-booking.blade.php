<div class="max-w-sm p-5 m-6 mx-auto bg-gray-400 rounded-lg">
    <div class="mb-6">
        <div class="mb-2 font-bold text-gray-700">
            {{$appointment->client_name}} thank you for your booking
        </div>
        <div class="py-2 mb-2 border-t border-b border-gray-200">
            <div class="font-semibold text-gray-700">
                {{$appointment->service->name}} ({{$appointment->service->duration}})
            </div>
        </div>
        {{-- <div class="mb-2 font-bold text-gray-700">
            {{$appointment->client_name}} thank you for your booking
        </div> --}}
    </div>
</div>
