<x-app-layout>
    <x-slot:title>
        McLaren | Racestop.net
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px] max-lg:flex max-lg:flex-col max-lg:justify-center">
            <div class="max-lg:flex max-lg:justify-center">
                <div class="my-5 lg:ml-5">
                    <div class="lg:flex">
                        <div class="3xsm:w-[483px] max-3xsm:w-[90vw] mb-5 lg:mr-5">
                            <h1 class="mb-5 max-3xsm:ml-5 font-bold text-2xl">McLaren</h1>
                            <div
                                class="max-4xsm:h-[150px] 4xsm:h-[300px] 3xsm:w-[483px] max-3xsm:ml-5 bg-night relative flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 200" fill="none"
                                    class="absolute left-0 top-0 max-4xsm:h-[150px] 4xsm:h-[300px]">
                                    <path d="M0 0H64L0 200V100V0Z" fill="#f58020" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 200" fill="none"
                                    class="absolute right-0 top-0 max-4xsm:h-[150px] 4xsm:h-[300px]">
                                    <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="#f58020" />
                                </svg>
                                <img src="/images/teams/mclaren.png" alt="McLaren"
                                    class="h-[105px] mt-[22.5px] absolute top-0">
                                <img src="/images/drivers/lando-norris.png" alt="Lando Norris"
                                    class="max-4xsm:hidden w-[240px] h-[240px] absolute bottom-0 -left-[15px]">
                                <img src="/images/drivers/oscar-piastri.png" alt="Oscar Piastri"
                                    class="max-4xsm:hidden w-[240px] h-[240px] absolute bottom-0 -right-[9px]">
                            </div>
                        </div>
                        <div class="flex space-x-10 text-lg lg:mt-12 max-3xsm:ml-5">
                            <div class="flex flex-col space-y-1 font-bold">
                                <div>Full Team Name</div>
                                <div>Nationality</div>
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
                                <div>McLaren Formula 1 Team</div>
                                <div>British</div>
                                <div>Andrea Stella</div>
                                <div>Mercedes</div>
                                <div>8</div>
                                <div>6092.5</div>
                                <div>1 (x183)</div>
                                <div>496</div>
                                <div>156</div>
                                <div>162</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl my-5 ml-5">Drivers</h1>
                        <div class="lg:flex">
                            <a href="/f1/drivers/lando-norris">
                                <div class="w-[322px] mb-5 lg:mr-5">
                                    <div class="h-[200px] w-[322px] bg-night relative">
                                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H200L98 200H0V0Z" fill="#f58020" />
                                        </svg>

                                        <img src="/images/drivers/lando-norris.png" alt="Lando Norris"
                                            class="w-[220px] h-[220px] absolute -top-5 -left-3">
                                        <img src="/images/teams/mclaren.png" alt="McLaren"
                                            class="h-[75px] absolute top-5 right-[8px]">
                                        <img src="/images/flags/gbr-flag.png" alt="GBR"
                                            class="w-[80px] absolute right-5 bottom-5">
                                    </div>
                                    <div class="h-[50px] w-[322px] border relative">
                                        <span class="absolute left-2">
                                            <h1 class="font-bold text-night">
                                                Lando Norris
                                            </h1>
                                            <h2>
                                                McLaren
                                            </h2>
                                        </span>
                                        <div class="absolute top-2 right-2 text-2xl font-extrabold">
                                            4
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/f1/drivers/oscar-piastri">
                                <div class="w-[322px] mb-5">
                                    <div class="h-[200px] w-[322px] bg-night relative">
                                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H200L98 200H0V0Z" fill="#f58020" />
                                        </svg>

                                        <img src="/images/drivers/oscar-piastri.png" alt="Oscar Piastri"
                                            class="w-[220px] h-[220px] absolute -top-5 -left-3">
                                        <img src="/images/teams/mclaren.png" alt="McLaren"
                                            class="h-[75px] absolute top-5 right-[8px]">
                                        <img src="/images/flags/aus-flag.png" alt="AUS"
                                            class="w-[80px] absolute right-5 bottom-5">
                                    </div>
                                    <div class="h-[50px] w-[322px] border relative">
                                        <span class="absolute left-2">
                                            <h1 class="font-bold text-night">
                                                Oscar Piastri
                                            </h1>
                                            <h2>
                                                McLaren
                                            </h2>
                                        </span>
                                        <div class="absolute top-2 right-2 text-2xl font-extrabold">
                                            81
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </span>
    </div>
</x-app-layout>
