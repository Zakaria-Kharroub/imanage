<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/tailwind.output.css" />

<style>
    .card {
        position: relative;
        overflow: hidden;
        height: 20rem;
        border-radius: 1rem;
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        height: 100%;
        object-fit: cover;
        border-radius: 1rem;
    }

    .card-body {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0);
        padding: 1rem;
        border-bottom-left-radius: 1rem;
        border-bottom-right-radius: 1rem;
        transition: all 0.3s ease;
        opacity: 0;
        pointer-events: none;
    }

    .card:hover .card-body {
        background-color: rgb(255, 255, 255);
        opacity: 1;
        pointer-events: auto;
    }
</style>

@extends('layouts.default')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <a href="{{route('getElec')}}">
            <div class="card mb-4">
                
                <img src="elec.jpg" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Electricity Bill</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{route('getWater')}}">
            <div class="card mb-4">
                <img src="water.jpeg" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Water Bill</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            </a>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="wif.jpeg" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">WIFI Bill</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="rent.jpeg" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Rental Bill</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="teacher.jpg" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Bill</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="https://via.placeholder.com/300" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title">Card Title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
 
</div>
@endsection


