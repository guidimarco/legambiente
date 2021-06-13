@extends('layouts.admin.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Event</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.event.index') }}">Events</a></li>
                    <li class="breadcrumb-item">Crea nuovo evento</li>
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
                    <h3 class="card-title">Crea nuovo evento</h3>
                </div><!-- /.card-header -->

                <!-- form start -->
                <form method="POST" action="{{ route('admin.event.store') }}" enctype="multipart/form-data">
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

                        <!-- Location -->
                        <div class="form-group">
                            <label for="location">Titolo</label>
                            <input type="text" id="location" class="form-control @error('location') is-invalid @enderror" name="location" placeholder="Inserisci il luogo" value="{{ old('location') }}" required>
                        </div>

                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">
                            <label for="date" class="col-form-label">Date</label>
                            <input type="date" id="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required>
                        </div>

                        <!-- Img -->
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input  @error('cover') is-invalid @enderror" id="eventCover" name="cover">
                                <label class="custom-file-label" for="eventCover" id="labelEventCover">Inserisci la locandina</label>
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