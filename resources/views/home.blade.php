<x-app-layout>
    <x-slot:title>
        Racestop.net | Formula 1 and Motorsport News
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px]">
            @if (Auth::check())
                @role('writer')
                    <div class="bg-night h-20 flex justify-center">
                        <div class="mt-6">
                            <a href="/news/create"
                                class="bg-light-red uppercase text-white text-sm font-bold py-3 px-5 rounded">
                                Create post
                            </a>
                        </div>
                    </div>
                @endrole
            @endif
            <div class="flex my-5">
                <div class="space-y-5 ml-5 mr-6">
                    {{-- Big Post 1 --}}
                    <div class="h-[434px] w-[660px] bg-night relative post-shadow hover:hover-shadow">
                        <a href="/news/{{ $posts[0]->slug }}">
                            <div class="">
                                <img class="h-[434px] w-[660px] opacity-80" src="/images/{{ $posts[0]->image_path }}"
                                    alt="img">
                            </div>
                            <div class="absolute bottom-0 pl-5 pb-4 text-white font-bold">
                                <div class="uppercase text-xl pl-1 text-light-red font-semibold">
                                    {{ $posts[0]->category }}
                                </div>
                                <div class="text-2xl break-words w-[600px] line-clamp-2">
                                    {{ $posts[0]->title }}
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- Big Post 2 --}}
                    <div class="flex">
                        <div class="h-[280px] w-[336px] bg-night relative post-shadow hover:hover-shadow mr-6">
                            <a href="/news/{{ $posts[1]->slug }}">
                                <div class="">
                                    <img class="h-[280px] w-[336px] opacity-80"
                                        src="/images/{{ $posts[1]->image_path }}" alt="img">
                                </div>
                                <div class="absolute bottom-0 p-3 text-white font-bold">
                                    <div class="uppercase text-xl italic pl-1 text-light-red font-extrabold">
                                        {{ $posts[1]->category }}
                                    </div>
                                    <div class="text-2xl break-words w-[336px] pr-3 line-clamp-2">
                                        {{ $posts[1]->title }}
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- small post 1 --}}
                        <div class="space-y-5">
                            <div
                                class="h-[80px] w-[300px] border-2 border-platinum flex post-shadow hover:hover-shadow">
                                <a href="/news/{{ $posts[2]->slug }}" class="flex">
                                    <div class="">
                                        <img class="h-[77px] w-[98px]" src="/images/{{ $posts[2]->image_path }}"
                                            alt="img">
                                    </div>
                                    <div class="w-[200px] pl-3 pr-1">
                                        <div class="uppercase font-semibold text-light-red pt-1">
                                            {{ $posts[2]->category }}
                                        </div>
                                        <div class="font-bold hover:underline overflow-hidden break-words line-clamp-2">
                                            {{ $posts[2]->title }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                            {{-- small post 2 --}}
                            <div
                                class="h-[80px] w-[300px] border-2 border-platinum flex post-shadow hover:hover-shadow">
                                <a href="/news/{{ $posts[3]->slug }}" class="flex">
                                    <div class="">
                                        <img class="h-[77px] w-[98px]" src="/images/{{ $posts[3]->image_path }}"
                                            alt="img">
                                    </div>
                                    <div class="w-[200px] pl-3 pr-1">
                                        <div class="uppercase font-semibold text-light-red pt-1">
                                            {{ $posts[3]->category }}
                                        </div>
                                        <div class="font-bold hover:underline overflow-hidden break-words line-clamp-2">
                                            {{ $posts[3]->title }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                            {{-- small post 3 --}}
                            <div
                                class="h-[80px] w-[300px] border-2 border-platinum flex post-shadow hover:hover-shadow">
                                <a href="/news/{{ $posts[4]->slug }}" class="flex">
                                    <div class="h-[77px] w-[98px] bg-night">
                                        <img class="h-[77px] w-[98px]" src="/images/{{ $posts[4]->image_path }}"
                                            alt="img">
                                    </div>
                                    <div class="w-[200px] pl-3 pr-1">
                                        <div class="uppercase font-semibold text-light-red pt-1">
                                            {{ $posts[4]->category }}
                                        </div>
                                        <div class="font-bold hover:underline overflow-hidden break-words line-clamp-2">
                                            {{ $posts[4]->title }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-lg:hidden h-[734px] w-[300px] bg-platinum mr-5">F1 Standings</div>
            </div>

            <h1 class="font-bold text-2xl ml-5 mb-5">Latest News</h1>
            <div class="ml-5 mb-12 grid grid-cols-2 gap-4 w-[660px]">
                @foreach ($posts as $index => $post)
                    @if ($index > 4 && $index < 16)
                        <div class="@if ($post->id % 2 === 0) float-right @else float-left @endif">
                            <a href="/news/{{ $post->slug }}">
                                <div
                                    class="h-[80px] w-[320px] border-2 border-platinum flex post-shadow hover:hover-shadow">
                                    <div class="h-[77px] w-[98px] bg-yellow">
                                        <img class="h-[77px] w-[98px]" src="/images/{{ $post->image_path }}"
                                            alt="img">
                                    </div>
                                    <div class="w-4/6 pr-1">
                                        <h2 class="pl-3 pt-1 font-semibold text-light-red uppercase">
                                            {{ $post->category }}
                                        </h2>
                                        <h2
                                            class="pl-3 font-bold hover:underline overflow-hidden break-words line-clamp-2">
                                            {{ $post->title }}
                                        </h2>
                                    </div>
                                    {{-- {{ $post->user->name }} --}}
                                    {{-- {{ date('jS M Y', strtotime($post->updated_at)) }} --}}
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

        </span>
    </div>
</x-app-layout>
