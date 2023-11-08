<x-app-layout>
    <x-slot:title>
        {{ $driver->name }} | Racestop.net
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px] max-lg:flex max-lg:flex-col max-lg:justify-center">
            <div class="max-lg:flex max-lg:justify-center">
                <div class="my-5 lg:ml-5">
                    <div class="lg:flex">
                        <div class="lg:mr-5 mb-5 max-3xsm:5xsm:ml-5">
                            <h1 class="mb-5 font-bold max-5xsm:ml-5 5xsm:text-2xl">{{ $driver->name }}</h1>
                            <div
                                class="max-5xsm:h-[250px] 5xsm:h-[300px] 3xsm:w-[483px] bg-night relative flex justify-center">
                                <div class="3xsm:w-[483px] max-3xsm:w-[90vw]">
                                    <div class="max-5xsm:h-[250px] 5xsm:h-[300px]">
                                        <svg width="300" height="300" viewBox="0 0 200 200" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="absolute left-0 top-0 max-5xsm:h-[250px] max-5xsm:w-[250px] 4xsm:h-[300px]">
                                            <path d="M0 0H200L98 200H0V0Z" fill="{{ $driver->f1team->team_hex_color }}" />
                                        </svg>

                                        <img src="/images/drivers/{{ Str::slug($driver->name) }}.png" alt="{{ $driver->name }}"
                                            class="max-5xsm:w-[250px] max-4xsm:5xsm:w-[300px] 4xsm:w-[320px] 4xsm:h-[320px] absolute bottom-0">
                                        <img src="/images/teams/{{ $driver->f1team->logo_path }}" alt="{{ $driver->f1team->name }}"
                                            class="max-3xsm:hidden h-[140px] absolute top-4 right-[10px]">
                                         <img src="/images/flags/{{ $driver->country->flag_path }}" alt="{{ $driver->country->country }}"
                                            class="max-4xsm:5xsm:mr-5 max-4xsm:w-[80px] 4xsm:w-[120px] absolute right-5 bottom-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-10 text-lg lg:mt-12 max-3xsm:ml-5">
                            <div class="flex flex-col space-y-1 font-bold">
                                <div>Name</div>
                                <div>Team</div>
                                <div>Country</div>
                                <div>Podiums</div>
                                <div>Points</div>
                                <div>Grands Prix Entered</div>
                                <div>World Championships</div>
                                <div>Highest Race Finish</div>
                                <div>Pole Positions</div>
                                <div>Fastest Laps</div>
                                <div>Birth Date</div>
                                <div>Birth Place</div>
                            </div>
                            <div class="flex flex-col space-y-1">
                                <div>{{ $driver->name }}</div>
                                <div>{{ $driver->f1team->name }}</div>
                                <div>{{ $driver->country->country }}</div>
                                <div>{{ $driver->podiums }}</div>
                                <div>{{ $driver->world_championship_points }}</div>
                                <div>{{ $driver->grand_prix_entered }}</div>
                                <div>{{ $driver->world_championships }}</div>
                                <div>{{ $driver->highest_race_finish }} (x{{ $driver->highest_race_finish_times }})</div>
                                <div>{{ $driver->pole_positions }}</div>
                                <div>{{ $driver->fastest_laps }}</div>
                                <div>{{ $driver->birth_date }}</div>
                                <div>{{ $driver->birth_place }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 mb-5">
                        <h2 class="font-bold text-2xl mb-5">Biography</h2>
                        <p>{{ $driver->biography }}</p>
                        <br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </span>
    </div>
</x-app-layout>
