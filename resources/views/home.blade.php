@extends('layouts.app')

@section('content')
    <div class="md:flex md:justify-between">
        <div class="md:w-1/6">
            @include('sidebar-links')
        </div>
        <div class="md:flex-1 md:mx-10">
            @include('publish-tweet-panel')

            <div class="border border-gray-300 rounded-lg">
                @include('tweet')
            </div>
        </div>
        <div class="md:w-1/6 bg-blue-100 rounded-lg p-4">
            @include('friends-list')
        </div>
    </div>
@endsection
