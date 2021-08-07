@extends('layouts.guest.appWelcome')

@section('title', 'Legambiente Capannori | Posts')

@include('template.postCard')

@section('content')
<div id="posts-page-test" class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h1>--> I nostri post <--</h1>
        </div>

        <!-- Filter -->
        <div class="col-12"></div>

        <!-- Posts -->
        <div class="col-12">
            <div class="container">
                <ul id="social-posts-wrapper" class="row">
                    <li class="col-12 col-md-6 col-xl-4 d-flex justify-content-center post-item">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flegambientecapannoriepianadilucca%2Fposts%2F1933531213476776&show_text=true&width=350" width="350" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                    <li class="col-12 col-md-6 col-xl-4 d-flex justify-content-center post-item">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flegambientecapannoriepianadilucca%2Fposts%2F1924679087695322&show_text=true&width=350" width="350" height="690" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                    <li class="col-12 col-md-6 col-xl-4 d-flex justify-content-center post-item">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flegambientecapannoriepianadilucca%2Fposts%2F1903868439776387&show_text=true&width=350" width="350" height="744" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                    <li class="col-12 col-md-6 col-xl-4 d-flex justify-content-center post-item">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flegambientecapannoriepianadilucca%2Fposts%2F1901065933389971&show_text=true&width=350" width="350" height="622" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                    <li class="col-12 col-md-6 col-xl-4 d-flex justify-content-center post-item">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flegambientecapannoriepianadilucca%2Fposts%2F1899049663591598&show_text=true&width=350" width="350" height="742" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                    <li class="col-12 col-md-6 col-xl-4 d-flex justify-content-center post-item">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flegambientecapannoriepianadilucca%2Fposts%2F1898246660338565&show_text=true&width=350" width="350" height="563" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection