<script id="post-card-template" type="text/x-handlebars-template">
<li class="col-3">
    <a href="" class="post-card" style="background-image: url('https://picsum.photos/id/237/200/300');">
        <div class="post-card-info">
            <div class="post-card-top">
                <div class="tags">@{{ tags }}</div>
                <div class="date">@{{ created_at }}</div>
            </div>

            <div class="post-card-header">
                <div class="title">@{{ title }}</div>

                <div class="author">@{{ author }}</div>
            </div>

            <div class="post-card-body">
                @{{ body }}
            </div>
        </div>
    </a>
</li>
</script>