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
    @include($blog->file_content)
@endsection