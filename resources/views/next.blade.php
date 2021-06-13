@extends('layouts.guest.app')

@section('title', 'Legambiente Capannori | Next')

@section('content')
<div id="next-page" class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h1><span class="d-none d-sm-inline-block">-->&nbsp;</span>I prossimi eventi<span class="d-none d-sm-inline-block">&nbsp;<--</span></h1>
        </div>
        <div class="col-12">
            <div id="carouselContainer">
                <div id="carouselWrapper" class="carousel slide" data-ride="carousel">
                    @if ($nextEvents->count() !== 1)
                    <!-- indicators -->
                    <ol class="carousel-indicators">
                        @foreach ($nextEvents as $nextEvent)
                        <li data-target="#carouselWrapper" data-slide-to="{{ $loop->index }}" class="{{ ($loop->index === 0) ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    @endif

                    <!-- Events -->
                    <div class="carousel-inner">
                        @foreach ($nextEvents as $nextEvent)
                        <div class="carousel-item {{ ($loop->index === 0) ? 'active' : '' }}">
                            <img class="d-block w-100" src="storage/{{ $nextEvent->cover }}" alt="{{ $nextEvent->title }}">
                            <div class="carousel-caption d-none d-md-block">
                                <span class="text-uppercase primary-badge mb-2">{{ date('d/m', strtotime($nextEvent->date)) }}</span>
                                <h6 class="title text-uppercase">{{ $nextEvent->title }}</h6>
                                <p class="text-uppercase">{{ $nextEvent->location }}</p>
                                <!-- icons -->
                                <div class="carousel-icons">
                                    <a href="storage/{{ $nextEvent->cover }}" alt="scarica l'evento" download><i class="fas fa-file-download"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    @if ($nextEvents->count() !== 1)
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection