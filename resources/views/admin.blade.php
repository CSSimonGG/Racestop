<x-app-layout>
    <x-slot:title>
        Admin | Racestop.net
    </x-slot:title>
    <div>
        <div class="flex justify-center">
            <span class="bg-white w-[1024px]">
                <h1 class="text-2xl font-bold my-5 flex justify-center">Admin Dashboard</h1>
                @if (Auth::check())
                    <div class="bg-night h-20 flex justify-center">
                        <div class="mt-6">
                            <a href="/categories"
                               class="bg-light-red uppercase text-white text-sm font-bold py-3 px-5 rounded">
                                Manage Categories
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="bg-night h-20 flex justify-center">
                            <div class="mt-6">
                                <a href="/f1/grand-prixs/manage"
                                   class="bg-light-red uppercase text-white text-sm font-bold py-3 px-5 rounded">
                                    Manage Grand Prixs
                                </a>
                            </div>
                        </div>
                    <br>
                    <div class="bg-night h-20 flex justify-center">
                        <div class="mt-6">
                            <a href="/f1/calendar/manage"
                               class="bg-light-red uppercase text-white text-sm font-bold py-3 px-5 rounded">
                                Manage F1 Races/Calendar
                            </a>
                        </div>
                    </div>
                @endif
                <br>
            </span>
        </div>
    </div>
</x-app-layout>
