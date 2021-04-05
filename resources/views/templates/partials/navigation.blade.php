<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if (Auth::check())
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Friends</a>
                </li>
                <form method="GET" action="{{route('search.results')}}" class="form-inline my-2 my-lg-0 ml-2">
                    <input name="query" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </ul>
            @endif
            <ul class="navbar-nav ml-auto">
                @if (Auth::check())
                    <li class="nav-item">
                        <a href="{{route('profile.index', ['username' => Auth::user()->username])}}"
                           class="nav-link">{{Auth::user()->getNameOrUsername()}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('profile.edit')}}" class="nav-link">Edit profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('auth.signout')}}" class="nav-link">Logout</a>
                    </li>

                @else
                    <li class="nav-item"><a href="{{route('auth.signup')}}" class="nav-link active">Sign up</a></li>
                    <li class="nav-item"><a href="{{route('auth.signin')}}" class="nav-link active">Sign in</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
