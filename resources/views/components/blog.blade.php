{{-- @php
        $rand = rand(0, 2);
        @endphp
    <div class="{{$bgs[$rand]}} rounded-t-sm px-6 pt-6">
        @if ($blog->featured_image)
        <img 
            class="m-auto rounded-0 rounded-t-sm"
            src="{{$blog->featured_image}}" alt="{{$blog->featured_image_caption}}">
            @else 
                <div class=""></div>
            @endif
    </div> --}}
<div class="p-6 blog-item">
    <a class="block text-gray-800 hover:text-blue-700"
    href="{{ url(\App\Blog\Blog::blogUrl($blog->slug)) }}">
    <span class="block font-semibold mb-2">{{ $blog->title }}</span></a>
    <small class="mb-3 text-sm font-blue-700 block date">{{ $blog->created_at->format('M d, Y') }}</small>
</div>