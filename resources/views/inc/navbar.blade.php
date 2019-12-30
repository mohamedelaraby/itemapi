<nav class="navbar navbar-expand-sm navbar-light bg-light sb-navbar">
    <div class="container">
        <a class="navbar-brand" href="/" >PhotoShow</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item {{Request::is('/') ? 'active': ''}}">
                    <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
               
             
                <li class="nav-item {{Request::is('/create') ? 'active': ''}}">
                    <a class="nav-link" href="/create" >Create Albums</a>
                </li> 

                <li class="nav-item {{Request::is('about') ? 'active': ''}}">
                    <a class="nav-link" href="/about" >About</a>
                </li>

            
            </ul>
        </div>
</div>
</nav>

