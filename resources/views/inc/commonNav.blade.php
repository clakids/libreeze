<header class="masthead mb-auto">
    <div class="inner">
        <a href="/" class="text-light">
            <h3 class="masthead-brand">{{ config('app.name', 'LiBreeze') }}</h3>        
        </a>
        <nav class="nav nav-masthead justify-content-center">
            @IF(isset($locator))
                @if ($locator === 0)<a class="nav-link active" href="/">Home</a> 
                @else <a class="nav-link" href="/">Home</a> @endif
                @if ($locator === 1)<a class="nav-link active" href="/about">About</a>
                @else <a class="nav-link" href="/about">About</a> @endif
                @if ($locator === 2)<a class="nav-link active" href="/contact">Contact</a>
                @else <a class="nav-link" href="/contact">Contact</a> @endif
                @if ($locator === 3)<a class="nav-link active" href="/login">Log In</a>
                @else <a class="nav-link" href="/login">Log In</a> @endif
            @else
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link" href="/contact">Contact</a>
                <a class="nav-link active" href="/login">Log In</a>
            @endiF
        </nav>
    </div>
</header>