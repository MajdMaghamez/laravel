    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.company') }}</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}"><i class="fas fa-home" aria-hidden="true"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('reports')}}"><i class="fas fa-chart-bar" aria-hidden="true"></i> Reports</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('statistics')}}"><i class="fas fa-chart-line" aria-hidden="true"></i> Statistics</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('help')}}"><i class="far fa-question-circle" aria-hidden="true"></i> Help</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('account')}}" data-toggle="dropdown" id="userAccount" role="button" aria-haspopup="true" aria-expanded="false"> majd</a>
                        <div class="dropdown-menu" aria-labelledby="userAccount">
                            <a class="dropdown-item" href="{{route('devTools')}}"><i class="fas fa-magic" aria-hidden="true"></i> Developer Tools</a>
                            <a class="dropdown-item" href="{{route('account')}}"><i class="far fa-user-circle" aria-hidden="true"></i> My Account</a>
                            <a class="dropdown-item" href="{{route('messages')}}"><i class="far fa-envelope" aria-hidden="true"></i> My Messages</a>
                            <a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Logout</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link" onclick="window.location.reload()"
                           data-toggle="tooltip" data-placement="bottom"
                           title="for security purposes your session will expire when this time is up, you may click here to reinitialize the time."><span id="countdown"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>