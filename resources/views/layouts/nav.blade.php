<nav>
    <ul class="nav nav-justified">
        <li><a href="/">Home</a></li>

        @if(Sentinel::check())
            <li>
                <form action="/logout" method="POST" id="logout-form">
                    {{ csrf_field() }}
                    <a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
                </form>
            </li>
        @else 
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
        @endif

    </ul>
</nav>