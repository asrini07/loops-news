@extends('layouts.template')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">
        User with Comment
        </h1>
    </div>
    
    <div class="row row-cards row-deck">
        <div class="col-lg-12">
            <div class="card">
                <ul class="list-group card-list-group">
                    @foreach($data as $data)
                    <li class="list-group-item py-5">
                        <div class="media">
                            <div class="media-object avatar avatar-md mr-4" style="background-image: url(img/usr_avatar.png)"></div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <small class="float-right text-muted">{{ $data->created_at}}</small>
                                    <h5>{{ $data->name }}</h5>
                                </div>
                                <div>{{ $data->comment }}</div>
                                
                            </div>
                        </div>
                    </li>
                    @endforeach
                    
                </ul>
            </div>
        </div>

    </div>
</div>
@endsection