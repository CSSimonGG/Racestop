<x-app-layout>
    <x-slot:title>
        Edit | {{ $f1team->name }} | Racestop.net
    </x-slot:title>
    <div>
        <div class="flex justify-center">
            <span class="bg-white w-[1024px]">
                <h1 class="max-2xsm:mt-16 text-2xl font-bold my-5 flex justify-center">Edit F1 Team</h1>

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
                        <form action="/f1/teams/{{ $f1team->id }}/delete" method="POST" class="mt-[110px]">
                            @csrf
                            @method('delete')
                            <button class="uppercase absolute max-2xsm:top-[66px] max-2xsm:ml-12 2xsm:top-32 bg-light-red text-white text-lg font-bold py-2 px-8 rounded-3xl"
                                    type="submit">
                                Delete
                            </button>
                        </form>
                        <form action="/f1/teams/{{ $f1team->id }}" method="POST" enctype="multipart/form-data" class="">
                            @csrf
                            @method('PUT')

                            <input type="text" name="active" placeholder="True (1) or False (0)" value="{{ $f1team->active }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="name" placeholder="Name" value="{{ $f1team->name }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="logo_path" placeholder="Logo Path" value="{{ $f1team->logo_path }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="team_hex_color" placeholder="Team Hex Color" value="{{ $f1team->team_hex_color }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="country_id" placeholder="Country ID" value="{{ $f1team->country_id }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="team_chief" placeholder="Team Chief" value="{{ $f1team->team_chief }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="power_unit" placeholder="Power Unit" value="{{ $f1team->power_unit }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="world_championships" placeholder="World Championships" value="{{ $f1team->world_championships }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="world_championship_points" placeholder="World Championship Points" value="{{ $f1team->world_championship_points }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="highest_race_finish" placeholder="Highest Race Finish" value="{{ $f1team->highest_race_finish }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="highest_race_finish_times" placeholder="Highest Race Finish Times" value="{{ $f1team->highest_race_finish_times }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="podiums" placeholder="Podiums" value="{{ $f1team->podiums }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="pole_positions" placeholder="Pole Positions" value="{{ $f1team->pole_positions }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="fastest_laps" placeholder="Fastest Laps" value="{{ $f1team->fastest_laps }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="information" placeholder="Information" value="{{ $f1team->information }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <br>
                            <button type="submit"
                                    class="uppercase bg-light-red text-white text-lg font-bold py-2 px-8 rounded-3xl">
                                Edit Team
                            </button>
                        </form>
                    </div>
                @endif
            </span>
        </div>
    </div>
</x-app-layout>
