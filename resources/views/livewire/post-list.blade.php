<div class="px-3 py-6 lg:px-7">
    <div class="flex items-center justify-between border-b border-gray-100">
        <div>
            @if ($this->activeCategory || $search)
                <button class="px-2 text-xs text-red-400 border rounded" wire:click="clearFilters">X</button>
            @endif
            @if ($this->activeCategory)
                <x-badge
                    wire:navigate
                    href="{{ route('posts.index', ['category' => $this->activeCategory->slug]), }}"
                    :textColor="$this->activeCategory->text_color"
                    :bgColor="$this->activeCategory->bg_color"
                >
                    {{ $this->activeCategory->title }}
                </x-badge>
            @endif
            @if ($search)
                {{ __('blog.containing') }} <strong>{{ $this->search }}</strong>
            @endif
        </div>
        <div class="flex items-center space-x-4 font-light ">
            <x-label>{{ __('blog.filter.popular') }}</x-label>
            <x-checkbox wire:model.live="popular"/>
            <button
                class="py-4 {{ $sort === 'desc' ? 'border-b border-yellow-500 text-gray-900' : 'text-gray-500' }}"
                wire:click="setSort('desc')"
            >
            {{ __('blog.filter.latest') }}
            </button>
            <button
                class="py-4 {{ $sort === 'asc' ? 'border-b border-yellow-500 text-gray-900' : 'text-gray-500' }}"
                :class=""
                wire:click="setSort('asc')"
            >
            {{ __('blog.filter.oldest') }}
            </button>
        </div>
    </div>

    <div class="py-4">
        @foreach ($this->posts as $post)
            <x-posts.post-item :post="$post" wire:key="{{ $post->id }}" />
        @endforeach
    </div>
    <div class="my-2">
        {{ $this->posts->links() }}
    </div>
</div>
