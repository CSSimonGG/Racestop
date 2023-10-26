<x-app-layout>
    <x-slot:title>
        Admin | Racestop.net
    </x-slot:title>
    <div>
        <div class="flex justify-center">
            <span class="bg-white w-[1024px]">
                <h1 class="text-2xl font-bold mt-5 flex justify-center">Manage Categories</h1>

                <div class="flex justify-center">
                    <div class="py-5 flex flex-col justify-start">
                        <h1 class="font-bold text-xl mb-2">Categories:</h1>
                        @foreach($categories as $category)
                            <a href="/categories/{{ $category->id }}/edit">
                                <h2 class="hover:font-bold">{{ $category->category }}</h2>
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="bg-night h-20 flex justify-center">
                    <div class="mt-6">
                        <a href="/categories/create" class="bg-light-red uppercase text-white text-sm font-bold py-3 px-5 rounded">
                            New Category
                        </a>
                    </div>
                </div>
            </span>
        </div>
    </div>
</x-app-layout>
