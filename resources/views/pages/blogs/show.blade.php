@extends('layouts.app')

@section('meta-tags')
    <title>{{$blog->title}}</title>
    <meta name="description" content="{{$blog->meta['meta_description']}}" />
    <meta property="og:title" content="{{$blog->title}}" />
    <meta property="og:description" content="{{$blog->meta['meta_description']}}" />
    <meta property="og:url" content="{{url(\App\Blog\Blog::blogUrl($blog->slug))}}" />

    <meta property="og:url"                content="{{url(\App\Blog\Blog::blogUrl($blog->slug))}}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{$blog->title}}" />
    <meta property="og:description"        content="{{$blog->description}}" />
    <meta property="og:image"              content="{{url($blog->featured_image)}}" />
@endsection

@section('content')
    <div id="blog">
        {!! $blog->content !!}
        <div class="mt-10 text-xl">
            <span>You like it? share to</span>
            <a href="#" id="share-to-fb-btn" class="link">Facebook</a>
            or
            <a 
                class="link"
                href="https://twitter.com/intent/tweet?text={{$blog->title}}&url={{url(\App\Blog\Blog::blogUrl($blog->slug))}}"
                target="_blank"
            >
                Twitter
            </a>
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
    <style>
        p {
            @apply {
                leading-10;
            }
        }
    </style>
@endsection