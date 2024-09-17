<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="nav-left" class="flex items-center">
        <div class="text-gray-800">
            <a href="{{ route('home') }}">
                <x-application-mark />
            </a>
        </div>
        <div class="top-menu ml-10">
            <div class="flex space-x-4">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
            </div>
        </div>
    </div>
    @auth
       @include('layouts.partials.header-right-auth')
    @else
        @include('layouts.partials.header-right-guest')
    @endauth
</nav>