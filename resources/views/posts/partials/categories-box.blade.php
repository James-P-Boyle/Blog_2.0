<div>
    <h3 class="mb-3 text-lg font-semibold text-gray-900">Recommended Topics</h3>
    <div class="flex flex-wrap justify-start gap-2 topics">
        @foreach ($categories as $cat)
           <x-badge
                wire:navigate
                href="{{ route('posts.index', ['category' => $cat->slug]), }}"
                :textColor="$cat->text_color"
                :bgColor="$cat->bg_color"
            >
                {{ $cat->title }}
            </x-badge>
        @endforeach

    </div>
</div>
