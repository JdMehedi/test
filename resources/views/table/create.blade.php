<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Table') }}
        </h2>

    </x-slot>

    <div class="container ml-3">
        <form action="{{route('tables.store')}}" method="POST">
            @csrf
           @include("table._form",["buttonText"=>__("Create")])
        </form>
    </div>




</x-app-layout>
