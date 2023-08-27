<x-app-layout>
    <x-slot:title>
        Australian F1 GP | Racestop
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px] max-lg:flex max-lg:flex-col max-lg:justify-center">
            <div class="max-lg:flex max-lg:justify-center">
                <div class="my-5 lg:ml-5">
                    <div class="lg:flex">
                        <div class="lg:mr-10 mb-5 max-3xsm:4xsm:ml-5">
                            <h1 class="mb-5 font-bold max-5xsm:ml-5 5xsm:text-2xl">Australian GP</h1>
                            <div
                                class="max-5xsm:h-[250px] 5xsm:h-[250px] 4xsm:w-[440px] bg-night relative flex justify-center">
                                <div class="4xsm:w-[440px] max-3xsm:w-[90vw] mx-5 flex">
                                    <div class="font-bold">
                                        <img class="w-[210px]" src="/images/circuit/albert-park.png"
                                            alt="Yas Marina Circuit">
                                        <h1 class="text-white text-2xl">Australian GP</h1>
                                        <h1 class="text-light-red text-xl">Albert Park</h1>
                                    </div>
                                    <div class="text-white mt-5 ml-5 relative">
                                        <h2 class="text-xl font-bold">2023 Grand Prix</h2>
                                        <h3>31-02 Mar-Apr</h3>
                                        <img class="absolute bottom-10 w-[80px]" src="/images/flags/aus-flag.png"
                                            alt="AUS">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-10 text-lg lg:mt-12 max-3xsm:ml-5">
                            <div class="flex flex-col space-y-1 font-bold">
                                <div>Place</div>
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
                                <div>Australia</div>
                                <div>Albert Park</div>
                                <div>1996</div>
                                <div>58</div>
                                <div>5.278 km</div>
                                <div>306.124 km</div>
                                <div>1:20.235 &lpar;2023&rpar;</div>
                                <div>Sergio Perez</div>
                                <div>Max Verstappen</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 mb-5">
                        <h2 class="font-bold text-2xl mb-5">Information</h2>
                        <p>Coming Soon</p>
                        <br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </span>
    </div>
</x-app-layout>