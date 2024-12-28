@props(['post'])
<div class="">
    <a href="">
        <div>
            <img src="{{ $post->image }}" alt="{{ $post->slug }}" class="w-full rounded-xl">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2">
            <a href="" class="bg-red-600 text-white rounded-xl px-3 py-1 text-sm mr-3"></a>
            <p class="text-gray-500 text-sm">{{ $post->published_at }}</p>
        </div>
        <a href="#" class="text-xl font-bold text-gray-900">{{ $post->title }}</a>
    </div>
</div>
