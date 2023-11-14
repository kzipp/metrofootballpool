<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{-- auth check --}}
    @if (Auth::check())
    <livewire:PickGames />
    @else
    Welcome. Please login or register above
    @endif
</x-app-layout>
