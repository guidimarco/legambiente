<script id="post-card-template" type="text/x-handlebars-template">
<li class="col-12 col-sm-6 col-md-4 col-xl-3">
    <a href="" class="post-card" style="background-image: url('https://picsum.photos/id/237/200/300');">
        <div class="post-card-info">
            <div class="post-card-top">
                <div class="tags text-uppercase">@{{{ tags }}}</div>
                <div class="date text-uppercase">@{{ created_at }}</div>
            </div>

            <div class="post-card-header">
                <h6 class="title text-uppercase">
                    @{{ title }}
                </h6>

                <p class="author text-uppercase">
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