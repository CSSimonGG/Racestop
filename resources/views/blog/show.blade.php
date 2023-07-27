<x-app-layout>
    <x-slot:title>
        {{ $post->title }} | Racestop.net
    </x-slot:title>
    <div class="flex justify-center">
        <span class="bg-white w-[1024px]">
            <article class="px-5 py-8">
                <div>
                    <div>
                        <h2 class="font-black uppercase italic text-light-red mb-2">
                            {{ $post->category }} news
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
        </span>
    </div>
</x-app-layout>
