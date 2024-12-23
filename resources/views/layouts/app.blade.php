<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Insure - Insurance HTML Template')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('templates/template2/themewagon.github.io/insure/img/favicon.html') }}" rel="icon" />
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;family=Poppins:wght@600;700&amp;display=swap"
        rel="stylesheet" />
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}" rel="stylesheet" />
    
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('templates/template2/themewagon.github.io/insure/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('templates/template2/themewagon.github.io/insure/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('templates/template2/themewagon.github.io/insure/css/bootstrap.min.css') }}" rel="stylesheet" />
    
    <!-- Template Stylesheet -->
    <link href="{{ asset('templates/template2/themewagon.github.io/insure/css/style.css') }}" rel="stylesheet" />
    @stack('styles')
</head>
<body>
    <style>
        .navbar-nav .nav-link:hover {
            color: #800000 !important; /* Rouge foncé au survol */
        }
        .navbar-nav .nav-link.active {
            color: #800000 !important; /* Rouge foncé pour le lien actif */
        }
        </style>
        
    @include('partials._header')
    @include('partials._topbar')
    @include('partials._navbar')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials._footer')
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    <!-- JavaScript Libraries -->
    <script src="{{ asset('templates/template2/code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('templates/template2/ccdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('templates/template2/themewagon.github.io/insure/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('templates/template2/themewagon.github.io/insure/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('templates/template2/themewagon.github.io/insure/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('templates/template2/themewagon.github.io/insure/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('templates/template2/themewagon.github.io/insure/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('templates/template2/themewagon.github.io/insure/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fonction pour un défilement fluide
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
    
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>
