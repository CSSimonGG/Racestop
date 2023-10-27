<x-app-layout>
    <x-slot:title>
        Manage F1 Calendar | Racestop
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px]">
            <main class="flex">
                <div>
                    <h1 class="m-5 font-bold text-2xl">Manage 2023 F1 Calendar</h1>
                    <div class="w-[664px] h-[1208px] m-5 mb-20 p-5 bg-gray">
                        <div class="w-[624px]">
                            <div class="grid grid-cols-12 space-x-5 font-bold">
                                <div class="text-start col-span-3">Grand Prix</div>
                                <div class="text-start col-span-6">Circuit</div>
                                <div class="text-start col-span-3">Date</div>
                            </div>
                            <a href="/f1/gp/bahrain-gp">
                                <div
                                    class="text-sm border border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/bhr-flag.png"
                                                 alt="BHR">
                                            <span> Bahrain GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Bahrain International Circuit</span>
                                    <span class="col-span-3">03-05 Mar</span>
                                </div>
                            </a>
                            <a href="/f1/gp/saudi-arabian-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/sau-flag.png"
                                                 alt="SAU">
                                            <span> Saudi Arabian GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Jeddah Street Circuit</span>
                                    <span class="col-span-3">17-19 Mar</span>
                                </div>
                            </a>
                            <a href="/f1/gp/australian-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/aus-flag.png"
                                                 alt="AUS">
                                            <span> Australian GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Albert Park</span>
                                    <span class="col-span-3">31-02 Mar-Apr</span>
                                </div>
                            </a>
                            <a href="/f1/gp/azerbaijan-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/aze-flag.png"
                                                 alt="aze">
                                            <span> Azerbaijan GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Baku City Circuit</span>
                                    <span class="col-span-3">28-30 Apr</span>
                                </div>
                            </a>
                            <a href="/f1/gp/miami-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/usa-flag.png"
                                                 alt="USA">
                                            <span> Miami GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Miami International Circuit</span>
                                    <span class="col-span-3">05-07 May</span>
                                </div>
                            </a>
                            <a href="/f1/gp/monaco-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/mco-flag.png"
                                                 alt="MCO">
                                            <span> Monaco GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Circuit de Monaco</span>
                                    <span class="col-span-3">26-28 May</span>
                                </div>
                            </a>
                            <a href="/f1/gp/spanish-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/esp-flag.png"
                                                 alt="ESP">
                                            <span> Spanish GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Circuit de Catalunya</span>
                                    <span class="col-span-3">02-04 Jun</span>
                                </div>
                            </a>
                            <a href="/f1/gp/canadian-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/can-flag.png"
                                                 alt="CAN">
                                            <span> Canadian GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Circuit Gilles Villeneuve</span>
                                    <span class="col-span-3">16-18 Jun</span>
                                </div>
                            </a>
                            <a href="/f1/gp/austrian-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/aut-flag.png"
                                                 alt="AUT">
                                            <span> Austrian GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Red Bull Ring</span>
                                    <span class="col-span-3">30-02 Jun-Jul</span>
                                </div>
                            </a>
                            <a href="/f1/gp/british-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/gbr-flag.png"
                                                 alt="GBR">
                                            <span> British GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Circuit Silverstone</span>
                                    <span class="col-span-3">07-09 Jul</span>
                                </div>
                            </a>
                            <a href="/f1/gp/hungarian-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/hun-flag.png"
                                                 alt="HUN">
                                            <span> Hungarian GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Hungaroring</span>
                                    <span class="col-span-3">21-21 Jul</span>
                                </div>
                            </a>
                            <a href="/f1/gp/belgian-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/bel-flag.png"
                                                 alt="BEL">
                                            <span> Belgian GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Spa-Francorchamps</span>
                                    <span class="col-span-3">28-30 Jul</span>
                                </div>
                            </a>
                            <a href="/f1/gp/dutch-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/nl-flag.png"
                                                 alt="NL">
                                            <span> Dutch GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Circuit Zandvoort</span>
                                    <span class="col-span-3">25-27 Aug</span>
                                </div>
                            </a>
                            <a href="/f1/gp/italian-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/ita-flag.png"
                                                 alt="ITA">
                                            <span> Italian GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Autodromo Nazionale Monza</span>
                                    <span class="col-span-3">01-03 Sep</span>
                                </div>
                            </a>
                            <a href="/f1/gp/singapore-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/sgp-flag.png"
                                                 alt="SGP">
                                            <span> Singapore GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Marine Bay Street Circuit</span>
                                    <span class="col-span-3">15-17 Sep</span>
                                </div>
                            </a>
                            <a href="/f1/gp/japanese-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/jpn-flag.png"
                                                 alt="JPN">
                                            <span> Japanese GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Suzuka Circuit</span>
                                    <span class="col-span-3">22-24 Sep</span>
                                </div>
                            </a>
                            <a href="/f1/gp/qatar-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/qat-flag.png"
                                                 alt="QAT">
                                            <span> Qatar GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Losail International Circuit</span>
                                    <span class="col-span-3">06-08 Oct</span>
                                </div>
                            </a>
                            <a href="/f1/gp/united-states-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/usa-flag.png"
                                                 alt="USA">
                                            <span> United States GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Circuit of the Americas</span>
                                    <span class="col-span-3">20-22 Oct</span>
                                </div>
                            </a>
                            <a href="/f1/gp/mexican-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/mex-flag.png"
                                                 alt="MEX">
                                            <span> Mexican GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Autodromo Hermanos Rodriguez</span>
                                    <span class="col-span-3">20-22 Oct</span>
                                </div>
                            </a>
                            <a href="/f1/gp/brazilian-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/bra-flag.png"
                                                 alt="BRA">
                                            <span> Brazilian GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Autodromo Jose Carlos Pace Interlagos</span>
                                    <span class="col-span-3">03-05 Nov</span>
                                </div>
                            </a>
                            <a href="/f1/gp/las-vegas-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/usa-flag.png"
                                                 alt="USA">
                                            <span> Las Vegas GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Las Vegas Street Circuit</span>
                                    <span class="col-span-3">17-19 Nov</span>
                                </div>
                            </a>
                            <a href="/f1/gp/abu-dhabi-gp">
                                <div
                                    class="text-sm border-x border-b border-platinum bg-white w-[624px] h-[52px] py-4 grid grid-cols-12 space-x-5">
                                    <div class="col-span-3">
                                        <span class="ml-2 font-bold">
                                            <img class="h-[16px] inline" src="/images/flags/are-flag.png"
                                                 alt="ARE">
                                            <span> Abu Dhabi GP</span>
                                        </span>
                                    </div>
                                    <span class="col-span-6">Yas Marina Circuit</span>
                                    <span class="col-span-3">24-26 Nov</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="max-lg:hidden h-[734px] w-[300px] bg-platinum mr-5 mt-[72px]">F1 Standings</div>
            </main>
        </span>
    </div>
</x-app-layout>
