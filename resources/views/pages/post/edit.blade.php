
@extends('layouts.template')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">
        Post
        </h1>
    </div>
   
    <div class="row row-cards row-deck">

        <div class="col-12">
            <form action="{{ route('update-post', $data->id) }}" method="post" class="card">
                {{ csrf_field() }}
                <div class="card-header">
                <h3 class="card-title">Form Edit Post</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $data->title }}">
                                @if ( $errors->has('title') )
                                    <div class="text-right text-red"> {{ $errors->first('title') }} </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Slug</label>
                                <input type="text" class="form-control" name="slug" placeholder="Slug" value="{{ $data->slug }}">
                                @if ( $errors->has('slug') )
                                    <div class="text-right text-red"> {{ $errors->first('slug') }} </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">Content</label>
                                <textarea rows="10" class="form-control" name="content">{{ $data->content }}</textarea>
                                <!-- <input type="text" class="form-control" name="email" placeholder="Email"> -->
                                @if ( $errors->has('content') )
                                    <div class="text-right text-red"> {{ $errors->first('content') }} </div>
                                @endif
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <div class="d-flex">
                        <a href="{{ url('post-user') }}" class="btn btn-link">Cancel</a>
                        <button type="submit" class="btn btn-primary ml-auto">Edit data</button>
                    </div>
                </div>
            
            </form>
            <script>
            
            </script>
        </div>

    </div>
</div>
@endsection
