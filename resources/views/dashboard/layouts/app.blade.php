@extends('layouts.app')

@section('content')
<div class="md:grid md:grid-cols-4 md:gap-6">
    <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
            <h1 class="text-3xl font-black text-center md:text-left">Welcome back, <span class="text-indigo-600">{{ auth()->user()->name }}</span></h1>

        </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-3">
        <div class="mb-10">
            <ul class="flex items-center">
                <li>
                    <a href="/dashboard" class="py-4 px-10 border-b-2 {{ Request::is('dashboard') ? 'text-indigo-600 font-bold border-b-indigo-600' : 'border-b-gray-200 text-gray-600 hover:border-b-indigo-600 hover:text-indigo-600 font-medium' }}">Dashboard</a>
                </li>
                <li>
                    <a href="/dashboard/posts" class="py-4 px-10 border-b-2 {{ Request::is('dashboard/posts') ? 'text-indigo-600 font-bold border-b-indigo-600' : 'border-b-gray-200 text-gray-600 hover:border-b-indigo-600 hover:text-indigo-600 font-medium' }}">My Posts</a>
                </li>
                @can('admin')
                <li>
                    <a href="/dashboard/categories" class="text-gray-600 hover:text-indigo-600 font-medium py-4 px-10 border-b-2 border-b-gray-200 hover:border-b-indigo-600">Categories</a>
                </li>
                @endcan
            </ul>
        </div>
        <div>
            @yield('dashboard-content')
        </div>
    </div>
</div>

<script>
    const previewImage = () => {
        const imgPreview = document.getElementById('img-preview');
        const imgInput = document.getElementById('image');

        imgPreview.style.display = 'block';

        const fileReader = new FileReader();
        fileReader.readAsDataURL(imgInput.files[0]);
        fileReader.onload = (event) => {
            imgPreview.src = event.target.result;
        }
    }
</script>
@endsection