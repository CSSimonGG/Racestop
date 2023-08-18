<x-app-layout>
    <x-slot:title>
        Ferrari | Racestop.net
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px] max-lg:flex max-lg:flex-col max-lg:justify-center">
            <div class="max-lg:flex max-lg:justify-center">
                <div class="my-5 lg:ml-5">
                    <div class="lg:flex">
                        <div class="3xsm:w-[483px] max-3xsm:w-[90vw] mb-5 lg:mr-5">
                            <h1 class="mb-5 max-3xsm:ml-5 font-bold text-2xl">Ferrari</h1>
                            <div
                                class="max-4xsm:h-[150px] 4xsm:h-[300px] 3xsm:w-[483px] max-3xsm:ml-5 bg-night relative flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 200" fill="none"
                                    class="absolute left-0 top-0 max-4xsm:h-[150px] 4xsm:h-[300px]">
                                    <path d="M0 0H64L0 200V100V0Z" fill="#f91536" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 200" fill="none"
                                    class="absolute right-0 top-0 max-4xsm:h-[150px] 4xsm:h-[300px]">
                                    <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="#f91536" />
                                </svg>
                                <img src="/images/teams/ferrari.png" alt="Ferrari"
                                    class="h-[135px] max-4xsm:mt-2 4xsm:mt-5 absolute top-0">
                                <img src="/images/drivers/charles-leclerc.png" alt="Charles Leclerc"
                                    class="max-4xsm:hidden w-[240px] h-[240px] absolute bottom-0 -left-[9px]">
                                <img src="/images/drivers/carlos-sainz.png" alt="Carlos Sainz"
                                    class="max-4xsm:hidden w-[240px] h-[240px] absolute bottom-0 -right-[10px]">
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
                                <div>Scuderia Ferrari</div>
                                <div>Italian</div>
                                <div>Fredric Vasseur</div>
                                <div>Ferrari</div>
                                <div>16</div>
                                <div>9457</div>
                                <div>1 (x243)</div>
                                <div>796</div>
                                <div>245</div>
                                <div>259</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl my-5 ml-5">Drivers</h1>
                        <div class="lg:flex">
                            <a href="/f1/drivers/charles-leclerc">
                                <div class="w-[322px] mb-5 lg:mr-5">
                                    <div class="h-[200px] w-[322px] bg-night relative">
                                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H200L98 200H0V0Z" fill="#f91536" />
                                        </svg>

                                        <img src="/images/drivers/charles-leclerc.png" alt="Charles Leclerc"
                                            class="w-[220px] h-[220px] absolute -top-5 -left-3">
                                        <img src="/images/teams/ferrari.png" alt="Ferrari"
                                            class="h-[105px] absolute top-0 right-[5px]">
                                        <img src="/images/flags/mco-flag.png" alt="MCO"
                                            class="w-[80px] absolute right-5 bottom-5">
                                    </div>
                                    <div class="h-[50px]  w-[322px] border relative">
                                        <span class="absolute left-2">
                                            <h1 class="font-bold text-night">
                                                Charles leclerc
                                            </h1>
                                            <h2>
                                                Ferrari
                                            </h2>
                                        </span>
                                        <div class="absolute top-2 right-2 text-2xl font-extrabold">
                                            16
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/f1/drivers/carlos-sainz">
                                <div class="w-[322px] mb-5">
                                    <div class="h-[200px] w-[322px] bg-night relative">
                                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H200L98 200H0V0Z" fill="#f91536" />
                                        </svg>

                                        <img src="/images/drivers/carlos-sainz.png" alt="Carlos Sainz"
                                            class="w-[220px] h-[220px] absolute -top-5 -left-3">
                                        <img src="/images/teams/ferrari.png" alt="Ferrari"
                                            class="h-[105px] absolute top-0 right-[5px]">
                                        <img src="/images/flags/esp-flag.png" alt="ESP"
                                            class="w-[80px] absolute right-5 bottom-5">
                                    </div>
                                    <div class="h-[50px]  w-[322px] border relative">
                                        <span class="absolute left-2">
                                            <h1 class="font-bold text-night">
                                                Carlos Sainz
                                            </h1>
                                            <h2>
                                                Ferrari
                                            </h2>
                                        </span>
                                        <div class="absolute top-2 right-2 text-2xl font-extrabold">
                                            55
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
