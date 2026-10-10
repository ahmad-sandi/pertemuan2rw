<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            UNPAM - Web Profile
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/profile') }}" class="nav-link">
                        Profile
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/about') }}" class="nav-link">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/project') }}" class="nav-link">
                        project
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>