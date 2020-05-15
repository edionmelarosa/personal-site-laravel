@extends('layouts.app')

@section('meta-tags')
    <meta name="description" content="{{$blog->description}}" />
    <meta name="keywords" content="{{$blog->keywords}}" />

    <meta property="og:title" content="{{$blog->title}}" />
    <meta property="og:description" content="{{$blog->description}}" />
    <meta property="og:url" content="{{url('blogs/'.$blog->slug)}}" />
@endsection

@section('content')
    @include('pages.blogs.'.$blog->slug)
@endsection