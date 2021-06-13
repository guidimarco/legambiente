<script id="post-card-template" type="text/x-handlebars-template">
<li class="col-12 col-sm-6 col-md-4 col-xl-3">
    <div id="post-@{{ id }}" href="#@{{ slug }}" class="post-card" style="background-image: url('@{{ cover }}');">
        <!-- Img Carousel -->
        <div id="carouselContainer" class="container">
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
                            <span class="text-uppercase primary-badge mb-2">27 Maggio 18:00 --> 20:00</span>
                            <h6 class="title text-uppercase">Workshop su ambiente riuso ed economia circolare</h6>
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
                    </div>
                    <!-- Single event -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/3.jpeg" alt="Third slide">
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

        <!-- Card Info -->
        <div class="container post-card-info">
            <!-- Buttons display when card is active -->
            <div class="active-card-buttons">
                <i class="fas fa-undo-alt primary-buttons"></i>
                <i class="fas fa-arrow-circle-down primary-buttons arrow-class"></i>
            </div>

            <div class="post-card-top">
                <div class="tags">@{{{ tags }}}</div>
                <div class="date sub-title">@{{ created_at }}</div>
            </div>

            <div class="post-card-header">
                <h6 class="title">
                    @{{ title }}
                </h6>

                <p class="author sub-title">
                    Autore: @{{ author }}                   
                </p>
            </div>

            <div class="post-card-body">
                @{{ body }}
            </div>
        </div>
    </div>
</li>
</script>