@extends('layouts.bootstrap')
@section('addToHead')<style>.reset{margin-top:25px;}</style>@endsection
@section('content')
<div class="container reset">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="card">
                <h4 class="center">Password Reset</h4><hr/>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form id="form-parsley" class="form-horizontal" method="POST" action="{{ route('password.email') }}" enctype="application/x-www-form-urlencoded">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email"><i class="fas fa-envelope"></i> Email Address</label>
                                    <input id="email" type="text" class="form-control" name="email" size="60" maxlength="60" value="{{ old('email') }}"
                                    data-parsley-trigger="change" data-parsley-maxlength="60" data-parsley-type="email" data-parsley-required="true">
                                @if ($errors->has('email'))
                                    <span class="red"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="{{route('login')}}" class="btn btn-outline-primary">Login</a>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary right">Send Password Reset Link</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
