<x-app-layout>
    <x-slot:title>
        Create New F1race for Calendar | Racestop.net
    </x-slot:title>
    <div>
        <div class="flex justify-center">
            <span class="bg-white w-[1024px]">
                <h1 class="text-2xl font-bold my-5 flex justify-center">Create New Category</h1>

                @if (Auth::check())

                    @if (session()->has('message'))
                        <div class="mb-5 2xsm:w-[800px] flex justify-center ">
                            <div class="bg-white rounded-xl pt-3">
                                <p class="mx-6 pb-3 text-green">
                                    {{ session()->get('message') }}
                                </p>
                            </div>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-5 s2xsm:w-[800px] flex justify-center">
                            <ul class="bg-white rounded-xl pt-3">
                                @foreach ($errors->all() as $error)
                                    <li class="mx-6 pb-3 text-dark-red">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="flex justify-center mb-8">
                        <form action="/f1/calendar/manage" method="POST" enctype="multipart/form-data" class="">
                            @csrf

                            <input type="text" name="grandprix_id" placeholder="Grand Prix ID"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="circuit" placeholder="Circuit"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="circuit_image" placeholder="Circuit Image (.png)"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="first_gp" placeholder="First GP"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="laps" placeholder="Laps"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="circuit_length" placeholder="Circuit Length"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="race_distance" placeholder="Race Distance"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="lap_record" placeholder="Lap Record"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="lap_record_holder" placeholder="Lap Record Holder"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="lap_record_year" placeholder="Lap Record Year"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="last_winner" placeholder="Last Winner"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="start_date" placeholder="Start Date (y-m-d)"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="end_date" placeholder="End Date (y-m-d)"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="information" placeholder="Information"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">


                            <button type="submit"
                                    class="uppercase bg-light-red text-white text-lg font-bold py-2 px-8 rounded-3xl">
                                Create
                            </button>
                        </form>
                    </div>
                @endif
            </span>
        </div>
    </div>
</x-app-layout>
