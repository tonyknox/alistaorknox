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
    <style>
    .hyphenate {
        -webkit-hyphens: auto;
        -ms-hyphens: auto;
        hyphens: auto;
    }
</style>
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
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Biography
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/directories/1">Bio</a>
                                        <a class="dropdown-item" href="/directories/6">Childhood</a>
                                        <a class="dropdown-item" href="/directories/7">The Bank</a>
                                        <a class="dropdown-item" href="/directories/8">Adolesence</a>
                                        <a class="dropdown-item" href="/directories/9">Marriage</a>
                                        <a class="dropdown-item" href="/directories/10">The Navy</a>
                                        <a class="dropdown-item" href="/directories/11">First Buildings</a>
                                        <a class="dropdown-item" href="/directories/12">Bohemian Associations</a>
                                        <a class="dropdown-item" href="/directories/13">Early Houses</a>
                                        <a class="dropdown-item" href="/directories/14">Margot</a>
                                        <a class="dropdown-item" href="/directories/18">Professional Building</a>
                                        <a class="dropdown-item" href="/directories/15">Hard Times</a>
                                        <a class="dropdown-item" href="/directories/17">The Knox House</a>
                                        <a class="dropdown-item" href="/directories/16">Landscape Architecture</a>
                                        <a class="dropdown-item" href="/directories/20">Helping Hand</a>
                                        <a class="dropdown-item" href="/directories/19">Eltham Shire Council</a>
                                        <a class="dropdown-item" href="/directories/24">Mature Housess</a>
                                        <a class="dropdown-item" href="/directories/25">Postscript</a>
                                    </div>
                                </li>
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
