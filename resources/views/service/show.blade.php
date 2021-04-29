@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-around">

            <div class="col-4">
                <div class="col-12">
                    <h3>{{ $service->service_name }}</h3>
                </div>
                <hr>
                <div class="col-12">
                    <h4>{{ $service->email }}</h4>
                </div>
                <div class="col-12">{{ $service->phone }}</div>
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
