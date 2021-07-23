<form action="{{ route('follows.store', $profile->name) }}" method="POST" >
    @csrf
    <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">{{ auth()->user()->isFollowing($profile) ? "Unfollow me" : 'Follow me' }}</button>
</form>
