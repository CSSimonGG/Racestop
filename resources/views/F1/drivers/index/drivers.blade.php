<x-app-layout>
    <x-slot:title>
        F1 2023 Drivers | Racestop
    </x-slot:title>

    <div class="flex justify-center">
        <span class="bg-white w-[1024px] max-lg:flex max-lg:flex-col max-lg:justify-center">
            <div class="flex">
                <div class="lg:w-[68.75%]">
                    <h1 class="m-5 font-bold text-2xl">F1 2023 Drivers</h1>
                    <div class="my-5 ml-5 flex flex-wrap">
                        @foreach ($drivers as $driver)
                            <a href="/f1/drivers/{{ Str::slug($driver->name) }}">
                                <div class="w-[322px] mb-5 mr-5">
                                    <div class="h-[200px] w-[322px] bg-night relative">
                                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H200L98 200H0V0Z" fill="{{ $driver->f1team->team_hex_color }}" />
                                        </svg>

                                        <img src="/images/drivers/{{ Str::slug($driver->name) }}.png" alt="{{ $driver->name }}"
                                            class="w-[220px] h-[220px] absolute -top-5">
                                        <img src="/images/teams/{{ $driver->f1team->logo_path }}" alt="{{ $driver->f1team->name }}"
                                            class="absolute
                                            @if($driver->f1team->id == 1) // Red Bull
                                            {
                                                h-[105px] top-0 right-[5px]
                                            }
                                            @elseif($driver->f1team->id == 2) // Ferrari
                                            {
                                                h-[105px] top-2.5 right-[22px]
                                            }
                                            @elseif($driver->f1team->id == 3) // Mercedes
                                            {
                                                h-[105px] top-2.5 right-[8px]
                                            }
                                            @elseif($driver->f1team->id == 4) // Mclaren
                                            {
                                                h-[75px] top-5 right-[8px]
                                            }
                                            @elseif($driver->f1team->id == 5) // Aston Martin
                                            {
                                                w-[172px] top-11 right-[5px]
                                            }
                                            @elseif($driver->f1team->id == 6) // Alpine
                                            {
                                                h-[75px] top-5 right-[4px]
                                            }
                                            @elseif($driver->f1team->id == 7) // Williams
                                            {
                                                h-[85px] top-2.5 right-[8px]
                                            }
                                            @elseif($driver->f1team->id == 8) // AlphaTauri
                                            {
                                                h-[60px] top-8 right-[8px]
                                            }
                                            @elseif($driver->f1team->id == 9) // Alfa Romeo
                                            {
                                                h-[105px] top-2.5 right-[8px]
                                            }
                                            @elseif($driver->f1team->id == 10) // Haas
                                            {
                                                h-[105px] top-2.5 right-[8px]
                                            }
                                            @endif ">
                                        <img src="/images/flags/{{ $driver->country->flag_path }}" alt="{{ $driver->country->country }}"
                                            class="w-[80px] absolute right-5 bottom-5">
                                    </div>
                                    <div class="h-[50px]  w-[322px] border relative">
                                        <span class="absolute left-2">
                                            <h1 class="font-bold text-night">
                                                {{ $driver->name }}
                                            </h1>
                                            <h2>
                                                {{ $driver->f1team->name }}
                                            </h2>
                                        </span>
                                        <div class="absolute top-2 right-2 text-2xl font-extrabold">
                                            {{ $driver->driver_number }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                <div class="max-lg:hidden h-[734px] w-[300px] bg-platinum mr-5 mt-[72px]">F1 Standings</div>
            </div>
        </span>
    </div>
</x-app-layout>
