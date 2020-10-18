@extends('layouts.template')

@section('content')

<div class="container">

    <div class="page-header">
        <h1 class="page-title"> Register </h1>
    </div>
    
    <div class="row row-cards row-deck">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    Selamat Datang, <b>{{ Auth::user()->name }}</b>
                </div>
            </div>
        </div>
    </div>
          
</div>

@endsection