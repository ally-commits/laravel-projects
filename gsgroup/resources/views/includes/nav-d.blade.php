<nav class="navbar navbar-expand-lg navbar-dark navbar-stick-dark shadow-sm" data-navbar="smart">
    <div class="container">

        <div class="navbar-left mr-4">
        <button class="navbar-toggler" type="button">&#9776;</button>
        <a class="navbar-brand" href="#">
        <h4>Gs Group</h4>
        </a>
        </div>

        <section class="navbar-mobile">
        <nav class="nav nav-navbar mr-auto">
            <a class="nav-link active" href="/">Home</a> 
            <a class="nav-link" href="/job-registration">Job Registration</a>
            <a class="nav-link" href="/event-registration">Event Registration</a>
            <a class="nav-link" href="#">Contact</a>
        </nav> 
        @guest
            <div class="d-stick-block"> 
                <a class="btn btn-sm btn-primary" href="/register">Register Now</a>
            </div>
            <div class="d-stick-block"> 
                <a class="btn btn-sm btn-success ml-5" href="/login">Login</a>
            </div>
        @else

            <a href="user-dashboard" class="btn mr-5 btn-success">Dashboard</a>
            <div class="nav-item dropdown p-0 m-0">
                <p id="navbarDropdown" style="font-size: 15px;font-weight: bold; color:#333;" class="dropdown-toggle p-0 m-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </p>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" style="color: #333;"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        @endguest
        </section>

    </div>
</nav>  