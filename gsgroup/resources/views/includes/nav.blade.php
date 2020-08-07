<nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="smart">
    <div class="container">

        <div class="navbar-left mr-4">
        <button class="navbar-toggler" type="button">&#9776;</button>
        <a class="navbar-brand" href="#">
            <h4 class="text-white">Gs Group</h4>
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
                <a class="btn btn-sm btn-success ml-5" href="/login">Login </a>
            </div>
        @else 
            <div class="d-stick-block"> 
                <a class="btn btn-sm btn-success" href="/user-dashboard">Dashboard</a>
            </div>
        @endguest
        </section>
    </div>
</nav>  