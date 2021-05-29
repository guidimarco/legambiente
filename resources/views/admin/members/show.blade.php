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

<div class="container-fluid">

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="btn-group">
                <a href="{{ route('admin.member.index') }}" class="btn btn-outline-primary">
                    Members
                </a>
                <a href="{{ route('admin.member.edit', ['member' => $member->id]) }}" class="btn btn-outline-secondary">
                    Modifica
                </a>
                <a href="{{ route('admin.member.destroy', ['member' => $member->id]) }}" id="link-delete-" class="btn btn-outline-danger">
                    Elimina
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <ul>
                <li>
                    id: {{ $member->id }}
                </li>
                <li>
                    name: {{ $member->name }}
                </li>
                <li>
                    cognome: {{ $member->surname }}
                </li>
                <li>
                    ruolo: {{ $member->role }}
                </li>
                <li>
                    descrizione: {{ $member->description }}
                </li>
                <li>
                    ruolo: {{ $member->role }}
                </li>
                <li>
                    visibile: {{ $member->visible }}
                </li>
                <li>
                    img:
                    <img src="{{ asset("storage/$member->img") }}" alt="immagine">
                </li>
            </ul>
        </div>
    </div>


</div>
@endsection