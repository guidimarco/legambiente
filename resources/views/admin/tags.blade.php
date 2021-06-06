@extends('layouts.admin.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tags</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Posts</a></li>
                    <li class="breadcrumb-item">Tags</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid">
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Crea un nuovo tag</h3>
                </div><!-- /.card-header -->

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible" style="position: fixed; z-index: 1; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Alert!</h5>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card-body table-responsive p-0">
                    <!-- form start -->
                    <form method="POST" action="{{ route('admin.tags.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            @if ($errors->any())
                                <div class="callout callout-danger">
                                    <h5>Attenzione!</h5>

                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Tag -->
                            <div class="input-group">
                                <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Inserisci il nome del tag" value="{{ old('name') }}" required>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </form>
                </div><!-- /.card-body -->
            </div><!-- /.card -->
        </div><!-- /.col-12 -->
    </div><!-- /.row -->

    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tutti i tags</h3>
                </div><!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Creato</th>
                                <th>Azioni</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <th>{{ $tag->id }}</th>
                                    <td>{{ $tag->name }}</td>
                                    <td>{{ $tag->created_at }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.tags.edit', ['tag' => $tag->id]) }}" class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" id="link-delete-{{ $tag->id }}" class="btn btn-sm btn-outline-danger">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                        

                                        <form class="d-none" id="form-delete-{{ $tag->id }}" action="{{ route('admin.tags.destroy', ['tag' => $tag->id]) }}" method="POST">
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