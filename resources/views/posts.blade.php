@extends('layouts.guest.app')

@section('content')
<div id="posts-page" class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h1>--> I nostri post <--</h1>
        </div>

        <!-- Filter -->
        <div class="col-12">
            Qui filtro tutto
        </div>

        <!-- Posts -->
        <div class="col-12">
            <div class="container-fluid">
                <div class="row">
                    <div id="posts-wrapper">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection