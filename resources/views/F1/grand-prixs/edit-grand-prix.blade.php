<x-app-layout>
    <x-slot:title>
        Edit | {{ $grandprix->grand_prix }} | Racestop.net
    </x-slot:title>
    <div>
        <div class="flex justify-center">
            <span class="bg-white w-[1024px]">
                <h1 class="text-2xl font-bold my-5 flex justify-center">Edit Grand Prix</h1>

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
                        <form action="/f1/grand-prix/{{ $grandprix->id }}" method="POST" enctype="multipart/form-data" class="">
                            @csrf
                            @method('PUT')

                            <input type="text" name="country" placeholder="Country"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="grand_prix" placeholder="Grand Prix"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <input type="text" name="flag" placeholder="Flag"
                                   class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                            <br>
                            <button type="submit"
                                    class="uppercase bg-light-red text-white text-lg font-bold py-2 px-8 rounded-3xl">
                                Edit Category
                            </button>
                        </form>
                        <form action="/f1/grand-prix/{{ $grandprix->id }}/delete" method="POST" class="mt-[110px]">
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
