<header>
    <nav>
        <a class="logo" href="{{route('posts.index')}}"><img src="http://via.placeholder.com/100x100"></a>
        <a href="{{route('posts.index')}}">Home</a>
        <a href=" {{route('other.about')}}">About</a>
        <a href="">Admin</a>


        @if (Auth::guest())
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @else
            <a href="">Profile</a>
            <a href="{{route('posts.create')}}">New Post</a>

            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @endif
    </nav>
</header>