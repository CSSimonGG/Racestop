<x-app-layout>
    <x-slot:title>
        Admin | Racestop.net
    </x-slot:title>
    <div>
        <h1 class="text-2xl font-bold my-5 flex justify-center">Admin Dashboard</h1>

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
                <form action="/" method="POST" enctype="multipart/form-data" class="">
                    @csrf

                    <input type="text" name="title" placeholder="Title"
                        class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                    <textarea name="description" placeholder="Description"
                        class="bg-gray block 2xsm:w-[600px] h-[300px] text-xl outline-none"></textarea>

                    <div class="bg-gray my-6">
                        <h2 class="font-bold text-xl pb-2">Image:</h2>
                        <label
                            class="w-80 flex flex-col items-center py-3 bg-white rounded-lg shadow-lg tracking-wide uppercase border-2 border-light-red cursor-pointer">
                            <input type="file" name="image" class="">
                        </label>
                    </div>

                    <div class="mb-12">
                        <label for="">Tags: </label>
                        <select name="category" id="category">
                            <option value="f1">F1</option>
                            <option value="f2">F2</option>
                            <option value="f3">F3</option>
                            <option value="motogp">MotoGP</option>
                            <option value="formulae">Formula E</option>
                            <option value="indycar">Indycar</option>
                            <option value="nascar">Nascar</option>
                            <option value="enduranceracing">Endurance Racing</option>
                        </select>
                    </div>

                    <button type="submit"
                        class="uppercase bg-light-red text-white text-lg font-bold py-2 px-8 rounded-3xl">
                        POST
                    </button>
                </form>
            </div>
        @endif
    </div>
</x-app-layout>
