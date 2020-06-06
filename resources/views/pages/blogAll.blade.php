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
    <div id="blogs" class="bg-gray-200 pt-10 pb-10">
        <div class="px-3 md:px-10 max-w-6xl m-auto">
            <h1 class="font-bold text-4xl mb-10">Blogs</h1>
            <div class="md:flex">
                <div class="w-full md:w-2/3 personal-posts">
                    <div class="content-center">
                        @foreach($blogs as $key => $blog)
                            @php
                                $blog = (object) $blog;
                                $bgs = [
                                    'bg-blue-700',
                                    'bg-teal-600',
                                    'bg-blue-800',
                                ]
                            @endphp
                            <div class="mb-3 bg-white rounded-sm mb-5 shadow-md">
                                @include('components.blog')
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="md:w-1/3">
                    <div class="w-full py-5 md:ml-6 community-post bg-white text-center px-5">
                        <h2 class="mb-10 mt-0">Community Posts</h2>
                        <div class="bg-gray-200 mb-3 p-6 py-6 rounded-sm border text-center">
                            <a class="text-gray-800" 
                                href="https://laravel-news.com/learning-reactphp-video-course" 
                                target="_blank">
                                <span class="block hover:text-blue-600">Learning ReactPHP Video Course</span>
                            </a>
                        </div>
                        <div class="bg-gray-200 mb-3 p-6 py-6 rounded-sm border text-center">
                            <a class="text-gray-800" 
                                href="https://freek.dev/1676-adding-trycatch-to-laravel-collections" 
                                target="_blank">
                                <span class="block hover:text-blue-600">Adding try/catch to Laravel collections</span>
                            </a>
                        </div>
                        <div class="bg-gray-200 mb-3 p-6 py-6 rounded-sm border text-center">
                            <a class="text-gray-800" 
                            href="https://divinglaravel.com/when-does-php-call-__destruct" 
                            target="_blank">
                            <span class="block hover:text-blue-600">When does PHP call __destruct()?</span>
                            </a>
                        </div>
                        <div class="bg-gray-200 mb-3 p-6 py-6 rounded-sm border text-center">
                            <a class="text-gray-800" 
                                href="https://driesvints.com/blog/the-beauty-of-single-action-controllers/" 
                                target="_blank">
                            <span class="block hover:text-blue-600">The Beauty of Single Action Controllers</span>
                            </a>
                        </div>
                        <div class="bg-gray-200 mb-3 p-6 py-6 rounded-sm border text-center">
                            <a class="text-gray-800" 
                                href="https://jasonmccreary.me/articles/avoiding-inheritance-laravel/" 
                                target="_blank">
                            <span class="block hover:text-blue-600">Avoiding inheritance in Laravel</span>
                            </a>
                        </div>
                        <div class="bg-gray-200 mb-3 p-6 py-6 rounded-sm border text-center">
                            <a class="text-gray-800" 
                                href="https://laravel-news.com/laravel-optional-helper" 
                                target="_blank">
                            <span class="block hover:text-blue-600">Using the Laravel Optional Helper and the New Optional Closure</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection