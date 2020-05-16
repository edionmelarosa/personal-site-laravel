@extends('layouts.app')

@section('meta-tags')
    <title>{{$blog->title}}</title>
    <meta name="description" content="{{$blog->description}}" />
    <meta property="og:title" content="{{$blog->title}}" />
    <meta property="og:description" content="{{$blog->description}}" />
    <meta property="og:url" content="{{url('blogs/'.$blog->slug)}}" />
@endsection

@section('content')
    @include($blog->file_content)
@endsection