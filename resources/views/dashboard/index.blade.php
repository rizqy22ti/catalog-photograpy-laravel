@extends('dashboard.layouts.app')

@section('dashboard-content')
<h1 class="text-3xl font-black text-center md:text-left">Dashboard</h1>
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
<div class="flex flex-col items-center w-full">
    <dotlottie-player src="https://lottie.host/7a445bfa-5f90-4700-a9c6-812b3c82b91c/wh72w8rROQ.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
    <div class="text-3xl font-bold text-indigo-600">
        {{ auth()->user()->name }}
    </div>
</div>
@endsection