<div class="group hover:scale-105 transform translate duration-300 relative rounded-lg w-full shadow-md shadow-slate-200 bg-white overflow-hidden">
    <div>
        <img class="w-full object-cover group-hover:grayscale-0 grayscale transition duration-300 h-[600px]" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}'
    s image">
    </div>
    <a href="/posts/{{ $post->slug }}" class="absolute top-0 left-0 transition duration-300 w-full h-full  text-gray-900 hover:text-indigo-700"></a>

    <!-- <div class="p-7">

        <small class="text-indigo-600 font-bold mb-3 block"><a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></small>

        <h2 class="font-bold text-xl mb-3 block"><a href="/posts/{{ $post->slug }}" class="text-gray-900 hover:text-indigo-700">{{ $post->title }}</a></h2>

        <p class="text-gray-500 text-base mb-5 block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque quo nemo, ipsa expedita aspernatur sit eius. Ipsam ab hic cumque obcaecati magni sequi sit libero, sed, reprehenderit assumenda iusto excepturi.</p>

        <div>
            <span class="mb-1 text-gray-900 hover:text-indigo-600 font-semibold block"><a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a></span>
            <span class="text-gray-500 block text-sm">{{ $post->created_at->format('M, d Y h:i A') }}</span>
        </div>
    </div> -->
</div>