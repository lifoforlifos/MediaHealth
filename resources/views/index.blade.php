<!DOCTYPE html>
<html data-wf-domain="tile-design-template.webflow.io" data-wf-page="566ded60394cebc21a1286a8" data-wf-site="566ded60394cebc21a1286aa">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">

        <!-- Icon -->
        <link rel="icon" type="image/png" sizes="32x32" href="/images/logo.png">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Media Head</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
        <script type="text/javascript">
            WebFont.load({
                google: {
                    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]
                }
            });
        </script>
    </head>

    <body>
        <div id="app"></div>

        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
        <!--<script src="{{ asset('js/my.js') }}" charset="utf-8"></script>-->
        <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    </body>
</html>
