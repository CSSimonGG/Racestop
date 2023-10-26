<x-app-layout>
    <x-slot:title>
        Admin | Racestop.net
    </x-slot:title>
    <div>
        <div class="flex justify-center">
            <span class="bg-white w-[1024px]">
                <h1 class="text-2xl font-bold my-5 flex justify-center">Manage Categories</h1>

                <div class="bg-night h-20 flex justify-center">
                    <div class="mt-6">
                        <a href="/categories/create" class="bg-light-red uppercase text-white text-sm font-bold py-3 px-5 rounded">
                            New Category
                        </a>
                    </div>
                </div>

                <div class="py-5 flex justify-center flex-col items-center">
                    @foreach($categories as $category)
                        <a href="/categories/{{ $category->id }}/edit">
                            <h2>{{ $category->category }}</h2>
                        </a>
                    @endforeach
                </div>
            </span>
        </div>
    </div>
</x-app-layout>
