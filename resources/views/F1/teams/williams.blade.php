<x-app-layout>
    <x-slot:title>
        Williams | Racestop.net
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px] max-lg:flex max-lg:flex-col max-lg:justify-center">
            <div class="max-lg:flex max-lg:justify-center">
                <div class="my-5 lg:ml-5">
                    <div class="lg:flex">
                        <div class="3xsm:w-[483px] max-3xsm:w-[90vw] mb-5 lg:mr-5">
                            <h1 class="mb-5 max-3xsm:ml-5 font-bold text-2xl">Williams</h1>
                            <div
                                class="max-4xsm:h-[150px] 4xsm:h-[300px] 3xsm:w-[483px] max-3xsm:ml-5 bg-night relative flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 200" fill="none"
                                    class="absolute left-0 top-0 max-4xsm:h-[150px] 4xsm:h-[300px]">
                                    <path d="M0 0H64L0 200V100V0Z" fill="#37bedd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 200" fill="none"
                                    class="absolute right-0 top-0 max-4xsm:h-[150px] 4xsm:h-[300px]">
                                    <path d="M64 200H-4.76837e-07L64 0L64 100L64 200Z" fill="#37bedd" />
                                </svg>
                                <img src="/images/teams/williams.png" alt="Williams"
                                    class="h-[105px] mt-[22.5px] absolute top-0">
                                <img src="/images/drivers/alexander-albon.png" alt="Alexander Albon"
                                    class="max-4xsm:hidden w-[240px] h-[240px] absolute bottom-0 -left-[11px]">
                                <img src="/images/drivers/logan-sargeant.png" alt="Logan Sargeant"
                                    class="max-4xsm:hidden w-[240px] h-[240px] absolute bottom-0 -right-[7px]">
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
                                <div>Williams Racing</div>
                                <div>British</div>
                                <div>James Vowles</div>
                                <div>Mercedes</div>
                                <div>9</div>
                                <div>3597</div>
                                <div>1 (x114)</div>
                                <div>313</div>
                                <div>128</div>
                                <div>133</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl my-5 ml-5">Drivers</h1>
                        <div class="lg:flex">
                            <a href="/f1/drivers/alexander-albon">
                                <div class="w-[322px] mb-5 lg:mr-5">
                                    <div class="h-[200px] w-[322px] bg-night relative">
                                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H200L98 200H0V0Z" fill="#37bedd" />
                                        </svg>

                                        <img src="/images/drivers/alexander-albon.png" alt="Alexander Albon"
                                            class="w-[220px] h-[220px] absolute -top-5 -left-3">
                                        <img src="/images/teams/williams.png" alt="Williams"
                                            class="h-[85px] absolute top-2.5 right-[8px]">
                                        <img src="/images/flags/tha-flag.png" alt="THA"
                                            class="w-[80px] absolute right-5 bottom-5 border border-dark-gray">
                                    </div>
                                    <div class="h-[50px] w-[322px] border relative">
                                        <span class="absolute left-2">
                                            <h1 class="font-bold text-night">
                                                Alexander Albon
                                            </h1>
                                            <h2>
                                                Williams
                                            </h2>
                                        </span>
                                        <div class="absolute top-2 right-2 text-2xl font-extrabold">
                                            23
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="/f1/drivers/logan-sargeant">
                                <div class="w-[322px] mb-5">
                                    <div class="h-[200px] w-[322px] bg-night relative">
                                        <svg width="200" height="200" viewBox="0 0 200 200" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H200L98 200H0V0Z" fill="#37bedd" />
                                        </svg>

                                        <img src="/images/drivers/logan-sargeant.png" alt="Logan Sargeant"
                                            class="w-[220px] h-[220px] absolute -top-5 -left-3">
                                        <img src="/images/teams/williams.png" alt="Williams"
                                            class="h-[85px] absolute top-2.5 right-[8px]">
                                        <img src="/images/flags/usa-flag.png" alt="USA"
                                            class="w-[80px] absolute right-5 bottom-5 border border-dark-gray">
                                    </div>
                                    <div class="h-[50px] w-[322px] border relative">
                                        <span class="absolute left-2">
                                            <h1 class="font-bold text-night">
                                                Logan Sargeant
                                            </h1>
                                            <h2>
                                                Williams
                                            </h2>
                                        </span>
                                        <div class="absolute top-2 right-2 text-2xl font-extrabold">
                                            45
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
