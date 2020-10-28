@extends('layouts.template')

@section('content')

<div class="container">
    <div class="page-header">
        <h1 class="page-title">
        Post with Email and Name
        </h1>
    </div>
    
    <div class="row row-cards row-deck">

        @foreach($data as $data)
            <div class="col-lg-4">
                <div class="card">
                  <div class="card-body d-flex flex-column">
                    <h4><a href="{{ route('post-detail', $data->slug) }}">{{ $data->title }}</a></h4>
                    <div class="text-muted">{{ substr($data->content, 0, 100) }}...</div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                      <div class="avatar avatar-md mr-3" style="background-image: url(./img/usr_avatar.png)"></div>
                      <div>
                        <a href="#" class="text-default">{{ $data->name }}</a>
                        <small class="d-block text-muted">{{ $data->email }}</small>
                      </div>
                      <div class="ml-auto text-muted">
                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-message-circle mr-1"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        @endforeach


    </div>
</div>


@endsection