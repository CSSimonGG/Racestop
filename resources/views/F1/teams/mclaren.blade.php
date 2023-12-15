<x-app-layout>
    <x-slot:title>
        {{ $f1team->name }}  | Racestop.net
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px] max-lg:flex max-lg:flex-col max-lg:justify-center">
            <div class="max-lg:flex max-lg:justify-center">
                <div class="my-5 lg:ml-5">
                    <div class="lg:flex">
                        <div class="3xsm:w-[483px] max-3xsm:w-[90vw] mb-5 lg:mr-5">
                            <h1 class="mb-5 max-3xsm:ml-5 font-bold text-2xl">{{ $f1team->name }} </h1>
                            <div
                                class="max-4xsm:h-[150px] 4xsm:h-[300px] 3xsm:w-[483px] max-3xsm:ml-5 bg-night relative flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 200" fill="none"
                                    class="absolute left-0 top-0 max-4xsm:h-[150px] 4xsm:h-[300px]">
                                    <path d="M0 0H64L0 200V100V0Z" fill="{{ $f1team->team_hex_color }}" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 200" fill="none"
                                    class="absolute right-0 top-0 max-4xsm:h-[150px] 4xsm:h-[300px]">
                                    <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="{{ $f1team->team_hex_color }}" />
                                </svg>
                                <img src="/images/teams/{{ $f1team->logo_path }}" alt="{{ $f1team->name }}"
                                    class="h-[105px] mt-[22.5px] absolute top-0">
                                <img src="/images/drivers/{{ Str::slug($driverOne->name) }}.png" alt="{{ $driverOne->name }}"
                                    class="max-4xsm:hidden w-[240px] h-[240px] absolute bottom-0 -left-[15px]">
                                <img src="/images/drivers/{{ Str::slug($driverTwo->name) }}.png" alt="{{ $driverTwo->name }}"
                                    class="max-4xsm:hidden w-[240px] h-[240px] absolute bottom-0 -right-[9px]">
                            </div>
                        </div>
                        <div class="flex space-x-10 text-lg lg:mt-12 max-3xsm:ml-5">
                            <div class="flex flex-col space-y-1 font-bold">
                                <div>Team Name</div>
                                <div>Country</div>
                                <div>Team Chief</div>
                                <div>Power Unit</div>
                                <div>World Championships</div>
                                <div>WC Points</div>
                                <div>Highest Race Finish</div>
                                <div>Podiums</div>
                                <div>Pole Positions</div>
                                <div>Fastest Laps</div>
                            </div>
                            <div class="flex flex-col space-y-1">
                                <div>{{ $f1team->name }}</div>
                                <div>{{ $f1team->country->country }}</div>
                                <div>{{ $f1team->team_chief }}</div>
                                <div>{{ $f1team->power_unit }}</div>
                                <div>{{ $f1team->world_championships }}</div>
                                <div>{{ $f1team->world_championship_points }}</div>
                                <div>{{ $f1team->highest_race_finish }} (x{{ $f1team->highest_race_finish_times }})</div>
                                <div>{{ $f1team->podiums }}</div>
                                <div>{{ $f1team->pole_positions }}</div>
                                <div>{{ $f1team->fastest_laps }}</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl my-5 ml-5">Drivers</h1>
                        <div class="lg:flex">
                            <a href="/f1/drivers/{{ Str::slug($driverOne->name) }}">
                                <div class="w-[322px] mb-5 lg:mr-5">
                                    <div class="h-[200px] w-[322px] bg-night relative">
                                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H200L98 200H0V0Z" fill="{{ $f1team->team_hex_color }}" />
                                        </svg>
                                        <img src="/images/drivers/{{ Str::slug($driverOne->name) }}.png" alt="{{ $driverOne->name }}"
                                            class="w-[220px] h-[220px] absolute -top-5 -left-3">
                                        <img src="/images/teams/{{ $f1team->logo_path }}" alt="{{ $f1team->name }}"
                                            class="h-[75px] absolute top-5 right-[8px]">
                                        <img src="/images/flags/{{ $driverOne->country->flag_path }}" alt="{{ $driverOne->country->country }}"
                                            class="w-[80px] absolute right-5 bottom-5">
                                    </div>
                                    <div class="h-[50px] w-[322px] border relative">
                                        <span class="absolute left-2">
                                            <h1 class="font-bold text-night">
                                                {{ $driverOne->name }}
                                            </h1>
                                            <h2>
                                                {{ $f1team->name }}
                                            </h2>
                                        </span>
                                        <div class="absolute top-2 right-2 text-2xl font-extrabold">
                                            {{ $driverOne->driver_number }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/f1/drivers/{{ Str::slug($driverTwo->name) }}">
                                <div class="w-[322px] mb-5">
                                    <div class="h-[200px] w-[322px] bg-night relative">
                                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H200L98 200H0V0Z" fill="{{ $f1team->team_hex_color }}" />
                                        </svg>
                                        <img src="/images/drivers/{{ Str::slug($driverTwo->name) }}.png" alt="{{ $driverTwo->name }}"
                                            class="w-[220px] h-[220px] absolute -top-5 -left-3">
                                        <img src="/images/teams/{{ $f1team->logo_path }}" alt="{{ $f1team->name }}"
                                            class="h-[75px] absolute top-5 right-[8px]">
                                        <img src="/images/flags/{{ $driverTwo->country->flag_path }}" alt="{{ $driverTwo->country->country }}"
                                            class="w-[80px] absolute right-5 bottom-5">
                                    </div>
                                    <div class="h-[50px] w-[322px] border relative">
                                        <span class="absolute left-2">
                                            <h1 class="font-bold text-night">
                                                {{ $driverTwo->name }}
                                            </h1>
                                            <h2>
                                                {{ $f1team->name }}
                                            </h2>
                                        </span>
                                        <div class="absolute top-2 right-2 text-2xl font-extrabold">
                                            {{ $driverTwo->driver_number }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @if (Auth::check())
                @role('admin')
                <div class="bg-night h-20 flex justify-center space-x-3">
                        <div class="mt-6">
                            <a href="/f1/teams/{{ $f1team->id }}/edit"
                               class="bg-light-red uppercase text-white text-sm font-bold py-3 px-5 rounded">
                                Edit Team
                            </a>
                        </div>
                    </div>
                @endrole
            @endif
        </span>
    </div>
</x-app-layout>
