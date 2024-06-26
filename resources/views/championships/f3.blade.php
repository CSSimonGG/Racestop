<x-app-layout>
    <x-slot:title>
        F3 News | Racestop.net
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px]">
            <h1 class="font-bold text-2xl ml-5 my-5">Latest F1 News</h1>
            <div class="max-4xsm:5xsm:ml-2 4xsm:ml-5 mb-12 grid xsm:grid-cols-2 gap-4 xsm:w-[660px]">
                @foreach ($posts as $post)
                    @if ($post->category == 'F1')
                        <div class="@if ($post->id % 2 === 0) xsm:float-right @else xsm:float-left @endif">
                            <a href="/news/{{ $post->slug }}">
                                <div
                                    class="h-[80px] max-xsm:4xsm:mr-5 sxm:w-[320px] min-w-[320px] border-2 border-platinum flex post-shadow hover:hover-shadow">
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
        </span>
    </div>
</x-app-layout>
