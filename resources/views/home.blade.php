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
                            <a href="/create" class="bg-light-red uppercase text-white text-sm font-bold py-3 px-5 rounded">
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
                                <div class="uppercase text-xl text-light-red font-semibold">
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
                                    <div class="uppercase text-xl text-light-red font-extrabold">
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

            <div class="w-[660px] ml-5">
                <h1 class="font-bold text-2xl mb-5">Latest News</h1>
                <div class=" mb-5 grid xsm:grid-cols-2 gap-4 w-[660px]">
                    @foreach ($posts as $index => $post)
                        @if ($index > 4 && $index < 17)
                            <div class="@if ($post->id % 2 === 0) xsm:float-right @else xsm:float-left @endif">
                                <a href="/news/{{ $post->slug }}">
                                    <div
                                        class="h-[80px] xsm:w-[320px] border-2 border-platinum flex post-shadow hover:hover-shadow">
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
                <div class="relative">
                    <a href="/news">
                        <span class="absolute right-0 bg-night py-3 pl-6 pr-12 rounded">
                            <span class="text-white text-sm font-semibold uppercase">Read More
                            </span>
                            <svg class="z-40 absolute top-[10px] left-[110px]" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" width="30" height="30"
                                transform="rotate(-90)">
                                <line x1="12" y1="17" x2="16" y2="12" />
                                <line x1="12" y1="17" x2="8" y2="12" />
                            </svg>
                        </span>
                    </a>
                </div>
                <br><br>
                <div class="mt-4 mb-12 border border-gray"></div>
            </div>
        </span>
    </div>
</x-app-layout>
