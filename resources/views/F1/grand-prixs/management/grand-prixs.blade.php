<x-app-layout>
    <x-slot:title>
        Manage Grand Prixs | Racestop.net
    </x-slot:title>
    <div>
        <div class="flex justify-center">
            <span class="bg-white w-[1024px]">
                <h1 class="text-2xl font-bold mt-5 flex justify-center">Manage Grand Prixs</h1>

                <div class="flex justify-center">
                    <div class="py-5 flex flex-col justify-start">
                        <h1 class="font-bold text-xl mb-2">Grand Prixs:</h1>
                        @foreach($grandprixs as $grandprix)
                            <a href="/f1/grand-prix/{{ $grandprix->id }}/edit">
                                <h2 class="hover:font-bold">{{ $grandprix->grand_prix }}</h2>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="bg-night h-20 flex justify-center">
                    <div class="mt-6">
                        <a href="/f1/grand-prix/create" class="bg-light-red uppercase text-white text-sm font-bold py-3 px-5 rounded">
                            New Grand Prix
                        </a>
                    </div>
                </div>
            </span>
        </div>
    </div>
</x-app-layout>
