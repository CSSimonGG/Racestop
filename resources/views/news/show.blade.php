<x-app-layout>
    <x-slot:title>
        {{ $post->title }} | Racestop.net
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px]">
            <article class="px-5 py-8">
                <div>
                    <div class="w-[665px]">
                        <h2 class="font-black uppercase italic text-light-red mb-2">
                            {{ $category->category }} news
                        </h2>
                        <h1 class="text-3xl font-extrabold">
                            {{ $post->title }}
                        </h1>
                    </div>
                    <div class="text-night pt-7 pb-3">
                        By <span class="font-bold capitalize">{{ $post->user->name }}</span>
                        <span class="pl-5">{{ date('j M Y', strtotime($post->updated_at)) }}</span>
                    </div>
                    <div>
                        <img class="h-[437px] w-[665px] overflow-hidden" src="/images/{{ $post->image_path }}"
                            alt="img">
                    </div>
                </div>
                <div class="w-[665px] my-6">
                    <p class="text-base text-dark-gray leading-6 font-light">
                        {{ $post->description }}
                    </p>
                </div>
            </article>
            @if (Auth::check())
                @role('writer')
                    <div class="bg-night h-20 flex justify-center space-x-3">
                        <div class="mt-6">
                            <a href="/news/{{ $post->slug }}/edit"
                                class="bg-light-red uppercase text-white text-sm font-bold py-3 px-5 rounded">
                                Edit Post
                            </a>
                        </div>
                        <div>
                            <form action="/news/{{ $post->slug }}/delete" method="POST" class="mt-4">
                                @csrf
                                @method('delete')
                                <button class="bg-light-red uppercase text-white text-sm font-bold py-3 px-5 rounded"
                                    type="submit">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endrole
            @endif
        </span>
    </div>
</x-app-layout>
