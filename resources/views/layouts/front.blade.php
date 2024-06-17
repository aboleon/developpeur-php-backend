<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Développeur PHP Backend - Expertise en PHP, Laravel, SQL, HTML, CSS, JavaScript et jQuery. Solutions professionnelles sur mesure pour vos projets web.">
    <meta name="keywords" content="développeur PHP, backend, PHP, Laravel, SQL, HTML, CSS, JavaScript, jQuery, développement web">
    <meta name="author" content="Andrian Mihailov">

    <!-- Open Graph Meta Tags for Social Media Sharing -->
    <meta property="og:title" content="Développeur PHP Backend">
    <meta property="og:description" content="Expertise en PHP, Laravel, SQL, HTML, CSS, JavaScript et jQuery. Solutions sur mesure pour vos projets web.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://developpeur-php-backend.fr">
    <meta property="og:image" content="{{ asset('media/thumbnail.png') }}">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Développeur PHP Backend">
    <meta name="twitter:description" content="Expertise en PHP, Laravel, SQL, HTML, CSS, JavaScript et jQuery. Solutions sur mesure pour vos projets web.">
    <meta name="twitter:image" content="{{ asset('media/thumbnail.png') }}">

    <title>Développeur PHP Backend</title>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "name": "Développeur PHP Backend",
          "url": "https://developpeur-php-backend.fr"
        }
    </script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    {!! csscrush_tag(public_path('css/front.css')) !!}

    @stack('css')


</head>
<body>


<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() != 'contact' ? 'active' : '' }}" aria-current="page" href="{{ url('/#presentation') }}">Présentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#stack') }}">Stack</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#parcours') }}">Parcours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#projets') }}">Projets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link static {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}" href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @if (isset($slot))
        {{ $slot }}
    @else
        @yield('slot')
    @endif



        <footer class="container mb-5">
            <span style="font-size: 16px;">Code & Design : Andrian Mihailov &copy; {{ date('Y') }}</span>
        </footer>

</main>

@stack('modals')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="{!! asset('vendor/aboleon/framework/js/common.js') !!}"></script>
@stack('callbacks')
@stack('js')
</body>
</html>
