<!doctype html>
<html>
    <head>
        <meta name="robots" content="index,follow" />
        <link rel="canonical" href="https://edionme.com" />
        <meta property="og:site_name" content="edionme.com" />
        @yield('meta-tags')

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166822513-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-166822513-1');
        </script>

        <link rel="stylesheet" href="{{url('assets/css/app.css')}}">
        <style>
           xmp, code, pre {
              padding: 0 5px;
              border: 1px dotted #ddd;
              background-color: #ddd;
              border-radius: 2px;
              -webkit-border-radius: 2px;
              font-size: 13px;
           }
        </style>
    </head>
    <body>
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
        <div id="app" class="max-width mx-auto px3">
            <div class="content index my4">
                @include('sections.header')
                @yield('content')
            </div> 
            @include('sections.footer')
        </div>
    </body>
</html>