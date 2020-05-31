@extends('layouts.app')

@section('meta-tags')
    <title>Espiridion Larosa - Blogs</title>
    <meta name="description" content="Espiridion Larosa is a Full-stack developer from Philippines." />
    <meta property="og:title" content="Espiridion Larosa - Blogs" />
    <meta property="og:description" content="Espiridion Larosa is a Full-stack developer from Philippines." />
    <meta property="og:url" content="{{url('/blogs')}}" />

    <meta property="og:url"                content="{{url('/blogs')}}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Espiridion Larosa - Blogs" />
    <meta property="og:description"        content="Espiridion Larosa is a Full-stack developer from Philippines." />
    {{-- <meta property="og:image"              content="{{url($blog->featured_image)}}" /> --}}
@endsection

@section('content')
    <div id="blogs">
        @include('components.blogs')
    </div> 
@endsection