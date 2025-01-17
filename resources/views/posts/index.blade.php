<x-app-layout
    title="All Posts"
>

    <div class="grid w-full grid-cols-4 gap-10">
        <div class="col-span-4 md:col-span-3">
            <livewire:post-list />
        </div>
        <div class="sticky top-0 h-screen col-span-4 px-3 py-6 pt-10 space-y-10 border-gray-100 md:col-span-1 md:px-6 md:border-l">

            @include('posts.partials.search-box')

            @include('posts.partials.categories-box')


        </div>
    </div>


</x-app-layout>


