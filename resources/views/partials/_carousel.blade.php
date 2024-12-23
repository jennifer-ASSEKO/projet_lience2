<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <!-- Image 1 -->
            <div class="carousel-item active">
                <img class="w-100"
                    src="{{ asset('templates/template2/themewagon.github.io/insure/img/image4.jpg') }}"
                    alt="Image 1" />
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            {{-- Contenu optionnel pour l'image --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 2 -->
            <div class="carousel-item">
                <img class="w-100"
                    src="{{ asset('templates/template2/themewagon.github.io/insure/img/image50.png') }}"
                    alt="Image 50" />
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            {{-- Contenu optionnel pour l'image --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image 3 -->
            <div class="carousel-item">
                <img class="w-100"
                    src="{{ asset('templates/template2/themewagon.github.io/insure/img/image51.png') }}"
                    alt="Image 50" />
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            {{-- Contenu optionnel pour l'image --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contrôles pour navigation manuelle -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
