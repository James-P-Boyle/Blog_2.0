<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div>
            @if ($search)
                Searching for: <span class="font-bold">{{ $this->search }}</span> ({{ count($this->posts) }} result{{ (count($this->posts) > 1) | !count($this->posts) ? 's' : '' }})

                <button class="border rounded px-2" wire:click="clearSearch">Clear Search</button>
            @endif
        </div>
        <div class="flex items-center space-x-4 font-light ">
            <button
                class="py-4 {{ $sort === 'desc' ? 'border-b border-yellow-500 text-gray-900' : 'text-gray-500' }}"
                wire:click="setSort('desc')"
            >
                Latest
            </button>
            <button
                class="py-4 {{ $sort === 'asc' ? 'border-b border-yellow-500 text-gray-900' : 'text-gray-500' }}"
                :class=""
                wire:click="setSort('asc')"
            >
                Oldest
            </button>
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post)
            <x-posts.post-item :post="$post" />
        @endforeach
    </div>
    <div class="my-2">
        {{ $this->posts->links() }}
    </div>
</div>
