<!doctype html>
<html>
    <head>
        <meta name="robots" content="index,follow" />
        <link rel="canonical" href="https://edionme.com" />

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:site_name" content="edionme.com" />
        @yield('meta-tags')

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166822513-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', <?php echo config('social.gogle_tag') ?>);
        </script>

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
    </head>
    <body class="font-body text-gray-700 text-2xl md:text-base border-t-4 border-blue-700">
        <script>
            window.fbAsyncInit = function() {
              FB.init({
                appId            : <?php echo config('social.fb_app_id') ?>,
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v7.0'
              });
            };
          </script>
          <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
          <div id="app" class="relative">
            @include('sections.header')
            <div class="m-auto">
              @yield('content')
            </div>
            @include('sections.footer')
        </div>
    </body>
    <script src="{{mix('js/app.js')}}">
    <script>hljs.initHighlightingOnLoad();</script>
</html>