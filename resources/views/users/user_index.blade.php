@extends('users.layouts.layout')
@section('content')
    <div class="p-4">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <h1>user</h1>
            <button wire:click='routeKey'>asdasdasdasdas</button>
            {{ Auth::user()->user_type }}
        </div>

    </div>
@endsection
