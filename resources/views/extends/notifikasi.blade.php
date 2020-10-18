<div class="container">

@if(Session::has('sc_msg'))
  <div class="alert alert-success">
    {{ Session::get('sc_msg') }}
  </div>
@endif


@if(Session::has('err_msg'))
  <div class="alert alert-danger">
    @if(is_array(Session::has('err_msg')))
      @foreach(Session::get('err_msg') as $error)
        <p>{{$error}}</p>
      @endforeach
    @else
        <p>{{ Session::get('err_msg') }}</p>
    @endif
  </div>
@endif

</div>