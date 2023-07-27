<x-app-layout>
    <x-slot:title>
        News | Racestop.net
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px]">
            <h1 class="font-bold text-2xl ml-5 my-5">Latest News</h1>
            <div class="ml-5 mb-12 grid grid-cols-2 gap-4 w-[660px]">
                @foreach ($posts as $post)
                    <div class="@if ($post->id % 2 === 0) float-right @else float-left @endif">
                        <a href="/news/{{ $post->slug }}">
                            <div class="h-[80px] w-[320px] border-2 border-platinum flex post-shadow hover:hover-shadow">
                                <div class="h-[77px] w-[98px] bg-yellow">
                                    <img class="h-[77px] w-[98px]" src="/images/{{ $post->image_path }}" alt="img">
                                </div>
                                <div class="pr-1 w-4/6">
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
