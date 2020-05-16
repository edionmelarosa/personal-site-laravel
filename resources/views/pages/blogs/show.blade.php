@extends('layouts.app')

@section('meta-tags')
    <title>{{$blog->title}}</title>
    <meta name="description" content="{{$blog->description}}" />
    <meta property="og:title" content="{{$blog->title}}" />
    <meta property="og:description" content="{{$blog->description}}" />
    <meta property="og:url" content="{{url('blogs/'.$blog->slug)}}" />

    <meta property="og:url"                content="{{url('blogs/'.$blog->slug)}}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="{{$blog->title}}" />
    <meta property="og:description"        content="{{$blog->description}}" />
    <meta property="og:image"              content="{{url($blog->featured_image)}}" />
@endsection

@section('content')
    <div id="blog">
        @include($blog->file_content)
        <div class="share-wrapper">
            Share to 
            <i class="fab fa-facebook" id="share-to-fb-btn"></i>
            |
            <a 
                href="https://twitter.com/intent/tweet?text={{$blog->title}}&url={{url($blog->slug)}}"
                target="_blank"
            >
                <i class="fab fa-twitter" style="width:0;"></i>
            </a>
        </div>
    </div>
    <script>
        var url = "<?php echo url('blogs/'.$blog->slug) ?>"
        document.getElementById('share-to-fb-btn').onclick = function() {
          FB.ui({
            display: 'popup',
            method: 'share',
            href: url,
          }, function(response){});
        }
    </script>
    <style>
        #blog .share-wrapper {
            color: #666;
            font-size: 1rem;
        }

        #blog .share-wrapper i{
            cursor: pointer;
        }

        #blog .share-wrapper a{
            text-decoration: none;
        }
    </style>
@endsection