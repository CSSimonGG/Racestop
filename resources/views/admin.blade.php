<x-app-layout>
    <x-slot:title>
        Admin | Racestop.net
    </x-slot:title>
    <div>
        <h1 class="text-2xl font-bold my-5 flex justify-center">Admin Dashboard</h1>
        @if (Auth::check())
                <div class="bg-night h-20 flex justify-center">
                    <div class="mt-6">
                        <a href="/categories" class="bg-light-red uppercase text-white text-sm font-bold py-3 px-5 rounded">
                            Manage Categories
                        </a>
                    </div>
                </div>
        @endif
        <br>
    </div>
</x-app-layout>
