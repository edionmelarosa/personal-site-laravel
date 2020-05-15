<!doctype html>
<html>
    <head>
        <meta name="robots" content="index,follow" />
        <link rel="canonical" href="https://edionme.com" />
        <meta property="og:site_name" content="edionme.com" />
        @yield('meta-tags')

        <link rel="stylesheet" href="{{url('assets/css/app.css')}}">
    </head>
    <body>
        <div id="app" class="max-width mx-auto px3">
            <div class="content index my4">
                @include('sections.header')
                @yield('content')
            </div> 
            @include('sections.footer')
        </div>
    </body>
</html>