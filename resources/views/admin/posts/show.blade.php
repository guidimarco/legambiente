@extends('layouts.admin.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Posts</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Posts</a></li>
                    <li class="breadcrumb-item">{{ $post->title }}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="@if (isset($post->img)) col-6 @else col-12 @endif">
            <div class="card card-primary">
                <div class="card-header bg-light">
                    <h3 class="card-title">Post info</h3>
                </div><!-- /.card-header -->

                <!-- start -->
                <div class="card-body">
                    <!-- Title -->
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" class="form-control" name="title" value="{{ $post->title }}" readonly>
                    </div>

                    <!-- Body -->
                    <div class="form-group">
                        <label for="body">Articolo</label>
                        <textarea id="body" class="form-control" rows="4" name="body" readonly>{{ $post->body }}</textarea>
                    </div>

                    <!-- Creato il -->
                    <p class="">L'articolo è stato creato il {{ $post->created_at }}</p>
                </div><!-- /.card-body -->
            </div>
        </div>
        @if (isset($post->img))
        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header bg-light">
                    <h3 class="card-title">Foto</h3>
                </div><!-- /.card-header -->

                <!-- start -->
                <div class="card-body">
                    <img class="w-100" src="<?= asset("storage/$post->img") ?>" alt="foto del post {{ $post->title }}">
                </div><!-- /.card-body -->
            </div>
        </div>
        @endif  
    </div>
</section><!-- /.content -->
@endsection