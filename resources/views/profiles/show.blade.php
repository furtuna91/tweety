@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img src="https://placeimg.com/1024/300/any" class="" alt="{{ $profile->name }}">

        <img src="{{ $profile->avatar }}" class="rounded-full absolute shadow" style="width: 150px; left: 0; right: 0; bottom: 0; margin: auto; transform: translateY(50%)" alt="{{ $profile->name }}">

    </header>
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="font-bold text-2xl mb-0">{{ $profile->name }}</h2>
            <p>Joined {{ $profile->created_at->diffForHumans() }}</p>
        </div>
        <div>
            <a href="" class="rounded-full border border-gray-400 shadow py-2 px-4 text-xs">Edit profile</a>
            <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow me</a>
        </div>
    </div>

    <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In dictum non consectetur a erat nam at.</p>

    <br>

    {{-- @include('timeline') --}}
    @includeIf('timeline', ['tweets' => $profile->tweets])

@endsection
