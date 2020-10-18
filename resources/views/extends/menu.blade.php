@guest
<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
    <li class="nav-item">
        <a href="{{ url('register') }}" class="nav-link active"><i class="fe fe-home"></i> Register</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('login') }}" class="nav-link active"><i class="fe fe-file-text"></i> Login</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('post') }}" class="nav-link active"><i class="fe fe-file-text"></i> Post</a>
    </li>
</ul>
@else
<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
    <li class="nav-item">
        <a href="{{ url('/home') }}" class="nav-link @if ($tabmenu == 'dashboard' ) {{ 'active' }} @else {{ '' }} @endif"><i class="fe fe-home"></i> Dashboard</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('/post-user') }}" class="nav-link @if ($tabmenu == 'post-user' ) {{ 'active' }} @else {{ '' }} @endif"><i class="fe fe-file-text"></i>My Post</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('post') }}" class="nav-link @if ($tabmenu == 'post' ) {{ 'active' }} @else {{ '' }} @endif"><i class="fe fe-file-text"></i> Post</a>
    </li>
</ul>
@endguest