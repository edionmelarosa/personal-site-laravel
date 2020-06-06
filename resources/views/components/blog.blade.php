@if ($blog->featured_image)
    @php
        $rand = rand(0, 2);
    @endphp
    <div class="{{$bgs[$rand]}} rounded-t-sm px-6 pt-6">
        <img 
            class="m-auto rounded-0 rounded-t-sm"
            src="{{$blog->featured_image}}" alt="{{$blog->featured_image_caption}}">
    </div>
@endif
<div class="p-6">
    <small class="mb-3 text-sm font-blue-700 block">{{ $blog->created_at->format('M d, Y') }}</small>
    <a class="block text-gray-800 hover:text-blue-700"
        href="{{ url(\App\Blog\Blog::blogUrl($blog->slug)) }}">
    {{ $blog->title }}</a>
</div>