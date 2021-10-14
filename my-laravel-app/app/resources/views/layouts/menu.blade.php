<li class="nav-item">
    <a href="{{ route('posts.index') }}"
       class="nav-link {{ Request::is('posts*') ? 'active' : '' }}">
        <p>Posts</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('qiita.index') }}"
       class="nav-link {{ Request::is('qiita*') ? 'active' : '' }}">
        <p>Qiita</p>
    </a>
</li>
@if (Auth::user()->role_id ==2)
<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>User Admin</p>
    </a>
</li>
@endif

{{--
<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li> --}}


