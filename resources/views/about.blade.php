@extends('layouts.app')
@php
    $imagePath = 'images/about.jpg'; // Replace this with the actual path of your image variable
@endphp
@section('content')
<div class="text-center space-y-4 w-full">
    <h1 class="text-5xl font-black text-center">About 
        <span class="text-indigo-600">CatalogPhoto</span>
    </h1>
</div>
<div class="grid grid-cols-2 gap-8 mt-8">
    <div>
        <img class="grayscale transition duration-300 hover:scale-105 hover:grayscale-0 " src="{{ asset($imagePath) }}" alt="Image Description">
    </div>
    <div class="flex flex-col justify-between">
        <div class="space-y-4">
        <h1 class="font-bold text-3xl">About</h1>
       <p>
            Selamat datang di PhotoCatalog, rumah bagi ribuan gambar penuh inspirasi! Kami dengan bangga memberikan akses publik dan gratis kepada dunia gambar
            berkualitas tinggi yang dapat mempercantik proyek, mendukung kreativitas Anda, atau sekadar menyemangati harimu. 
       </p>
       <h1 class="font-bold text-3xl">Visi Kami</h1>
       <p>
            Visi kami adalah memberikan akses mudah dan terbuka kepada gambar-gambar berkualitas dari berbagai kategori, mencakup alam, seni, bisnis, teknologi, dan banyak lagi. Kami percaya bahwa setiap gambar memiliki cerita dan kami ingin menjadi sarana di mana cerita itu dapat dilihat oleh dunia.
       </p>
        </div>
        <div>
        <a href="https://wa.me/6287837885905" class="border-4 border-green-500 py-2 px-4 rounded-lg inline-flex text-[#25D366] items-center w-auto space-x-3">
       <svg xmlns="http://www.w3.org/2000/svg" class="w-auto h-[40px]" viewBox="0 0 448 512" color="#25D366" stroke="#25D366"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#25D366" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
       <span class="tracking-[10px] text-xl font-bold uppercase">
            Hubungi Kami
       </span>
       </a>
        </div>
       
       
    </div>
</div>
@endsection