@props(['post'])

<article {{ $attributes->merge(['class' => '[&:not(:last-child)]:border-b border-gray-100 pb-10']) }}>
    <div class="grid items-start grid-cols-12 gap-3 mt-5 article-body">
        <div class="flex items-center col-span-4 article-thumbnail">
            <a wire:navigate href="{{ route('posts.show', $post->slug) }}">
                <img
                    class="mx-auto mw-100 rounded-xl"
                    src="{{ $post->getThumbnailUrl() }}"
                    alt="thumbnail"
                >
            </a>
        </div>
        <div class="col-span-8">
            <div class="flex items-center py-1 text-sm article-meta">

                <x-posts.author :author="$post->author" size="lg"/>

                <span class="text-xs text-gray-500">. {{ $post->published_at->diffForHumans() }}</span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a wire:navigate href="{{ route('posts.show', $post->slug) }}" >
                    {{ $post->title }}
                </a>
            </h2>

            <p class="mt-2 text-base font-light text-gray-700">
                {{ $post->getExcerpt() }}
            </p>
            <div class="flex items-center justify-between mt-6 article-actions-bar">
                <div class="flex justify-between w-full">
                    @foreach ($post->categories as $cat)
                        <x-posts.category-badge :category="$cat"/>
                    @endforeach
                    <div class="flex items-center mr-2 space-x-4">
                        <span class="text-sm text-gray-500">{{ $post->getReadingTime() }} min read</span>
                    </div>
                </div>

                <div>
                    <livewire:like-button :key="'like-' . $post->id" :$post />
                </div>
            </div>
        </div>
    </div>
</article>
