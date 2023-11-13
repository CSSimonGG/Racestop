<x-app-layout>
    <x-slot:title>
        Create New F1 Team | Racestop.net
    </x-slot:title>
    <div>
        <div class="flex justify-center">
            <span class="bg-white w-[1024px]">
                <h1 class="text-2xl font-bold my-5 flex justify-center">Create New F1 Team</h1>

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
                        <form action="/f1/teams" method="POST" enctype="multipart/form-data" class="">
                            @csrf

                            <input type="text" name="active" placeholder="True (1) or False (0)"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="name" placeholder="Name"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="logo_path" placeholder="Logo Path"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="team_hex_color" placeholder="Team Hex Color"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="country_id" placeholder="Country ID"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="team_chief" placeholder="Team Chief"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="power_unit" placeholder="Power Unit"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="world_championships" placeholder="World Championships"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="world_championship_points" placeholder="World Championship Points"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="highest_race_finish" placeholder="Highest Race Finish"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="highest_race_finish_times" placeholder="Highest Race Finish Times"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="podiums" placeholder="Podiums"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="pole_positions" placeholder="Pole Positions"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="fastest_laps" placeholder="Fastest Laps"
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
