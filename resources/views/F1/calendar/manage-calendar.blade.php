<x-app-layout>
    <x-slot:title>
        Manage F1 Calendar | Racestop
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px]">
            <main class="flex">
                <div>
                    <h1 class="m-5 font-bold text-2xl">Manage 2023 F1 Calendar</h1>
                    <div class="w-[664px] m-5 mb-20 p-5 bg-gray">
                        <div class="w-[624px]">
                            <div class="grid grid-cols-12 space-x-5 font-bold">
                                <div class="text-start col-span-3">Grand Prix</div>
                                <div class="text-start col-span-6">Circuit</div>
                                <div class="text-start col-span-3">Date</div>
                            </div>
                             @foreach ($f1races as $f1race)
                            <a href="/f1/calendar/{{ $f1race->grandprix->id }}/edit">
                                <div
                                    class="text-sm border border-platinum bg-white w-[624px] h-[60px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/{{ $f1race->grandprix->flag }}"
                                                 alt="">
                                            <span> {{ $f1race->grandprix->grand_prix }}</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">{{ $f1race->circuit }}</span>
                                    <span class="col-span-3">{{ date('d F', strtotime($f1race->start_date)) }} - {{ date('d F', strtotime($f1race->end_date)) }}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="max-lg:hidden h-[734px] w-[300px] bg-platinum mr-5 mt-[72px]">F1 Standings</div>
            </main>
        </span>
    </div>
</x-app-layout>
