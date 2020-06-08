@extends('layouts.app')

@section('meta-tags')
    <title>Espiridion Larosa is a Full-stack developer from Philippines</title>
    <meta name="description" content="Espiridion Larosa is a Full-stack developer from Philippines." />
    <meta name="keywords" content="dev, laravel, laravel-dev, Full-stack, php" />

    <meta property="og:title" content="Espiridion Larosa" />
    <meta property="og:description" content="Espiridion Larosa is a Full-stack developer from Philippines." />
    <meta property="og:url" content="https://edionme.com" />

    <meta property="og:url"                content="https://edionme.com" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Espiridion Larosa is a Full-stack developer from Philippines." />
    <meta property="og:description"        content="Espiridion Larosa is a Full-stack developer from Philippines." />
@endsection

@section('content')
    <div class="h-100 bg-gray-200"
        style="min-height:500px;">
        @include('components.about')
    </div>
   {{-- <a href="{{url('/resume')}}" class="mt-5">View my resume</a> --}}
@endsection