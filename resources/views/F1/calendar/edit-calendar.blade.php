<x-app-layout>
    <x-slot:title>
        Edit | {{ $f1race->grandprix->grand_prix }} | Racestop.net
    </x-slot:title>
    <div>
        <div class="flex justify-center">
            <span class="bg-white w-[1024px]">
                <h1 class="text-2xl font-bold my-5 flex justify-center">Edit Category</h1>

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
                        <form action="/f1/calendar/{{ $f1race->id }}" method="POST" enctype="multipart/form-data" class="">
                            @csrf
                            @method('PUT')

                            <input type="text" name="grandprix_id" value="{{ $f1race->grandprix_id }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="circuit" value="{{ $f1race->circuit }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="circuit_image" value="{{ $f1race->circuit_image }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="first_gp" value="{{ $f1race->first_gp }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="laps" value="{{ $f1race->laps }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="circuit_length" value="{{ $f1race->circuit_length }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="race_distance" value="{{ $f1race->race_distance }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="lap_record" value="{{ $f1race->lap_record }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="lap_record_holder" value="{{ $f1race->lap_record_holder }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="lap_record_year" value="{{ $f1race->lap_record_year }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="last_winner" value="{{ $f1race->last_winner }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="start_date" value="{{ $f1race->start_date }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="end_date" value="{{ $f1race->end_date }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="information" value="{{ $f1race->information }}"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <br>
                            <button type="submit"
                                    class="uppercase bg-light-red text-white text-lg font-bold py-2 px-8 rounded-3xl">
                                Edit Category
                            </button>
                        </form>
                        <form action="/f1/calendar/{{ $f1race->id }}/delete" method="POST" class="mt-4">
                            @csrf
                            @method('delete')
                            <button class="uppercase mt-14 bg-light-red text-white text-lg font-bold py-2 px-8 rounded-3xl"
                                    type="submit">
                                Delete
                            </button>
                        </form>
                    </div>
                @endif
            </span>
        </div>
    </div>
</x-app-layout>
