<x-app-layout>
    <x-slot:title>
        Alpine | Racestop.net
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px] max-lg:flex max-lg:flex-col max-lg:justify-center">
            <div class="max-lg:flex max-lg:justify-center">
                <div class="my-5 lg:ml-5">
                    <div class="lg:flex">
                        <div class="3xsm:w-[483px] max-3xsm:w-[90vw] mb-5 lg:mr-5">
                            <h1 class="mb-5 max-3xsm:ml-5 font-bold text-2xl">Alpine</h1>
                            <div
                                class="max-4xsm:h-[150px] 4xsm:h-[300px] 3xsm:w-[483px] max-3xsm:ml-5 bg-night relative flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 200" fill="none"
                                    class="absolute left-0 top-0 max-4xsm:h-[150px] 4xsm:h-[300px]">
                                    <path d="M0 0H64L0 200V100V0Z" fill="#2293d0" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 200" fill="none"
                                    class="absolute right-0 top-0 max-4xsm:h-[150px] 4xsm:h-[300px]">
                                    <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="#2293d0" />
                                </svg>
                                <img src="/images/teams/alpine.png" alt="Alpine"
                                    class="h-[105px] mt-[22.5px] absolute top-0">
                                <img src="/images/drivers/esteban-ocon.png" alt="Esteban Ocon"
                                    class="max-4xsm:hidden w-[240px] h-[240px] absolute bottom-0 -left-[17px]">
                                <img src="/images/drivers/pierre-gasly.png" alt="Pierre Gasly"
                                    class="max-4xsm:hidden w-[240px] h-[240px] absolute bottom-0 -right-[8px]">
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
                                <div>BTW Alpine F1 Team</div>
                                <div>French</div>
                                <div>Otmar Szafnauer</div>
                                <div>Renault</div>
                                <div>2</div>
                                <div>1890</div>
                                <div>1 (x21)</div>
                                <div>103</div>
                                <div>20</div>
                                <div>15</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl my-5 ml-5">Drivers</h1>
                        <div class="lg:flex">
                            <a href="/f1/drivers/esteban-ocon">
                                <div class="w-[322px] mb-5 lg:mr-5">
                                    <div class="h-[200px] w-[322px] bg-night relative">
                                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H200L98 200H0V0Z" fill="#2293d0" />
                                        </svg>

                                        <img src="/images/drivers/esteban-ocon.png" alt="Esteban Ocon"
                                            class="w-[220px] h-[220px] absolute -top-5 -left-3 z-50">
                                        <img src="/images/teams/alpine.png" alt="Alpine"
                                            class="h-[75px] absolute top-5 right-[4px]">
                                        <img src="/images/flags/fra-flag.png" alt="FRA"
                                            class="w-[80px] absolute right-5 bottom-5">
                                    </div>
                                    <div class="h-[50px] w-[322px] border relative">
                                        <span class="absolute left-2">
                                            <h1 class="font-bold text-night">
                                                Esteban Ocon
                                            </h1>
                                            <h2>
                                                Alpine
                                            </h2>
                                        </span>
                                        <div class="absolute top-2 right-2 text-2xl font-extrabold">
                                            31
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/f1/drivers/pierre-gasly">
                                <div class="w-[322px] mb-5">
                                    <div class="h-[200px] w-[322px] bg-night relative">
                                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H200L98 200H0V0Z" fill="#2293d0" />
                                        </svg>

                                        <img src="/images/drivers/pierre-gasly.png" alt="Pierre Gasly"
                                            class="w-[220px] h-[220px] absolute -top-5 -left-3 z-50">
                                        <img src="/images/teams/alpine.png" alt="Alpine"
                                            class="h-[75px] absolute top-5 right-[4px]">
                                        <img src="/images/flags/fra-flag.png" alt="FRA"
                                            class="w-[80px] absolute right-5 bottom-5">
                                    </div>
                                    <div class="h-[50px] w-[322px] border relative">
                                        <span class="absolute left-2">
                                            <h1 class="font-bold text-night">
                                                Pierre Gasly
                                            </h1>
                                            <h2>
                                                Alpine
                                            </h2>
                                        </span>
                                        <div class="absolute top-2 right-2 text-2xl font-extrabold">
                                            10
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
