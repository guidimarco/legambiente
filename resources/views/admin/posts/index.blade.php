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
                    <li class="breadcrumb-item">Posts</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="container-fluid">

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible" style="position: fixed; z-index: 1; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('admin.post.create') }}" class="btn btn-primary my-2">
                Crea un nuovo post
            </a>
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
                                <th>Titolo</th>
                                <th>Testo</th>
                                <th>Autore</th>
                                <th>Creato</th>
                                <th>Azioni</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <th>{{ $post->id }}</th>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->body }}</td>
                                    <td>{{ $post->member }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.post.show', ['post' => $post->id]) }}" class="btn btn-sm btn-outline-info">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                            <a href="{{ route('admin.post.edit', ['post' => $post->id]) }}" class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="#" id="link-delete-{{ $post->id }}" class="btn btn-sm btn-outline-danger">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                        

                                        <form class="d-none" id="form-delete-{{ $post->id }}" action="{{ route('admin.post.destroy', ['post' => $post->id]) }}" method="POST">
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