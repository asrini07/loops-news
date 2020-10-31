@extends('layouts.template')

@section('content')

<div class="container">
    <div class="page-header">
        <h1 class="page-title">
        {{ $data->title }}
        </h1>
    </div>
    
    <div class="row row-cards row-deck">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <div class="text-wrap p-lg-6">
                        <h2 class="mt-0 mb-4">{{ $data->title }}</h2>
                        <p>{{ $data->content }}</p>
                        <h3 id="setup-environment">Comment</h3>
                        <form action="{{ route('store-comment', $data->slug) }}" method="post" class="card">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Name">
                                            @if ( $errors->has('name') )
                                                <div class="text-right text-red"> {{ $errors->first('name') }} </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Email">
                                            @if ( $errors->has('email') )
                                                <div class="text-right text-red"> {{ $errors->first('email') }} </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Website</label>
                                            <input type="text" class="form-control" name="website" placeholder="Website">
                                            @if ( $errors->has('website') )
                                                <div class="text-right text-red"> {{ $errors->first('website') }} </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Comment</label>
                                            <textarea rows="10" class="form-control" name="comment"></textarea>
                                            @if ( $errors->has('comment') )
                                                <div class="text-right text-red"> {{ $errors->first('comment') }} </div>
                                            @endif
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <button type="submit" class="btn btn-primary ml-auto">Save data</button>
                                </div>
                            </div>
                        </form>   

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection