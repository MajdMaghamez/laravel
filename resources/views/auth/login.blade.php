@extends('layouts.bootstrap')
@section('addToHead')<style>.login{margin-top:50px;}</style>@endsection
@section('content')

        <div class="container login">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <h4 class="center">{{config('app.company')}}</h4><hr/>
                        <form id="form-parsley" method="post" action="{{ route('login') }}" enctype="application/x-www-form-urlencoded">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email"><i class="fas fa-envelope"></i> Email Address</label>
                                        <input type="text" id="email" name="email" size="60" maxlength="60" placeholder="" value="{{old('email')}}" class="form-control"
                                        data-parsley-tigger="change" data-parsley-maxlength="60" data-parsley-type="email" data-parsley-required="true" />
                                    @if($errors->has('email'))
                                        <span class="red">{{ $errors->first('email') }}</span>
                                    @endif</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password"><i class="fas fa-key"></i> Password</label>
                                        <input type="password" id="password" name="password" size="40" maxlength="40" placeholder="" class="form-control"
                                        data-parsley-trigger="change" data-parsley-maxlength="40" data-parsley-pattern="/^[a-zA-Z0-9.-_~!@#%^&]+$/" data-parsley-required="true" />
                                    @if( $errors->has('password'))
                                        <span class="red">{{ $errors->first('password') }}</span>
                                    @endif</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group username">
                                        <input type="text" id="username" name="username" size="40" maxlength="40" placeholder="" value="" class="form-control"
                                        data-parsley-trigger="change" data-parsley-maxlength="40" data-parsley-pattern="/^[a-zA-Z0-9 .-]*$/" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <a class="card-link" href="{{ route('password.request') }}">Having trouble logging in?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <button type="submit" id="login" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group right">
                                        <a class="btn btn-outline-primary" href="{{'register'}}">Register</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection