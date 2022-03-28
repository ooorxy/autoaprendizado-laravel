@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end p-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Página Inicial</a></li>
                <li class="breadcrumb-item active" aria-current="page">Booking</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="panel">
            <p class="header-title">
                Booking
                <span class="float-end"><a class="btn btn-purple">Cadastrar</a></span>
            </p>
            <hr>
        </div>
    </div>
@endsection
