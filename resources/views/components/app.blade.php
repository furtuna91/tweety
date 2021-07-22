@component('components.master')
    <section class="px-8">
        <main class="container mx-auto">
            <div class="md:flex md:justify-between">
                @if (auth()->check())
                    <div class="md:w-1/6">
                        @include('sidebar-links')
                    </div>
                @endif
                <div class="md:flex-1 md:mx-10">
                    {{ $slot }}
                </div>
                <div class="md:w-1/6 bg-blue-100 rounded-lg p-4">
                    @include('friends-list')
                </div>
            </div>
        </main>
    </section>
@endcomponent
