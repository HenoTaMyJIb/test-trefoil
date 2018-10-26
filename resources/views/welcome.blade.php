<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:type" content="@yield('og-type', 'website' )" />
    <meta property="og:url" content="@yield('og-url', '/' )" />
    <meta property="og:title" content="@yield('og-title', 'Trefoil Spordikool' )" />
    <meta property="og:image" content="@yield('og-image', url('/assets/img/main1.jpg'))" />
    <meta property="og:description" content="@yield('og-description', 'Trefoil Spordikool. Spordialad: teamgym , trampoliinvõimlemine, mudilaste võimlemine, show rühm. Tule trenni!')" />
    <meta name="description" content="@yield('og-description', 'Trefoil Spordikool. Spordialad: teamgym , trampoliinvõimlemine, mudilaste võimlemine, show rühm. Tule trenni!')" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{setting('site.title')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all'
        rel='stylesheet' type='text/css'>
    <!-- END GLOBAL MANDATORY STYLES -->


    <link rel="shortcut icon" href="/images/favicon.ico" />
    <link rel="stylesheet" href="{{ mix('/css/components.css') }}">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
    <style>
        body, html {
            height: 100%;
        }

        body {
            margin: 0;
            background-color: #eee;
        }

        .full-container {
            min-height: 100%;
            margin: auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .full-container h1 {
            color: green;
            text-transform: uppercase;
            letter-spacing: 10px;
            font-size: 60px;
            padding-bottom: 20px;
            text-align: center;
        }
        
        .boxes {
            display: flex;
        }
        
        .box {
            width: 450px;
            height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            text-align: center;
            margin: 0 50px;
            background-repeat:no-repeat;
            background-size:cover;
            box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.8 ), 0 5px 30px rgba(0,0,0,0.7);
        }

        .box-1 {
            background-image: url(http://test-trefoil.test/images/logo1.png);
        }

        .box-2 {
            background-image: url(http://test-trefoil.test/images/ACCamera_1.png) ;
        }

        .box:hover {
            box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.9);
        }

        .box h2 {
            text-transform: uppercase;
            font-size: 26px;
            color: white;
            letter-spacing: 2px;
        }

                @media screen and (max-width: 768px) {
            .boxes {
                flex-direction: column;
            }

            .box {
                margin: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="full-container">
        
        <div style="margin: auto;">
            <h1>TREFOIL</h1>
            <div class="boxes">
                <a href="{{env('APP_URL')}}/avaleht">
                    <div class="box box-1">
                        <h2>Trefoil Spordikool</h2>
                    </div>
                </a>
                <a href="http://jumpingpark.trefoil.ee/">
                    <div class="box box-2">
                        <h2>Trefoil Jumping park</h2>
                    </div>
                </a>
            </div>
        </div>
        
    </div>
    <!-- END: LAYOUT/FOOTERS/FOOTER-6 -->
</body>

</html>