@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-around">

            <div class="col-4">
                <div class="col-12">
                    <h3>Cour d'appel de Meknès</h3>
                </div>
                <hr>
                <div class="col-12">
                    <h4>Non Disponible</h4>
                </div>
                <div class="col-12">Non Disponible</div>
            </div>
            <div class="col-4">
                <img src="{{ asset('storage/service_profiles/' . $service->id . '.jpg') }}" class="img-thumbnail" alt="">
            </div>
        </div>
     
        <div class="row p-3">
            <div>
                <h3 class="mb-4" style="text-decoration: underline">Calendrier hebdomadaire</h3>
            </div>
            <calendar></calendar>
        </div>
    </div>
@endsection
