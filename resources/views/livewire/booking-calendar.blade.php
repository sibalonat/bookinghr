<div>
    <div class="bg-white rounded-lg">
        @if ($this->weekIsGreaterThanCurrent)
            <button type="button" class="absolute top-0 left-0 p-4 focus:outline-none"
                wire:click='decrementCalendarWeek'>
                <svg class="w-6 h-6 text-gray-300 hover:text-gray-700" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
        @endif

        <div class="relative flex items-center justify-center">
            <div class="p-4 text-lg font-semibold">
                {{ $this->calendarStartDate->format('M Y') }}
            </div>
        </div>

        <button type="button" class="absolute top-0 right-0 p-4 focus:outline-none" wire:click='incrementCalendarWeek'>
            <svg class="w-6 h-6 text-gray-300 hover:text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>

    <div class="flex items-center justify-between px-3 pb-2 border border-b-gray-200">
        @foreach ($this->calendarWeekInterval as $day)
            <button type="button" class="text-center cursor-pointer group focus:outline-none"
                wire:click='setDate({{ $day->timestamp }})'>
                <div class="mb-2 text-xs leading-none text-gray-700">
                    {{ $day->format('D') }}
                </div>
                <div
                    class="flex items-center justify-center p-1 text-lg leading-none rounded-full group-hover:bg-gray-200 w-9 h-9 {{ $date === $day->timestamp ? 'bg-gray-200' : '' }}">
                    {{ $day->format('d') }}
                </div>
            </button>
        @endforeach
    </div>

    <div class="overflow-y-scroll max-h-52">
        @if ($this->availableTimeSlots->count())
            @foreach ($this->availableTimeSlots as $slot)
                <input type="radio"
                name="time"
                id="time_{{ $slot->timestamp }}"
                value="{{ $slot->timestamp }}"
                wire:model='time'
                class="sr-only">
                <label for="time_{{ $slot->timestamp }}"
                    class="flex items-center w-full px-4 py-2 text-left border-gray-200 cursor-pointer focus:outline-none">
                    @if ($slot->timestamp == $time)
                        <svg class="w-4 h-4 mr-2 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                    @endif
                    {{ $slot->format('g:i A') }} <br>
                </label>
            @endforeach
        @else
            <div class="px-4 py-2 text-center text-gray-700">
                no available
            </div>
        @endif
    </div>
</div>
