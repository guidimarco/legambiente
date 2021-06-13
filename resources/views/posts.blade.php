@extends('layouts.guest.app')

@section('title', 'Legambiente Capannori | Posts')

@include('template.postCard')

@section('content')
<div id="posts-page" class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h1>--> I nostri post <--</h1>
        </div>

        <!-- Filter -->
        <div class="col-12"></div>

        <!-- Posts -->
        <div class="col-12">
            <div class="container-fluid">
                <ul id="posts-wrapper" class="row"></ul>
            </div>
        </div>
    </div>
</div>
@endsection