<style>

/* Style de base du bouton "S'inscrire" */
.register-btn {
    color: #800000; /* Couleur du texte */
    border-color: #800000; /* Couleur de la bordure */
    transition: all 0.3s ease; /* Animation fluide pour les changements */
}

/* Hover (survol) du bouton "S'inscrire" */
.register-btn:hover {
    background-color: #800000; /* Fond rouge */
    color: #fff; /* Texte blanc */
    border-color: #800000; /* Bordure rouge */
}


</style>


@extends('layouts.app')

@section('title', 'Accueil - SUNU ASSURANCES')

@section('content')
    @include('partials._carousel')
    @include('partials._features')

    <!-- Section "We Provide Professional Insurance Services" -->
    <div id="services">
        @include('partials._services')
    </div>

    <!-- Section "Make an Appointment" -->
    <div id="appointment">
        @include('partials._appointment')
    </div>
@endsection

