@extends('layouts.app')

@section('meta-tags')
    <title>{{$blog->title}}</title>
    <meta name="description" content="{{$blog->meta['meta_description'] ?? ''}}" />
    <meta property="og:title" content="{{$blog->title ?? ''}}" />
    <meta property="og:description" content="{{$blog->meta['meta_description'] ?? ''}}" />
    <meta property="og:url" content="{{url(\App\Blog\Blog::blogUrl($blog->slug))}}" />

    <meta property="og:url"                content="{{url(\App\Blog\Blog::blogUrl($blog->slug))}}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{$blog->title ?? ''}}" />
    <meta property="og:description"        content="{{$blog->excerpt ?? ''}}" />
    @if ($blog->featured_image)
        <meta property="og:image"              content="{{url($blog->featured_image)}}" />
    @endif
@endsection

@section('content')
    <div id="blog" class="pt-10 bg-gray-200 pb-10 text-base">
        <div class="px-3 md:px-10 max-w-6xl m-auto">
            {!! $blog->content !!}
            <div class="mt-10 border-t pt-5">
                <span>You like it? share to</span>
                <a href="#" id="share-to-fb-btn" 
                    class="link text-gray-600 hover:text-blue-800 mr-2">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="link text-gray-600 hover:text-blue-800"
                    href="https://twitter.com/intent/tweet?text={{$blog->title}}&url={{url(\App\Blog\Blog::blogUrl($blog->slug))}}"
                    target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <p class="mt-5">If you have questions, don't hesitate to contact me.</p>
        </div>
    </div>
    <script>
        var url = "<?php echo url(\App\Blog\Blog::blogUrl($blog->slug)) ?>"
        document.getElementById('share-to-fb-btn').onclick = function() {
          FB.ui({
            display: 'popup',
            method: 'share',
            href: url,
          }, function(response){});
        }
    </script>
@endsection