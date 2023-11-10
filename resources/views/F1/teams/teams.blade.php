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
                            <a href="/f1/teams/{{ $f1team->name }}">
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
                                        <img src="/images/drivers/{{ Str::slug($drivers[0]->name) }}.png" alt="{{ $drivers[0]->name }}"
                                            class="w-[160px] h-[160px] absolute bottom-0 left-[0px]">
                                        <img src="/images/drivers/{{ Str::slug($drivers[0]->name) }}.png" alt="{{ $drivers[0]->name }}"
                                            class="w-[160px] h-[160px] absolute bottom-0 right-[0px]">
                                    </div>
                                    <div class="h-[50px] w-[322px] border relative">
                                        <span class="absolute left-2">
                                            <h1 class="font-bold text-night">
                                                {{ $f1team->name }}
                                            </h1>
                                            <h2>
                                                {{ $drivers[0]->name }} & {{ $drivers[0]->name }}
                                            </h2>
                                        </span>
                                        <div class="absolute top-1 right-1 text-2xl font-extrabold">
                                            <img src="/images/flags/{{ $f1team->country->flag_path }}" alt="AUT" class="w-[40px]">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach


                        <a href="/f1/teams/ferrari">
                            <div class="w-[322px] mb-5 2xsm:mr-5">
                                <div class="h-[200px] w-[322px] bg-night relative flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute left-0 top-0">
                                        <path d="M0 0H64L0 200V100V0Z" fill="#f91536" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute right-0 top-0">
                                        <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="#f91536" />
                                    </svg>
                                    <img src="/images/teams/ferrari.png" alt="Ferrari"
                                        class="h-[135px] absolute top-4">
                                    <img src="/images/drivers/charles-leclerc.png" alt="Charles Leclerc"
                                        class="w-[160px] h-[160px] absolute bottom-0 -left-[13px]">
                                    <img src="/images/drivers/carlos-sainz.png" alt="Carlos Sainz"
                                        class="w-[160px] h-[160px] absolute bottom-0 -right-[6px]">
                                </div>
                                <div class="h-[50px]  w-[322px] border relative">
                                    <span class="absolute left-2">
                                        <h1 class="font-bold text-night">
                                            Ferrari
                                        </h1>
                                        <h2>
                                            Charles Leclerc & Carlos Sainz
                                        </h2>
                                    </span>
                                    <div class="absolute top-1 right-1 text-2xl font-extrabold">
                                        <img src="/images/flags/ita-flag.png" alt="ITA" class="w-[40px]">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/f1/teams/mercedes">
                            <div class="w-[322px] mb-5 2xsm:mr-5">
                                <div class="h-[200px] w-[322px] bg-night relative flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute left-0 top-0">
                                        <path d="M0 0H64L0 200V100V0Z" fill="#6cd2bf" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute right-0 top-0">
                                        <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="#6cd2bf" />
                                    </svg>
                                    <img src="/images/teams/mercedes.png" alt="Mercedes"
                                        class="h-[105px] absolute top-4">
                                    <img src="/images/drivers/lewis-hamilton.png" alt="Lewis Hamilton"
                                        class="w-[160px] h-[160px] absolute bottom-0 -left-[2px]">
                                    <img src="/images/drivers/george-russell.png" alt="George Russell"
                                        class="w-[160px] h-[160px] absolute bottom-0 -right-[7px]">
                                </div>
                                <div class="h-[50px]  w-[322px] border relative">
                                    <span class="absolute left-2">
                                        <h1 class="font-bold text-night">
                                            Mercedes
                                        </h1>
                                        <h2>
                                            Lewis Hamilton & George Russell
                                        </h2>
                                    </span>
                                    <div class="absolute top-1 right-1 text-2xl font-extrabold">
                                        <img src="/images/flags/deu-flag.png" alt="DEU" class="w-[40px]">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/f1/teams/aston-martin">
                            <div class="w-[322px] mb-5 2xsm:mr-5">
                                <div class="h-[200px] w-[322px] bg-night relative flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute left-0 top-0">
                                        <path d="M0 0H64L0 200V100V0Z" fill="#358c75" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute right-0 top-0">
                                        <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="#358c75" />
                                    </svg>
                                    <img src="/images/teams/astonmartin.png" alt="Aston Martin"
                                        class="w-[172px] absolute top-8">
                                    <img src="/images/drivers/fernando-alonso.png" alt="Fernando Alonso"
                                        class="w-[160px] h-[160px] absolute bottom-0 -left-[13px]">
                                    <img src="/images/drivers/lance-stroll.png" alt="Lance Stroll"
                                        class="w-[160px] h-[160px] absolute bottom-0 -right-[9px]">
                                </div>
                                <div class="h-[50px]  w-[322px] border relative">
                                    <span class="absolute left-2">
                                        <h1 class="font-bold text-night">
                                            Aston Martin
                                        </h1>
                                        <h2>
                                            Fernando Alonso & Lance Stroll
                                        </h2>
                                    </span>
                                    <div class="absolute top-1 right-1 text-2xl font-extrabold">
                                        <img src="/images/flags/gbr-flag.png" alt="GBR" class="w-[40px]">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/f1/teams/mclaren">
                            <div class="w-[322px] mb-5 2xsm:mr-5">
                                <div class="h-[200px] w-[322px] bg-night relative flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute left-0 top-0">
                                        <path d="M0 0H64L0 200V100V0Z" fill="#f58020" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute right-0 top-0">
                                        <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="#f58020" />
                                    </svg>
                                    <img src="/images/teams/mclaren.png" alt="McLaren"
                                        class="h-[85px] absolute top-5">
                                    <img src="/images/drivers/lando-norris.png" alt="Lando Norris"
                                        class="w-[160px] h-[160px] absolute bottom-0 -left-[15px]">
                                    <img src="/images/drivers/oscar-piastri.png" alt="Oscar Piastri"
                                        class="w-[160px] h-[160px] absolute bottom-0 -right-[9px]">
                                </div>
                                <div class="h-[50px]  w-[322px] border relative">
                                    <span class="absolute left-2">
                                        <h1 class="font-bold text-night">
                                            McLaren
                                        </h1>
                                        <h2>
                                            Lando Norris & Oscar Piastri
                                        </h2>
                                    </span>
                                    <div class="absolute top-1 right-1 text-2xl font-extrabold">
                                        <img src="/images/flags/gbr-flag.png" alt="GBR" class="w-[40px]">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/f1/teams/alpine">
                            <div class="w-[322px] mb-5 2xsm:mr-5">
                                <div class="h-[200px] w-[322px] bg-night relative flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute left-0 top-0">
                                        <path d="M0 0H64L0 200V100V0Z" fill="#2293d0" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute right-0 top-0">
                                        <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="#2293d0" />
                                    </svg>
                                    <img src="/images/teams/alpine.png" alt="Alpine"
                                        class="h-[85px] absolute top-6">
                                    <img src="/images/drivers/esteban-ocon.png" alt="Esteban Ocon"
                                        class="w-[160px] h-[160px] absolute bottom-0 -left-[17px]">
                                    <img src="/images/drivers/pierre-gasly.png" alt="Pierre Gasly"
                                        class="w-[160px] h-[160px] absolute bottom-0 -right-[8px]">
                                </div>
                                <div class="h-[50px]  w-[322px] border relative">
                                    <span class="absolute left-2">
                                        <h1 class="font-bold text-night">
                                            Alpine
                                        </h1>
                                        <h2>
                                            Esteban Ocon & Pierre Gasly
                                        </h2>
                                    </span>
                                    <div class="absolute top-1 right-1 text-2xl font-extrabold">
                                        <img src="/images/flags/fra-flag.png" alt="FRA" class="w-[40px]">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/f1/teams/alfa-romeo">
                            <div class="w-[322px] mb-5 2xsm:mr-5">
                                <div class="h-[200px] w-[322px] bg-night relative flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute left-0 top-0">
                                        <path d="M0 0H64L0 200V100V0Z" fill="#c92d4b" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute right-0 top-0">
                                        <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="#c92d4b" />
                                    </svg>
                                    <img src="/images/teams/alfaromeo.png" alt="Alfa Romeo"
                                        class="h-[105px] absolute top-4">
                                    <img src="/images/drivers/valtteri-bottas.png" alt="Valtteri Bottas"
                                        class="w-[160px] h-[160px] absolute bottom-0 -left-[6px]">
                                    <img src="/images/drivers/guanyu-zhou.png" alt="Guanyu Zhou"
                                        class="w-[160px] h-[160px] absolute bottom-0 -right-[8px]">
                                </div>
                                <div class="h-[50px]  w-[322px] border relative">
                                    <span class="absolute left-2">
                                        <h1 class="font-bold text-night">
                                            Alfa Romeo
                                        </h1>
                                        <h2>
                                            Valtteri Bottas & Guanyu Zhou
                                        </h2>
                                    </span>
                                    <div class="absolute top-1 right-1 text-2xl font-extrabold">
                                        <img src="/images/flags/che-flag.png" alt="CHE" class="w-[40px]">
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="/f1/teams/haas">
                            <div class="w-[322px] mb-5 2xsm:mr-5">
                                <div class="h-[200px] w-[322px] bg-night relative flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute left-0 top-0">
                                        <path d="M0 0H64L0 200V100V0Z" fill="#b6babd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute right-0 top-0">
                                        <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="#b6babd" />
                                    </svg>
                                    <img src="/images/teams/haas.png" alt="Haas"
                                        class="h-[105px] absolute top-4">
                                    <img src="/images/drivers/nico-hulkenberg.png" alt="Nico Hulkenberg"
                                        class="w-[160px] h-[160px] absolute bottom-0 -left-[14px]">
                                    <img src="/images/drivers/kevin-magnussen.png" alt="Kevin Magnussen"
                                        class="w-[160px] h-[160px] absolute bottom-0 -right-[8px]">
                                </div>
                                <div class="h-[50px]  w-[322px] border relative">
                                    <span class="absolute left-2">
                                        <h1 class="font-bold text-night">
                                            Haas
                                        </h1>
                                        <h2>
                                            Nico Hulkenberg & Kevin Magnussen
                                        </h2>
                                    </span>
                                    <div class="absolute top-1 right-1 text-2xl font-extrabold">
                                        <img src="/images/flags/usa-flag.png" alt="USA" class="w-[40px]">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/f1/teams/williams">
                            <div class="w-[322px] mb-5 2xsm:mr-5">
                                <div class="h-[200px] w-[322px] bg-night relative flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute left-0 top-0">
                                        <path d="M0 0H64L0 200V100V0Z" fill="#37bedd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute right-0 top-0">
                                        <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="#37bedd" />
                                    </svg>
                                    <img src="/images/teams/williams.png" alt="Williams"
                                        class="h-[105px] absolute top-4">
                                    <img src="/images/drivers/alexander-albon.png" alt="Alexander Albon"
                                        class="w-[160px] h-[160px] absolute bottom-0 -left-[11px]">
                                    <img src="/images/drivers/logan-sargeant.png" alt="Logan Sargeant"
                                        class="w-[160px] h-[160px] absolute bottom-0 -right-[7px]">
                                </div>
                                <div class="h-[50px]  w-[322px] border relative">
                                    <span class="absolute left-2">
                                        <h1 class="font-bold text-night">
                                            Williams
                                        </h1>
                                        <h2>
                                            Alexander Albon & Logan Sargeant
                                        </h2>
                                    </span>
                                    <div class="absolute top-1 right-1 text-2xl font-extrabold">
                                        <img src="/images/flags/gbr-flag.png" alt="GBR" class="w-[40px]">
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/f1/teams/alphatauri">
                            <div class="w-[322px] mb-5 2xsm:mr-5">
                                <div class="h-[200px] w-[322px] bg-night relative flex justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute left-0 top-0">
                                        <path d="M0 0H64L0 200V100V0Z" fill="#5e8faa" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="200"
                                        viewBox="0 0 64 200" fill="none" class="absolute right-0 top-0">
                                        <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="#5e8faa" />
                                    </svg>
                                    <img src="/images/teams/alphatauri.png" alt="AlphaTauri"
                                        class="w-[172px] absolute top-4">
                                    <img src="/images/drivers/yuki-tsunoda.png" alt="Yuki Tsunoda"
                                        class="w-[160px] h-[160px] absolute bottom-0 -left-[10px]">
                                    <img src="/images/drivers/daniel-ricciardo.png" alt="Daniel Ricciardo"
                                        class="w-[160px] h-[160px] absolute bottom-0 -right-[0px]">
                                </div>
                                <div class="h-[50px]  w-[322px] border relative">
                                    <span class="absolute left-2">
                                        <h1 class="font-bold text-night">
                                            AlphaTauri
                                        </h1>
                                        <h2>
                                            Yuki Tsunoda & Daniel Ricciardo
                                        </h2>
                                    </span>
                                    <div class="absolute top-1 right-1 text-2xl font-extrabold">
                                        <img src="/images/flags/ita-flag.png" alt="ITA" class="w-[40px]">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="max-lg:hidden h-[734px] w-[300px] bg-platinum mr-5 mt-[72px]">F1 Standings</div>
            </div>
        </span>
    </div>
</x-app-layout>
