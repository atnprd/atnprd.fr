@extends('layouts.main')

@section('title', 'antprd.fr')

@section('header')
@parent
@endsection

@section('content')
<section class="d-flex justify-content-center">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-md-12">
                <h4 class="mb-5">Expérience professionelle</h4>
            </div>
        </div>
        <div class="row w-100 mb-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="mb-1">Stagiaire en informatique</h5>
                        <h6 class="text-secondary mb-3">Roederer</h6>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <span class="text-primary">Avril 2019 - Juin 2019</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            Le sujet de ce stage concernait la classification des pièces jointes réceptionnées par l'entreprise. Roederer souhaitait mettre en place une solution basée sur le Machine Learning (grâce à un réseau neuronal) afin de fournir une aide à la classification. Ce projet a été réalisé en Python et j'ai pû utiliser des bibliothèques comme Google TensorFlow, Pandas ou Pytesseract.
                        </p>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <i class="fab fa-python fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100 mb-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="mb-1">Stagiaire en informatique</h5>
                        <h6 class="text-secondary mb-3">DS Impression</h6>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <span class="text-primary">Septembre 2018 - Octobre 2018</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            DS Impression avait mis en place un projet visant à créer un Intranet pour ses employés. Durant mon stage, j'ai repris le premier modèle qui avait été réalisé sous Wordpress et je l'ai adapté aux besoins de l'entreprise : plannings, réservation de salle, accès restreints aux fichiers, etc.. J'ai aussi créé un outil de visualisation de grilles tarifaires en PHP et SQL, que j'ai ensuite inséré dans l'Intranet.
                        </p>
                    </div>
                    <div class="col-3 offset-md-1">
                        <i class="fab fa-html5 fa-3x p-2"></i> <i class="fab fa-php fa-3x p-2"></i> <i class="fab fa-wordpress fa-3x p-2"></i> <i class="fas fa-database fa-3x p-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer')
@parent
@endsection