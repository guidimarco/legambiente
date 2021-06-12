<script id="post-card-template" type="text/x-handlebars-template">
<li class="col-12 col-sm-6 col-md-4 col-xl-3">
    <a id="post-@{{ id }}" href="#@{{ slug }}" class="post-card" style="background-image: url('@{{ cover }}');">
        <div class="post-card-info">
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
    </a>
</li>
</script>