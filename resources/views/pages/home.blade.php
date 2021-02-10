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
   @include('components.about')
    <section class="blog-section home-page-blog-section px-3 bg-gray-200 py-10">
        <div class="text-center mb-10">
            <h2 class="font-bold text-xl md:text-4xl mb-0">Recent Posts</h2>
            <a class="text-blue-700 text-base"
                href="{{url('blogs')}}"
            >View All</a>
        </div>
        <div class="md:px-10 max-w-6xl m-auto">
            @foreach ($blogs->split(2) as $blogSlice)
            <div class="md:flex content-center">
                @foreach($blogSlice as $key => $blog)
                    @php
                        $blog = (object) $blog;
                        $bgs = [
                            'bg-blue-700',
                            'bg-teal-600',
                            'bg-blue-800',
                        ]
                    @endphp
                    <div class="md:mr-3 bg-white mb-2 rounded-sm shadow-md md:w-1/3 text-center shadow-md relative">
                        @include('components.blog')
                    </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </section>

    <section class="blog-section px-3 py-10 bg-gray-300">
        <div class="text-center mb-10">
            <h2 class="font-bold md:text-4xl mb-0 mt-0">Community Posts</h2>
        </div>
        <div class="md:px-10 max-w-6xl m-auto">
            <div class="md:flex content-center">
                <div class="bg-gray-200 mb-3 md:mr-3 p-6 py-6 rounded-sm shadow-md md:w-2/3 text-center">
                    <a class="text-gray-800" 
                        href="https://freek.dev/1676-adding-trycatch-to-laravel-collections" 
                        target="_blank">
                        <span class="block hover:text-blue-600">Adding try/catch to Laravel collections</span>
                    </a>
                </div>
                <div class="bg-gray-200 mb-3 md:mr-3 p-6 py-6 rounded-sm shadow-md md:w-2/3 text-center">
                    <a class="text-gray-800" 
                    href="https://divinglaravel.com/when-does-php-call-__destruct" 
                    target="_blank">
                    <span class="block hover:text-blue-600">When does PHP call __destruct()?</span>
                    </a>
                </div>
                <div class="bg-gray-200 mb-3 md:mr-3 p-6 py-6 rounded-sm shadow-md md:w-2/3 text-center">
                    <a class="text-gray-800" 
                        href="https://driesvints.com/blog/the-beauty-of-single-action-controllers/" 
                        target="_blank">
                    <span class="block hover:text-blue-600">The Beauty of Single Action Controllers</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('components.client-reviews')
@endsection