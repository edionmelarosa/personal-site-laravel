@extends('layouts.app')

@section('meta-tags')
    <title>Espiridion Larosa is a Full-stack developer from Philippines</title>
    <meta name="description" content="Espiridion Larosa is a Full-stack developer from Philippines" />
    <meta name="keywords" content="dev, laravel, laravel-dev, Full-stack, php" />

    <meta property="og:title" content="Espiridion Larosa" />
    <meta property="og:description" content="Espiridion Larosa is a Full-stack developer from Philippines" />
    <meta property="og:url" content="https://edionme.com" />

    <meta property="og:url"                content="https://edionme.com" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="Espiridion Larosa is a Full-stack developer from Philippines" />
    <meta property="og:description"        content="Espiridion Larosa is a Full-stack developer from Philippines" />
@endsection

@section('content')
    <section id="about">
        <h1 class="font-bold text-4xl mb-4">Hello!</h1>
        <p>I am Espiridion Larosa Jr. Freelance Full stack developer form Philippines.</p>
        <p>Here, I will share everything I know about web development. </p>
        <p class="mt-5">
            Find me on
            <a class="link" target="_blank" href="https://twitter.com/edionmelarosa">Twitter</a>
            or
            <a class="link" target="_blank" href="mailto:contact@edionme.com">Email</a>.
        </p>
    </section>
    @include('components.blogs')
@endsection