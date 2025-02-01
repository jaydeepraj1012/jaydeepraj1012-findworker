@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="flex flex-col md:flex-row">
    {{-- Sidebar --}}
    <div class="w-full md:w-1/4 lg:w-1/5 h-screen bg-gray-100 p-4 fixed md:relative">
        @include('components.worker.sidebar')
    </div>

    {{-- Main Content --}}
    <div class="w-full md:ml-1/4 lg:ml-1/5 p-6 flex-1">
        <div class="flex justify-between items-center mb-10">
            <h1 class="text-3xl font-semibold">Dashboard</h1>
            <div class="flex items-center space-x-4">
                @if(session('profile_picture'))
                    <img alt="User profile" class="rounded-full w-10 h-10" src="{{ session('profile_picture') }}"/>
                @else
                    <img alt="User profile" class="rounded-full w-10 h-10" src="https://placehold.co/40x40"/>
                @endif
                <span class="font-medium">{{ session('username', 'Guest') }}</span>
            </div>
        </div>

        {{-- Widgets --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($widgets as $widget)
                <x-widget :title="$widget['title']" :value="$widget['value']" :icon="$widget['icon']" />
            @endforeach
        </div>

        {{-- Recent Tasks --}}
        <div class="mt-10">
            <h2 class="text-2xl font-semibold mb-4">Recent Tasks</h2>
            <x-task-list :tasks="$tasks" />
        </div>
    </div>
</div>
@endsection
