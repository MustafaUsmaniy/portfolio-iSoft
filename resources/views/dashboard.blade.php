<x-app-layout>
    <x-slot:title>{{__('dashboard.dashboard')}}</x-slot:title>
    <x-slot name="header">
        <h2 class="flex items-center justify-between font-semibold text-xl text-gray-800 leading-tight">
            {{__("dashboard.dashboard")}}
            <a href="{{route('create')}}" class="text-teal-600">{{__('dashboard.create')}}</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("dashboard.status") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
