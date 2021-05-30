@extends('layouts.admin.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Membri</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.member.index') }}">Membri</a></li>
                    <li class="breadcrumb-item">{{ $member->name }} {{ $member->surname }}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="@if (isset($member->img)) col-6 @else col-12 @endif">
            <div class="card card-primary">
                <div class="card-header bg-light">
                    <h3 class="card-title">Info membro</h3>
                </div><!-- /.card-header -->

                <!-- start -->
                <div class="card-body">
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" id="name" class="form-control" name="name" value="{{ $member->name }}" readonly>
                    </div>

                    <!-- Surname -->
                    <div class="form-group">
                        <label for="surname">Cognome</label>
                        <input type="text" id="surname" class="form-control" name="surname" value="{{ $member->surname }}" readonly>
                    </div>

                    <!-- Mail -->
                    <div class="form-group">
                        <label for="mail">Mail</label>
                        <input type="text" id="mail" class="form-control" name="mail" value="{{ $member->mail }}" readonly>
                    </div>

                    <!-- Role -->
                    <div class="form-group">
                        <label for="role">Ruolo</label>
                        <input type="text" id="role" class="form-control" name="role" value="{{ $member->role }}" readonly>
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="description">Descrizione</label>
                        <textarea id="description" class="form-control" rows="4" name="description" readonly>{{ $member->description }}</textarea>
                    </div>

                    <!-- Visible -->
                    @if ($member->visible === 1)
                    <p class="">Il profilo è sul sito</p>
                    @else
                    <p class="">Il profilo non è sul sito</p>
                    @endif
                </div><!-- /.card-body -->
            </div>
        </div>
        @if (isset($member->img))
        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header bg-light">
                    <h3 class="card-title">Foto</h3>
                </div><!-- /.card-header -->

                <!-- start -->
                <div class="card-body">
                    <img class="w-100" src="<?= asset("storage/$member->img") ?>" alt="foto membro {{ $member->name }} {{ $member->surname }}">
                </div><!-- /.card-body -->
            </div>
        </div>
        @endif  
    </div>
</section><!-- /.content -->
@endsection