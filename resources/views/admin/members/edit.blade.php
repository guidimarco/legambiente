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
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header bg-light">
                    <h3 class="card-title">Modifica</h3>
                </div><!-- /.card-header -->

                <!-- form start -->
                <form method="POST" action="{{ route('admin.member.update', ['member' => $member->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

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

                        <!-- Name -->
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Inserisci il nome" value="{{ old('name', $member->name) }}">
                        </div>

                        <!-- Surname -->
                        <div class="form-group">
                            <label for="surname">Cognome</label>
                            <input type="text" id="surname" class="form-control @error('surname') is-invalid @enderror" name="surname" placeholder="Inserisci il cognome" value="{{ old('surname', $member->surname) }}">
                        </div>

                        <!-- Mail -->
                        <div class="form-group">
                            <label for="mail">Mail</label>
                            <input type="text" id="mail" class="form-control @error('mail') is-invalid @enderror" name="mail" placeholder="Inserisci la mail" value="{{ old('mail', $member->mail) }}">
                        </div>

                        <!-- Role -->
                        <div class="form-group">
                            <label for="role">Ruolo</label>
                            <input type="text" id="role" class="form-control @error('role') is-invalid @enderror" name="role" placeholder="Inserisci il ruolo" value="{{ old('role', $member->role) }}">
                        </div>

                        <!-- Description -->
                        <div class="form-group">
                            <label for="description">Descrizione</label>
                            <textarea id="description" class="form-control" rows="4" name="description" placeholder="Inserisci una breve descrizione">{{ old('description', $member->description) }}</textarea>
                        </div>

                        <!-- Visible -->
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="visible" name="visible" value="{{ old('visible', $member->visible) }}">
                                <label class="custom-control-label" for="visible">Rendi visibile sul sito</label>
                            </div>
                        </div>

                        <!-- Img -->
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input  @error('img') is-invalid @enderror" id="memberImg" name="img">
                                <label class="custom-file-label" for="memberImg" id="labelMemberImg"></label>
                            </div>
                        </div>
                    </div><!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Conferma le modifiche</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!-- /.content -->
@endsection