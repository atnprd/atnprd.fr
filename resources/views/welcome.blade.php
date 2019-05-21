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
                    <div class="col-md-10">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
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