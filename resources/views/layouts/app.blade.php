<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Alistair Knox') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/knox_screen.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script>
        // Picture element HTML5 shiv
        document.createElement( "picture" );
    </script>
    <script src="/js/picturefill.min.js" async></script>
    <script src="/js/image-scale.js" type="text/javascript"></script>
</head>
<body>
    <div id="app">
       <nav class="navbar navbar-expand-sm navbar-light bg-light">
       
      <div class="mx-auto">
            

                <a class="navbar-brand" style="margin-top:-6px;" href="/">&nbsp;&nbsp;<img src="/images/header/header.jpg" alt="Alistair Knox" width="60%" /></a>
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">            
                        <div class="navbar-nav">
                    <!-- Left Side Of Navbar -->
                            <ul class="nav navbar-nav">
                                <li><a class="nav-link" href="/">Home</a></li>
                                <li><a class="nav-link" href="{{ action('DirectoriesController@show', [2]) }}">Buildings</a></li>
                                <li><a class="nav-link" href="{{ action('DirectoriesController@show', [29]) }}">Images</a></li>
                                <li><a class="nav-link" href="{{ action('DirectoriesController@show', [27]) }}">Plans</a></li>
                                <li><a class="nav-link" href="{{ action('DiysController@index') }}">DIY</a></li>
                                <li><a class="nav-link" href="{{ action('BooksController@index') }}">Publications</a></li>
                                <li><a class="nav-link" href="{{ action('DirectoriesController@show', [1])}}">Bio</a></li>
                                <li><a class="nav-link" href="{{ action('PeopleController@index') }}">People</a></li>
                                <li><a class="nav-link" href="{{ action('DirectoriesController@show', [28]) }}">Contact</a></li>
                            </ul>
                        </div>
     
                </div>
            </div>
       </nav>
    </div>
       <div class="block w95 centre_one">
        <div class="container-fluid">
            @yield('content')
            @yield('sidebar')
            @yield('footer')
            @yield('vars')
       </div>
    </div>

    <div class="container">
        @yield('content2')     
    </div>
       

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script id="dsq-count-scr" src="//alistairknox-org.disqus.com/count.js" async></script>
</body>
</html>
