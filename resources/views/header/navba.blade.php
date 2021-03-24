<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color:#00004d;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="home-page">
            <img src="logo-web.png" style="width: 155px; height: 35px">
        </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" id="nav-link" href="home-page">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="nav-link"  href="about-us">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="nav-link" href="contact-us">Contact</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" id="nav-link" href="login">Login</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" id="nav-link" href="documents">Document</a>

            </li>
            @include('header.menu')
        </ul>
    </div>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>