@extends('layouts.app')

@section('meta-tags')
    <title>Espiridion Larosa is a Full-stack developer from Philippines</title>
    <meta name="description" content="Espiridion Larosa is a Full-stack developer from Philippines" />
    <meta name="keywords" content="dev, laravel, laravel-dev, Full-stack, php" />

    <meta property="og:title" content="Espiridion Larosa" />
    <meta property="og:description" content="Espiridion Larosa is a Full-stack developer from Philippines" />
    <meta property="og:url" content="https://edionme.com" />
@endsection

@section('content')
    <section id="about">
        <p>
            Hello, I'm Espiridion Larosa. Full-stack Developer from Philippines. Here, I share what projects I worked on.
            I will also share everything I know about web development. 
        </p>
        <p>
            Find me on
            <a class="icon" target="_blank" href="https://github.com/edionmelarosa">
            <i class="fab fa-github"></i></a>,
            <a class="icon" target="_blank" href="https://twitter.com/edionmelarosa">
            <i class="fab fa-twitter"></i></a>
            <span>and</span>
            <a class="icon" target="_blank" href="mailto:contact@edionme.com">
            <i class="fas fa-envelope"></i></a>.
        </p>
    </section>
    @include('components.blogs')
@endsection