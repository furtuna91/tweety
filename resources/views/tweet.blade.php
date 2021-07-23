<div class="flex p-4  {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ route('profiles.show', $tweet->user) }}">
            <img src="{{ $tweet->user->avatar }}" alt="" class="rounded-full mr-2" width="40" height="40">
        </a>
    </div>
    <div>
        <a href="{{ route('profiles.show', $tweet->user) }}">
            <h5 class="font-bold mr-2">{{ $tweet->user->name }}</h5>
        </a>
        <p class="text-sm">{{ $tweet->body }}</p>
    </div>
</div>
