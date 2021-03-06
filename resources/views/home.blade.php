@extends('layouts.app')

@section('content')
    <div class="section-content">
        <div class="d-md-flex d-block">
            <div style="display: none" class="col-md-4 d-md-block">
                <img class="img-foguete animate__animated animate__backInLeft" src="{{ asset('assets/img_foguete.png') }}" width="200" height="200" alt="foguete_section">
            </div>
            <div class="col-md-8">
                <span class="text-subtitle-md">
                    {{ config('app.name') }}
                </span>
                <br>
                <span class="text-subtitle-sm">
                    Com o intuito de aprendizagem e aprimoramento dos seguintes itens:
                </span>
                <ul class="ul-section text-subtitle-sm">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Postgres</li>
                    <li>PHP Laravel</li>
                </ul>
                <div class="col-md-12">
                    <a class="btn btn-block btn-white-purple scroll-project">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
    <section id="about">
        <p class="header-title">Ferramentas utilizadas:</p>
        <div class="row">
            <div class="col-md-4 text-center p-3">
                <span class="btn btn-purple btn-floating m-1" style="cursor: default;">
                    <i class="fab fa-php fa-fw fa-2x"></i>
                </span>
                <span class="d-block text-subtitle-sm">PHP 8.0</span>
            </div>
            <div class="col-md-4 text-center p-3">
                <span class="btn btn-purple btn-floating m-1" style="cursor: default;">
                    <i class="fab fa-laravel fa-fw fa-2x"></i>
                </span>
                <span class="d-block text-subtitle-sm">Laravel 9.2</span>
            </div>
            <div class="col-md-4 text-center p-3">
                <span class="btn btn-purple btn-floating m-1" style="cursor: default;">
                    <i class="fas fa-server fa-fw fa-2x"></i>
                </span>
                <span class="d-block text-subtitle-sm">Postgres</span>
            </div>
            <div class="col-md-4 text-center p-3">
                <span class="btn btn-purple btn-floating m-1" style="cursor: default;">
                    <i class="fab fa-html5 fa-fw fa-2x"></i>
                </span>
                <span class="d-block text-subtitle-sm">HTML</span>
            </div>
            <div class="col-md-4 text-center p-3">
                <span class="btn btn-purple btn-floating m-1" style="cursor: default;">
                    <i class="fab fa-bootstrap fa-fw fa-2x"></i>
                </span>
                <span class="d-block text-subtitle-sm">Bootstrap 5</span>
            </div>
            <div class="col-md-4 text-center p-3">
                <span class="btn btn-purple btn-floating m-1" style="cursor: default;">
                    <i class="fab fa-js fa-fw fa-2x"></i>
                </span>
                <span class="d-block text-subtitle-sm">Javascript/JQuery</span>
            </div>
        </div>
        <br>
        <p class="header-title">Sobre mim</p>
        <div class="row">
            <span class="text-subtitle-sm">N??o tenho mais ideia do que colocar nessa section. TO DO</span>
        </div>
    </section>
    <div class="container py-4" id="project-tab">
        <div class="panel">
            <p class="header-title">Projetos para aprimorar conhecimentos:</p>
            <div class="row justify-content-center">
                <div class="col-md-3 mb-sm-4">
                    <div class="card text-center">
                        <div class="card-header bg-purple">Booking</div>
                        <div class="card-body">
                            <p class="text-subtitle-sm mb-0">Descri????o:</p>
                            <span class="text-muted">
                                Projeto Booking, aqui irei fazer o controle de um booking de fotos, com compress??o de imagem e redimens??o de imagem
                            </span>
                            <a href="{{ route('booking.index') }}" class="btn btn-outline-purple mt-3 d-block" role="button">Clique Aqui</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links
            $(".scroll-project").on('click', function(event) {
                event.preventDefault();

                var hash = '#project-tab';
                scrollSmooth(hash)
            });

            function scrollSmooth(hash){
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 500);
            }
        });
    </script>
@endpush


