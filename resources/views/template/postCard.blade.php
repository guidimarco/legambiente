<script id="post-card-template" type="text/x-handlebars-template">
<li class="col-12 col-sm-6 col-md-4 col-xl-3">
    <div id="slug-@{{ slug }}" class="post-card" style="background-image: url('@{{ images.[0] }}');">
        @{{#if are_images}}
        <!-- Img Carousel -->
        <div id="carouselContainer" class="container">
            <div id="carouselWrapper" class="carousel slide" data-ride="carousel">
                <!-- Events -->
                <div class="carousel-inner">
                    @{{#each images}}
                        <div class="carousel-item @{{#if index}}active@{{/if}}">
                            <img class="d-block w-100" src="@{{this}}">
                        </div>
                    @{{/each}}
                </div>
                @{{#if are_more_imgs}}
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
                @{{/if}}
            </div>
        </div>
        @{{/if}}

        <!-- Card Info -->
        <div class="container post-card-info">
            <!-- Buttons display when card is active -->
            <div class="active-card-buttons">
                <i class="fas fa-undo-alt primary-buttons tooltip-ref">
                    <span class="tooltip-text text-uppercase">Torna indietro</span>
                </i>
                @{{#if are_images}}
                <i class="fas fa-arrow-circle-down primary-buttons arrow-class tooltip-ref">
                    <span class="tooltip-text text-uppercase">Guarda le foto</span>
                </i>
                @{{/if}}
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
                    @{{#if author}}
                        Autore: @{{ author }}
                    @{{else}}
                        Autore: &#129335;
                    @{{/if}}
                </p>
            </div>

            <div class="post-card-body">
                <p><pre>@{{ body }}</pre></p>
            </div>
        </div>
    </div>
</li>
</script>