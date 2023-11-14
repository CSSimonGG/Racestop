<x-app-layout>
    <x-slot:title>
        Edit | {{ $driver->name }} | Racestop.net
    </x-slot:title>
    <div>
        <div class="flex justify-center">
            <span class="bg-white w-[1024px]">
                <h1 class="max-2xsm:mt-16 text-2xl font-bold my-5 flex justify-center">Edit Driver</h1>

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
                        <form action="/f1/drivers/{{ $driver->id }}/delete" method="POST" class="mt-[110px]">
                            @csrf
                            @method('delete')
                            <button class="uppercase absolute max-2xsm:top-[66px] max-2xsm:ml-12 2xsm:top-32 bg-light-red text-white text-lg font-bold py-2 px-8 rounded-3xl"
                                    type="submit">
                                Delete
                            </button>
                        </form>
                        <form action="/f1/drivers/{{ $driver->id }}" method="POST" enctype="multipart/form-data" class="">
                            @csrf
                            @method('PUT')

                            <input type="text" name="active" placeholder="True (1) or False (0)" value="{{ $driver->active }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="name" placeholder="Name" value="{{ $driver->name }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="driver_number" placeholder="Driver Number" value="{{ $driver->driver_number }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="f1team_id" placeholder="F1team ID" value="{{ $driver->f1team_id }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="country_id" placeholder="Country ID" value="{{ $driver->country_id }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="podiums" placeholder="Podiums" value="{{ $driver->podiums }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="world_championship_points" placeholder="World Championship Points" value="{{ $driver->world_championship_points }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="grand_prix_entered" placeholder="Grand Prix Entered" value="{{ $driver->grand_prix_entered }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="world_championships" placeholder="World Championships" value="{{ $driver->world_championships }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="highest_race_finish" placeholder="Highest Race Finish" value="{{ $driver->highest_race_finish }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="highest_race_finish_times" placeholder="Highest Race Finish Times" value="{{ $driver->highest_race_finish_times }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="pole_positions" placeholder="Pole Positions" value="{{ $driver->pole_positions }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="fastest_laps" placeholder="Fastest Laps" value="{{ $driver->fastest_laps }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="birth_date" placeholder="Birth Date" value="{{ $driver->birth_date }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="birth_place" placeholder="Birth Place" value="{{ $driver->birth_place }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="biography" placeholder="Biography" value="{{ $driver->biography }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <br>
                            <button type="submit"
                                    class="uppercase bg-light-red text-white text-lg font-bold py-2 px-8 rounded-3xl">
                                Edit Driver
                            </button>
                        </form>
                    </div>
                @endif
            </span>
        </div>
    </div>
</x-app-layout>
