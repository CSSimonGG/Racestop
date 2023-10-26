<x-app-layout>
    <x-slot:title>
        Edit | {{ $category->category }} | Racestop.net
    </x-slot:title>
    <div>
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
                <form action="/categories/{{ $category->id }}" method="POST" enctype="multipart/form-data" class="">
                    @csrf
                    @method('PUT')

                    <input type="text" name="category" value="{{ $category->category }}"
                           class="bg-gray block  mb-2 2xsm:w-[600px] h-10 text-lg outline-none">

                    <br>
                    <button type="submit"
                            class="uppercase bg-light-red text-white text-lg font-bold py-2 px-8 rounded-3xl">
                        Edit Category
                    </button>
                </form>
                <form action="/categories/{{ $category->id }}/delete" method="POST" class="mt-4">
                    @csrf
                    @method('delete')
                    <button class="uppercase mt-14 bg-light-red text-white text-lg font-bold py-2 px-8 rounded-3xl"
                            type="submit">
                        Delete
                    </button>
                </form>
            </div>
        @endif
    </div>
</x-app-layout>
