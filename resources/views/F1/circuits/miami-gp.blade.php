<x-app-layout>
    <x-slot:title>
        F1 {{ $f1race->grandprix->grand_prix }} | Racestop
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px] max-lg:flex max-lg:flex-col max-lg:justify-center">
            <div class="max-lg:flex max-lg:justify-center">
                <div class="lg:ml-5">
                    <div class="lg:flex">
                        <div class="lg:mr-10 mb-5">
                            <h1 class="max-4xsm:hidden max-3xsm:ml-5 mt-5 mb-5 font-bold 5xsm:text-2xl">{{ $f1race->grandprix->grand_prix }}</h1>
                            <div
                                class="max-4xsm:h-[180px] 4xsm:h-[250px] 4xsm:w-[420px] bg-night relative flex justify-center">
                                <div class="max-3xsm:w-[90vw] mx-5 flex">
                                    <div class="">
                                        <div class="font-bold mt-2">
                                            <img class="max-4xsm:ml-3 max-4xsm:mt-3 w-[80px] absolute left-2" src="/images/flags/{{ $f1race->grandprix->country->flag_path }}"
                                                 alt="{{ $f1race->grandprix->country->country }}">
                                            <div class="absolute max-4xsm:left-28 4xsm:left-24 top-1">
                                                <h1 class="text-white text-2xl">{{ $f1race->grandprix->grand_prix }}</h1>
                                                <h1 class="text-light-red text-xl">{{ $f1race->circuit }}</h1>
                                            </div>
                                        </div>
                                        <div class="text-white absolute bottom-4 4xsm:right-4">
                                            <h2 class="text-xl font-bold">{{ date('Y', strtotime($f1race->start_date)) }} Grand Prix</h2>
                                            <h3>{{ date('d M', strtotime($f1race->start_date)) }} - {{ date('d M', strtotime($f1race->end_date)) }}</h3>
                                        </div>
                                    </div>
                                    <div class="absolute left-2 bottom-4 max-4xsm:hidden">
                                        <img class="w-[200px]" src="/images/circuit/{{ $f1race->circuit_image }}"
                                             alt="{{ $f1race->grandprix->grand_prix }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-10 text-lg lg:mt-12 max-3xsm:ml-5">
                            <div class="flex flex-col space-y-1 font-bold">
                                <div>Country</div>
                                <div>Circuit</div>
                                <div>First Grand Prix</div>
                                <div>Number of Laps</div>
                                <div>Circuit Length</div>
                                <div>Race Distance</div>
                                <div>Lap Record</div>
                                <div>Record Holder</div>
                                <div>Last Winner</div>
                            </div>
                            <div class="flex flex-col space-y-1">
                                <div>{{ $f1race->grandprix->country->country }}</div>
                                <div>{{ $f1race->grandprix->grand_prix }}</div>
                                <div>{{ $f1race->first_gp }}</div>
                                <div>{{ $f1race->laps }}</div>
                                <div>{{ $f1race->circuit_length }} km</div>
                                <div>{{ $f1race->race_distance }} km</div>
                                <div>{{ $f1race->lap_record }} &lpar;{{ $f1race->lap_record_year }}&rpar;</div>
                                <div>{{ App\Models\Driver::where('id', $f1race->lap_record_holder_driver_id)->value('name') }}</div>
                                <div>{{ App\Models\Driver::where('id', $f1race->last_winner_driver_id)->value('name') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 mb-5 max-3xsm:ml-5">
                        <h2 class="font-bold text-2xl mb-5">Information</h2>
                        <p>{{ $f1race->information }}</p>
                        <br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </span>
    </div>
</x-app-layout>
