@extends('layouts.dashboard')

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
                    <li class="breadcrumb-item">Membri</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid">

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <a href="{{ route('admin.member.create') }}" class="btn btn-primary my-2">
                Crea un nuovo membro
            </a>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>

    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tutti i membri</h3>
                </div><!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Cognome</th>
                                <th>Ruolo</th>
                                <th>Visibile</th>
                                <th>Azioni</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($members as $member)
                                <tr>
                                    <th>{{ $member->id }}</th>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->surname }}</td>
                                    <td>{{ $member->role }}</td>
                                    <td>{{ $member->visible }}</td>
                                    <td class="w-25">
                                        <div class="btn-group">
                                            <a href="{{ route('admin.member.show', ['member' => $member->id]) }}" class="btn btn-sm btn-outline-info">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                            <a href="{{ route('admin.member.edit', ['member' => $member->id]) }}" class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" id="link-delete-" class="btn btn-sm btn-outline-danger">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                        

                                        <form class="d-none" id="form-delete-" action="#" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" name="button" class="btn btn-outline-danger">Elimina</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
            </div><!-- /.card -->
        </div><!-- /.col-12 -->
    </div><!-- /.row -->
</div>
@endsection