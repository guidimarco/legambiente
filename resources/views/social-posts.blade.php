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
            <div class="container-fluid">
                <ul id="social-posts-wrapper" class="row">
                    <li class="col-12 col-xl-6 d-flex justify-content-center">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2F260978564065391%2Fposts%2F1933531213476776%2F&width=552&show_text=true&appId=510527803351966&height=755" width="552" height="755" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                    <li class="col-12 col-xl-6 d-flex justify-content-center">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2F260978564065391%2Fposts%2F1933531213476776%2F&width=552&show_text=true&appId=510527803351966&height=755" width="552" height="755" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                    <li class="col-12 col-xl-6 d-flex justify-content-center">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2F260978564065391%2Fposts%2F1933531213476776%2F&width=552&show_text=true&appId=510527803351966&height=755" width="552" height="755" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                    <li class="col-12 col-xl-6 d-flex justify-content-center">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2F260978564065391%2Fposts%2F1933531213476776%2F&width=552&show_text=true&appId=510527803351966&height=755" width="552" height="755" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection