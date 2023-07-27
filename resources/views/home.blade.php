<x-app-layout>
    <x-slot:title>
        Racestop.net | Formula 1 and Motorsport News
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px]">
            @if (Auth::check())
                <div class="bg-night h-20 flex justify-center">
                    <div class="mt-6">
                        <a href="/admin" class="bg-light-red uppercase text-white text-sm font-bold py-3 px-5 rounded">
                            Create post
                        </a>
                    </div>
                </div>
            @endif
            <div class="flex my-5">
                <div class="space-y-5 ml-5 mr-6">
                    <div class="h-[434px] w-[660px] bg-platinum">Biggest Blog Post</div>
                    <div class="flex">
                        <div class="h-[280px] w-[336px] bg-platinum mr-6">Big Big Post</div>
                        <div class="space-y-5">
                            <div class="h-[80px] w-[300px] border-2 border-platinum ">Small Blog Post</div>
                            <div class="h-[80px] w-[300px] border-2 border-platinum ">Small Blog Post</div>
                            <div class="h-[80px] w-[300px] border-2 border-platinum ">Small Blog Post</div>
                        </div>
                    </div>
                </div>
                <div class="max-lg:hidden h-[734px] w-[300px] bg-platinum mr-5">F1 Standings</div>
            </div>

            <h1 class="font-bold text-2xl ml-5 mb-5">Latest News</h1>
            <div class="ml-5 mb-12 grid grid-cols-2 gap-4 w-[660px]">
                @foreach ($posts as $post)
                    <div class="@if ($post->id % 2 === 0) float-right @else float-left @endif">
                        <a href="/news/{{ $post->slug }}">
                            <div
                                class="h-[80px] w-[320px] border-2 border-platinum flex post-shadow hover:hover-shadow">
                                <div class="h-[77px] w-[98px] bg-yellow">
                                    <img class="h-[77px] w-[98px]" src="/images/{{ $post->image_path }}" alt="img">
                                </div>
                                <div>
                                    <h2 class="pl-3 pt-1 font-semibold text-light-red uppercase">{{ $post->category }}
                                    </h2>
                                    <h2 class="pl-3 font-bold hover:underline">{{ $post->title }}</h2>
                                </div>
                                {{-- {{ $post->user->name }} --}}
                                {{-- {{ date('jS M Y', strtotime($post->updated_at)) }} --}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </span>
    </div>
</x-app-layout>
