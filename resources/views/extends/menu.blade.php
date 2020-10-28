@guest
<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
    <li class="nav-item">
        <a href="{{ url('register') }}" class="nav-link @if ($tabmenu == 'register' ) {{ 'active' }} @else {{ '' }} @endif"><i class="fe fe-home"></i> Register</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('login') }}" class="nav-link @if ($tabmenu == 'login' ) {{ 'active' }} @else {{ '' }} @endif"><i class="fe fe-file-text"></i> Login</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('post') }}" class="nav-link @if ($tabmenu == 'all-post' ) {{ 'active' }} @else {{ '' }} @endif"><i class="fe fe-file-text"></i> All Post</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('post/email') }}" class="nav-link @if ($tabmenu == 'post-email' ) {{ 'active' }} @else {{ '' }} @endif"><i class="fe fe-file-text"></i> Post with Email</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('user/comment') }}" class="nav-link @if ($tabmenu == 'user-comment' ) {{ 'active' }} @else {{ '' }} @endif"><i class="fe fe-file-text"></i> User with Comment</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('user/comment-guest') }}" class="nav-link @if ($tabmenu == 'guest-comment' ) {{ 'active' }} @else {{ '' }} @endif"><i class="fe fe-file-text"></i> Comment with Guest</a>
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
        <a href="{{ url('post') }}" class="nav-link @if ($tabmenu == 'all-post' ) {{ 'active' }} @else {{ '' }} @endif"><i class="fe fe-file-text"></i> All Post</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('post/email') }}" class="nav-link @if ($tabmenu == 'post-email' ) {{ 'active' }} @else {{ '' }} @endif"><i class="fe fe-file-text"></i> Post with Email</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('user/comment') }}" class="nav-link @if ($tabmenu == 'user-comment' ) {{ 'active' }} @else {{ '' }} @endif"><i class="fe fe-file-text"></i> User with Comment</a>
    </li>
    <li class="nav-item">
        <a href="{{ url('user/comment-guest') }}" class="nav-link @if ($tabmenu == 'guest-comment' ) {{ 'active' }} @else {{ '' }} @endif"><i class="fe fe-file-text"></i> Comment with Guest</a>
    </li>
</ul>
@endguest