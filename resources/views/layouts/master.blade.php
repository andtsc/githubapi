<html>
    <head>
        <title>Github API</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

        @yield('styles')
    </head>
    <body>
       <div class="container">
            <nav class="navbar navbar-default" role="navigation">
               <div class="collapse navbar-collapse" id="navbar-brand-centered">
                   <ul class="nav navbar-nav">
                   @if( !isset($baseurl)|| $baseurl!="authorizations")
                        <li class="active"><a href="/">Repositories</a></li>
                    @else
                        <li ><a href="/">Repositories</a></li>
                    @endif
                   </ul>
                   <ul class="nav navbar-nav">
                    @if(isset($baseurl)&&$baseurl=="authorizations")
                        <li class="active"><a href="/authorizations">Authorizations</a></li>
                    @else
                        <li ><a href="/authorizations">Authorizations</a></li>
                    @endif
                   </ul>
               </div>
            </nav>

            @yield('content')

            @yield('scripts')
       </div>
    </body>
</html>

