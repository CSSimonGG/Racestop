<x-app-layout>
    <x-slot:title>
        Edit Profile | Racestop.net
    </x-slot:title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if (Auth::check())
            @role('writer')
                <div class="bg-night h-20 flex justify-center">
                    <div class="mt-6">
                        <a href="/create" class="bg-light-red uppercase text-white text-sm font-bold py-3 px-5 rounded">
                            Create post
                        </a>
                    </div>
                </div>
            @endrole
        @endif
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form method="POST" action="/logout">
                        @csrf
                        @method('POST')
                        <button class="bg-light-red p-2 rounded-lg text-white">Logout</button>
                    </form>
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
