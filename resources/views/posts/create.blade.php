<x-app-layout>
    <x-slot:title>{{__('dashboard.dashboard')}}</x-slot:title>
    <x-slot name="header">
        <h2 class="flex items-center justify-between font-semibold text-xl text-gray-800 leading-tight">
            {{__("dashboard.create")}}
            <a href="{{route('dashboard')}}" class="text-teal-600">{{__('dashboard.all')}}</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form class="container" action="{{route('store')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="block text-sm font-semibold leading-6 text-green-600">
                            {{__('dashboard.picture')}}
                        </label>
                        <input type="file"
                            class="block w-full rounded-md border-1 border-gray-300 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-sm sm:leading-6 @error('photo') is-invalid @enderror" required
                            name="photo">
                    </div>
                    <button type="submit"
                        class="block w-full rounded-md bg-cyan-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{__('dashboard.button')}}</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
