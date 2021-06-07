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
                    <li class="breadcrumb-item">Crea nuovo post</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header bg-light">
                    <h3 class="card-title">Crea nuovo post</h3>
                </div><!-- /.card-header -->

                <!-- form start -->
                <form method="POST" action="{{ route('admin.post.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        @if ($errors -> any())
                            <div class="callout callout-danger">
                                <h5>Attenzione!</h5>

                                <ul>
                                    @foreach ($errors -> all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Title -->
                        <div class="form-group">
                            <label for="title">Titolo</label>
                            <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Inserisci il titolo" value="{{ old('title') }}" required>
                        </div>

                        <!-- Body -->
                        <div class="form-group">
                            <label for="body">Articolo</label>
                            <textarea id="body" class="form-control" rows="4" name="body" placeholder="Inserisci il corpo dell'articolo" required>{{ old('body') }}</textarea>
                        </div>

                        <!-- Author -->
                        <div class="form-group">
                            <label for="member_id">Autore</label>
                            <select id="member_id" class="form-control @error('member_id') is-invalid @enderror" name="member_id">
                                <option value="">Seleziona l'autore</option>
                                @foreach ($members as $member)
                                    <option value="{{ $member->id }}"
                                        {{ old('author') == $member->id ? 'selected' : ''}}>
                                        {{ $member->name . " " . $member->surname }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Tags -->
                        <div class="form-group">
                            <label>Tags</label>
                            @foreach ($tags as $tag)
                                <div class="form-check">
                                    <input name="tags[]" class="form-check-input @error('tags[]') is-invalid @enderror" type="checkbox" value="{{ $tag->id }}">
                                    <label class="form-check-label">
                                        {{ $tag->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                        <!-- Imgs -->
                        <div class="form-group">
                            <label>Inserisci le immagini</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('imgs') is-invalid @enderror" id="postImgs1" name="imgs[]" multiple>
                                    <label class="custom-file-label" for="postImgs1" id="labelPostImgs"></label>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('imgs') is-invalid @enderror" id="postImgs2" name="imgs[]" multiple>
                                    <label class="custom-file-label" for="postImgs2" id="labelPostImgs"></label>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('imgs') is-invalid @enderror" id="postImgs3" name="imgs[]" multiple>
                                    <label class="custom-file-label" for="postImgs3" id="labelPostImgs"></label>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!-- /.content -->
@endsection