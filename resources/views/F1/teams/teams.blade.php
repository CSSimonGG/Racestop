<x-app-layout>
    <x-slot:title>
        F1 Teams | Racestop
    </x-slot:title>

    <div class="flex justify-center">
        <span class="bg-white w-[1024px] max-lg:flex max-lg:flex-col max-lg:justify-center">
            <div class="flex">
                <div class="lg:w-[68.75%]">
                    <h1 class="m-5 font-bold text-2xl">F1 Teams</h1>
                    <div class="my-5 4xsm:ml-5 flex flex-wrap">
                        @foreach($f1teams as $f1team)
                            <a href="/f1/teams/{{ Str::slug($f1team->name) }}">
                                <div class="w-[322px] mb-5 2xsm:mr-5">
                                    <div class="h-[200px] w-[322px] bg-night relative flex justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                            viewBox="0 0 64 200" fill="none" class="absolute left-0 top-0">
                                            <path d="M0 0H64L0 200V100V0Z" fill="{{ $f1team->team_hex_color }}" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                            viewBox="0 0 64 200" fill="none" class="absolute right-0 top-0">
                                            <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="{{ $f1team->team_hex_color }}" />
                                        </svg>
                                        <img src="/images/teams/{{ $f1team->logo_path }}" alt="{{ $f1team->name }}"
                                            class="absolute
                                            @if($f1team->id == 1) // Red Bull
                                            {
                                                h-[105px] top-0
                                            }
                                            @elseif($f1team->id == 2) // Ferrari
                                            {
                                                h-[125px] top-4
                                            }
                                            @elseif($f1team->id == 3) // Mercedes
                                            {
                                                h-[105px] top-4
                                            }
                                            @elseif($f1team->id == 4) // Mclaren
                                            {
                                                h-[85px] top-5
                                            }
                                            @elseif($f1team->id == 5) // Aston Martin
                                            {
                                                w-[172px] top-8
                                            }
                                            @elseif($f1team->id == 6) // Alpine
                                            {
                                                h-[85px] top-6
                                            }
                                            @elseif($f1team->id == 7) // Williams
                                            {
                                                h-[105px] top-4
                                            }
                                            @elseif($f1team->id == 8) // AlphaTauri
                                            {
                                                w-[172px] top-4
                                            }
                                            @elseif($f1team->id == 9) // Alfa Romeo
                                            {
                                               h-[105px] top-4
                                            }
                                            @elseif($f1team->id == 10) // Haas
                                            {
                                                h-[105px] top-4
                                            }
                                            @endif
                                            ">
                                        <img src="/images/drivers/{{ Str::slug(App\Models\Driver::where('f1team_id', $f1team->id)->value('name')) }}.png" alt="{{ App\Models\Driver::where('f1team_id', $f1team->id)->value('name') }}"
                                            class="w-[160px] h-[160px] absolute bottom-0 left-[0px]">
                                        <img src="/images/drivers/{{ Str::slug(App\Models\Driver::where('f1team_id', $f1team->id)->skip(1)->value('name')) }}.png" alt="{{ App\Models\Driver::where('f1team_id', $f1team->id)->skip(1)->value('name') }}"
                                            class="w-[160px] h-[160px] absolute bottom-0 right-[0px]">
                                    </div>
                                    <div class="h-[50px] w-[322px] border relative">
                                        <span class="absolute left-2">
                                            <h1 class="font-bold text-night">
                                                {{ $f1team->name }}
                                            </h1>
                                            <h2>
                                                {{ App\Models\Driver::where('f1team_id', $f1team->id)->value('name') }} & {{ App\Models\Driver::where('f1team_id', $f1team->id)->skip(1)->value('name') }}
                                            </h2>
                                        </span>
                                        <div class="absolute top-1 right-1 text-2xl font-extrabold">
                                            <img src="/images/flags/{{ $f1team->country->flag_path }}" alt="AUT" class="w-[40px]">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="max-lg:hidden h-[734px] w-[300px] bg-platinum mr-5 mt-[72px]">F1 Standings</div>
            </div>
        </span>
    </div>
</x-app-layout>
