{{-- @extends('layouts.app')

@section('content') --}}


@forelse ($slots as $slot)
{{$slot}} <br>
@empty

@endforelse

{{-- @endsection --}}
