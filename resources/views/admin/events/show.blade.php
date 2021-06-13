@extends('layouts.admin.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Events</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.event.index') }}">Events</a></li>
                    <li class="breadcrumb-item">{{ $event->title }}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class ="col-6">
            <div class="card card-primary">
                <div class="card-header bg-light">
                    <h3 class="card-title">Event info</h3>
                </div><!-- /.card-header -->

                <!-- start -->
                <div class="card-body">
                    <!-- Title -->
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" class="form-control" name="title" value="{{ $event->title }}" readonly>
                    </div>

                    <!-- Location -->
                    <div class="form-group">
                        <label for="location">Titolo</label>
                        <input type="text" id="location" class="form-control" name="location" value="{{ $event->title }}" readonly>
                    </div>

                    <!-- Date dd/mm/yyyy -->
                    <div class="form-group">
                        <label for="date" class="col-form-label">Date</label>
                        <input type="date" id="date" class="form-control" name="date" value="{{ $event->date }}" readonly>
                    </div>
                </div><!-- /.card-body -->
            </div>
        </div>

        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header bg-light">
                    <h3 class="card-title">Locandina</h3>
                </div><!-- /.card-header -->

                <!-- start -->
                <div class="card-body">
                    <img class="w-100" src="<?= asset("storage/$event->cover") ?>" alt="foto dell'evento {{ $event->title }}">
                </div><!-- /.card-body -->
            </div>
        </div>
    </div>
</section><!-- /.content -->
@endsection