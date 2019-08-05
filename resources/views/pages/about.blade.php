<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="/storage/cover_image/logo.ico" />

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        html {
            scroll-behavior: smooth;
        }
        
        hr {
            border-top: 1px dotted #000;
            /*Rest of stuff here*/
        }
        
        .fas {
            font-size: 30px;
            width: 50px;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }
        
        .fas:hover {
            text-decoration: none;
            color: white;
            background-color: #000;
            transition: 1s;
            -webkit-transform: scale(1.1) rotate(360deg);
            -moz-transform: scale(1.1) rotate(360deg);
            -ms-transform: scale(1.1) rotate(360deg);
            -o-transform: scale(1.1) rotate(360deg);
            transform: scale(1.1) rotate(360deg);
        }
        
        .fas:visited {
            text-decoration: none;
            color: white;
        }
        
        .fas:active {
            text-decoration: none;
            color: white;
        }
        
        .fa-facebook {
            background: #3B5998;
            color: white;
        }
        
        .fa-github {
            background: #000;
            color: white;
        }
        
        .fa-whatsapp {
            background: #2cbe4e;
            color: white;
        }
        
        .fa-linkedin {
            background: #007bb5;
            color: white;
        }
        
        .fa-instagram {
            background: #f09433;
            background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            background: -webkit-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888', GradientType=1);
            color: white;
        }
    </style>
</head>

<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            <h1 style="font-family: 'Special Elite', cursive;text-decoration: underline; font-weight: bold;">About Developer</h1>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <img src="https://scontent.fblr5-1.fna.fbcdn.net/v/t1.0-9/62018448_879362169076174_5712166457681379328_n.jpg?_nc_cat=105&_nc_oc=AQkfN6LEhF9Rlu_C0H-FA7jHgk5K2rT1jgAA2kGaa9RL5JXwSl1wfSC8wBLnAcVWQ68&_nc_ht=scontent.fblr5-1.fna&oh=a2f2559efae6cf39c72693ae9ca40e02&oe=5DDEAE17" class="img-responsive">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h2><b>Alok Raj.</b></h2>
                    <h4>Assistant System Engineer at <a target="_blank" style="text-decoration: none;" href="http://tcs.com">TCS</a></h4>
                    {{-- <h4>Web/Android Developer</h4> --}}
                    <h5 style="font-family: sans-serif;color: #000"><i class="fa fa-phone"></i> +91-8240159173</h5>
                    <h5 style="font-family: sans-serif;color: #000"><i class="fa fa-envelope"></i> alokr417@gmail.com</h5>
                    <h5 style="font-family: sans-serif;color: #000"><i class="fa fa-location-arrow"></i> Bangalore,India</h5>
                    <hr>
                    <p>I am a Assistant system engineer at TCS. This website is made using Laravel but currently I am learning MEAN Stack and it's great. <b>Web & Android App Develpment</b> excites me and I am learning more about it every day. My Dreams Are Big and I Beleive In Living Dream.</p>
                    <hr>
                    <p>Aspiring JavaScript Developer</p>
                    <hr>
                    <p>MEAN Stack Developer | Laravel Developer | Web Developer | WordPress Developer | Learner | Tech-Enthusiast | Frontend Android Developer | Chai-Lover</p>
                    <hr>
                    <p>The only objective of my life is <b>To Learn & Be Valuable</b>.</p>
                    <a target="_blank" href="https://zety.com/mycv/resume_alok" class="btn btn-primary btn-lg" role="button">Resume</a>

                </div>
            </div>
        </div>

    </div>
    <div align="center" style="margin-top: 3%;">
        <a style="text-decoration: none;" target="_blank" href="https://www.facebook.com/people/Alok-Raj/100010071970453" class="fa fa-facebook fas"></a>
        <a style="text-decoration: none;" target="_blank" href="https://github.com/alok722" class="fa fa-github fas"></a>
        <a style="text-decoration: none;" target="_blank" href="https://api.whatsapp.com/send?phone=918240159173" class="fa fa-whatsapp fas"></a>
        <a style="text-decoration: none;" target="_blank" href="https://www.linkedin.com/in/alok-raj-465212100/" class="fa fa-linkedin fas"></a>
        <a style="text-decoration: none;" target="_blank" href="https://www.instagram.com/alok_cse/?hl=en" class="fa fa-instagram fas"></a>
    </div>
    <div class="container" style="margin-top: 3%;">
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2019 Alok.Blog, Inc. &middot; <a href="#" target="_blank">Privacy</a> &middot; <a href="#" target="_blank">Terms & Condition</a></p>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('article-ckeditor');
    </script>
</body>

</html>