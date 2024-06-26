<x-app-layout>
    <x-slot:title>
        Racestop.net | Formula 1 and Motorsport News
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px] max-lg:flex max-lg:flex-col max-lg:justify-center">
            <div class="">
                <div class="flex my-5">
                    <div class="space-y-5 max-4xsm:mx-3 4xsm:ml-5 4xsm:mr-6">
                        {{-- Big Post 1 --}}
                        <div class="lg:h-[434px] lg:w-[660px] bg-night relative post-shadow hover:hover-shadow">
                            <a href="/news/{{ $posts[0]->slug }}">
                                <div class="">
                                    <img class="lg:h-[434px] lg:w-[660px] opacity-80"
                                        src="/images/{{ $posts[0]->image_path }}" alt="img">
                                </div>
                                <div class="absolute bottom-0 pl-5 pb-4 text-white font-bold">
                                    <div class="uppercase 4xsm:text-xl text-light-red font-bold">
                                        {{ $posts[0]->category->category }}
                                    </div>
                                    <div class="max-4xsm:text-lg 4xsm:text-2xl break-words lg:w-[600px] line-clamp-2">
                                        {{ $posts[0]->title }}
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="flex">
                            {{-- Big Post 2 --}}
                            <div
                                class="lg:h-[280px] lg:w-[336px] bg-night relative post-shadow hover:hover-shadow lg:mr-6">
                                <a href="/news/{{ $posts[1]->slug }}">
                                    <div class="">
                                        <img class="lg:h-[280px] lg:w-[336px] opacity-80"
                                            src="/images/{{ $posts[1]->image_path }}" alt="img">
                                    </div>
                                    <div class="absolute bottom-0 p-3 text-white font-bold">
                                        <div class="uppercase 4xsm:text-xl text-light-red font-bold">
                                            {{ $posts[1]->category->category }}
                                        </div>
                                        <div
                                            class="max-4xsm:text-lg 4xsm:text-2xl break-words lg:w-[336px] pr-3 line-clamp-2">
                                            {{ $posts[1]->title }}
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="space-y-5 max-lg:hidden">
                                {{-- small post 1 --}}
                                <div
                                    class="h-[80px] w-[300px] border-2 border-platinum flex post-shadow hover:hover-shadow">
                                    <a href="/news/{{ $posts[2]->slug }}" class="flex">
                                        <div class="">
                                            <img class="h-[77px] w-[98px]" src="/images/{{ $posts[2]->image_path }}"
                                                alt="img">
                                        </div>
                                        <div class="w-[200px] pl-3 pr-1">
                                            <div class="uppercase font-semibold text-light-red pt-1">
                                                {{ $posts[2]->category->category }}
                                            </div>
                                            <div
                                                class="font-bold hover:underline overflow-hidden break-words line-clamp-2">
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
                                                {{ $posts[3]->category->category }}
                                            </div>
                                            <div
                                                class="font-bold hover:underline overflow-hidden break-words line-clamp-2">
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
                                                {{ $posts[4]->category->category }}
                                            </div>
                                            <div
                                                class="font-bold hover:underline overflow-hidden break-words line-clamp-2">
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
            </div>
            <div class="flex">
                <div class="max-lg:w-full lg:w-[660px] 4xsm:ml-5 4xsm:mr-6">
                    <h1 class="font-bold text-2xl mb-5 ml-3">Latest News</h1>
                    <div class="max-4xsm:5xsm:ml-2 mb-12 grid lg:grid-cols-2 gap-4 lg:w-[660px]">
                        <a href="/news/{{ $posts[2]->slug }}" class="lg:hidden">
                            <div
                                class="h-[80px] max-xsm:4xsm:mr-5 min-w-[320px] border-2 border-platinum flex post-shadow hover:hover-shadow">
                                <div class="h-[77px] w-[98px] bg-yellow">
                                    <img class="h-[77px] w-[98px]" src="/images/{{ $posts[3]->image_path }}"
                                        alt="img">
                                </div>
                                <div class="w-4/6 pr-1">
                                    <h2 class="pl-3 pt-1 font-semibold text-light-red uppercase">
                                        {{ $posts[2]->category->category }}
                                    </h2>
                                    <h2 class="pl-3 font-bold hover:underline overflow-hidden break-words line-clamp-2">
                                        {{ $posts[2]->title }}
                                    </h2>
                                </div>

                            </div>
                        </a>
                        <a href="/news/{{ $posts[3]->slug }}" class="lg:hidden">
                            <div
                                class="h-[80px] max-xsm:4xsm:mr-5 min-w-[320px] border-2 border-platinum flex post-shadow hover:hover-shadow">
                                <div class="h-[77px] w-[98px] bg-yellow">
                                    <img class="h-[77px] w-[98px]" src="/images/{{ $posts[3]->image_path }}"
                                        alt="img">
                                </div>
                                <div class="w-4/6 pr-1">
                                    <h2 class="pl-3 pt-1 font-semibold text-light-red uppercase">
                                        {{ $posts[3]->category->category }}
                                    </h2>
                                    <h2 class="pl-3 font-bold hover:underline overflow-hidden break-words line-clamp-2">
                                        {{ $posts[3]->title }}
                                    </h2>
                                </div>

                            </div>
                        </a>
                        <a href="/news/{{ $posts[4]->slug }}" class="lg:hidden">
                            <div
                                class="lg:hidden h-[80px] max-xsm:4xsm:mr-5 min-w-[320px] border-2 border-platinum flex post-shadow hover:hover-shadow">
                                <div class="h-[77px] w-[98px] bg-yellow">
                                    <img class="h-[77px] w-[98px]" src="/images/{{ $posts[4]->image_path }}"
                                        alt="img">
                                </div>
                                <div class="w-4/6 pr-1">
                                    <h2 class="pl-3 pt-1 font-semibold text-light-red uppercase">
                                        {{ $posts[4]->category->category }}
                                    </h2>
                                    <h2 class="pl-3 font-bold hover:underline overflow-hidden break-words line-clamp-2">
                                        {{ $posts[4]->title }}
                                    </h2>
                                </div>

                            </div>
                        </a>
                        @foreach ($posts as $index => $post)
                            @if ($index > 4 && $index < 17)
                                <div
                                    class="@if ($post->id % 2 === 0) lg:float-right @else lg:float-left @endif">
                                    <a href="/news/{{ $post->slug }}">
                                        <div
                                            class="h-[80px] max-xsm:4xsm:mr-5 lg:w-[320px] min-w-[320px] border-2 border-platinum flex post-shadow hover:hover-shadow">
                                            <div class="h-[77px] w-[98px] bg-yellow">
                                                <img class="h-[77px] w-[98px]" src="/images/{{ $post->image_path }}"
                                                    alt="img">
                                            </div>
                                            <div class="w-4/6 pr-1">
                                                <h2 class="pl-3 pt-1 font-semibold text-light-red uppercase">
                                                    {{ $post->category->category }}
                                                </h2>
                                                <h2
                                                    class="pl-3 font-bold hover:underline overflow-hidden break-words line-clamp-2">
                                                    {{ $post->title }}
                                                </h2>
                                            </div>

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

                <div class="max-lg:hidden h-[734px] w-[300px] bg-platinum mr-5">F1 Calendar</div>
            </div>
        </span>
    </div>
</x-app-layout>
