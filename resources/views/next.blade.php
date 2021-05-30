@extends('layouts.guest.app')

@section('content')
<div id="next-page" class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h1>--> I prossimi eventi <--</h1>
        </div>
        <div class="col-12">
            <div id="carouselWrapper" class="carousel slide" data-ride="carousel">
                <!-- indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carouselWrapper" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselWrapper" data-slide-to="1"></li>
                    <li data-target="#carouselWrapper" data-slide-to="2"></li>
                </ol>
                <!-- Events -->
                <div class="carousel-inner">
                    <!-- Single event -->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/1.jpeg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-uppercase">27 Maggio 18:00 --> 20:00</h5>
                            <h6 class="text-uppercase">Workshop su ambiente riuso ed economia circolare</h6>
                            <p class="text-uppercase">Piazza "Aldo Moro"</p>
                            <!-- icons -->
                            <div class="carousel-icons">
                                <a href="img/1.jpeg" alt="scarica l'evento" download><i class="fas fa-file-download"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single event -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/2.jpeg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-uppercase">29 Maggio</h5>
                            <h6 class="text-uppercase">Il sabato dell'ambiente</h6>
                            <!-- icons -->
                            <div class="carousel-icons">
                                <a href="img/2.jpeg" alt="scarica l'evento" download><i class="fas fa-file-download"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single event -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/3.jpeg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-uppercase">29 Maggio</h5>
                            <h6 class="text-uppercase">Smart School</h6>
                            <p class="text-uppercase">Fondazione Campus</p>
                            <!-- icons -->
                            <div class="carousel-icons">
                                <a href="img/3.jpeg" alt="scarica l'evento" download><i class="fas fa-file-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Prev button -->
                <a class="carousel-control-prev" href="#carouselWrapper" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <!-- Next button -->
                <a class="carousel-control-next" href="#carouselWrapper" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('third_party_scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // $('#carouselWrapper').carousel();
    });
</script>
@endsection