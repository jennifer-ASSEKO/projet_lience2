<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
    <div class="container-fluid">
        <!-- Logo et texte SUNU ASSURANCES -->
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
            <img class="img-fluid me-2" 
                 src="{{ asset('templates/template2/themewagon.github.io/insure/img/logo-sunu.png') }}" 
                 alt="Logo SUNU ASSURANCES" 
                 style="width: 50px; height: auto; border-radius: 8px;" />
            <span style="font-size: 1.6rem; color: #800000; font-weight: 700;">SUNU ASSURANCES</span>
        </a>

        <!-- Toggler pour mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu principal -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link active">Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">A Propos de Nous</a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link">Nos Services</a> <!-- Lien vers #services -->
                </li>
                <li class="nav-item">
                    <a href="#appointment" class="nav-link">Contactez nous</a> <!-- Lien vers #appointment -->
                </li>
            </ul>
        </div>

        <!-- Boutons "Se connecter" et "S'inscrire" -->
        <div class="d-flex align-items-center">
            <a href="{{ route('login') }}" class="btn btn-primary px-3 me-2 d-none d-lg-block" 
               style="background-color: #800000; border-color: #800000;">
                Se connecter
            </a>
            <a href="{{ route('register') }}" class="btn btn-outline-primary px-3 d-none d-lg-block register-btn">
                S'inscrire
            </a>
        </div>
    </div>
</nav>
