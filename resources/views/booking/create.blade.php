<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Table') }}
        </h2>

    </x-slot>

    <div class="container ml-3">
        <form action="{{route('bookings.store')}}" method="POST">
            @csrf
           @include("booking._form",["buttonText"=>__("Submit")])
        </form>
    </div>




</x-app-layout>
