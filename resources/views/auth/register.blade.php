@extends('layouts.bootstrap')
@section('addToHead')<style>.register{margin-top:25px;}</style>@endsection
@section('content')

        <div class="container register">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-6">

                @if ( count ( $errors ) > 0 )
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span>Please correct the errors found below and resubmit again.</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                @if ( session()->has( 'message' ) )
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span>{{ session ('message') }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                    <div class="card">
                        <h4 class="center">Registration</h4><hr/>
                        <form id="form-parsley" method="post" action="{{ route('register') }}" enctype="application/x-www-form-urlencoded">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col">
                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                        <label for="firstname"><span class="red">*</span> First Name</label>
                                        <input type="text" id="firstname" name="firstname" class="form-control" size="40" maxlength="40" value="{{old('firstname')}}"
                                        data-parsley-trigger="change" data-parsley-maxlength="40" data-parsley-pattern="/^[a-zA-Z .-]*$/" data-parsley-required="true" />
                                    @if($errors->has('firstname'))
                                        <span class="red">{{ $errors->first('firstname') }}</span>
                                    @endif</div>
                                </div>
                                <div class="col">
                                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <label for="lastname"><span class="red">*</span> Last Name</label>
                                        <input type="text" id="lastname" name="lastname" class="form-control" size="40" maxlength="40" value="{{old('lastname')}}"
                                        data-parsley-trigger="change" data-parsley-maxlength="40" data-parsley-pattern="/^[a-zA-Z .-]*$/" data-parsley-required="true" />
                                    @if($errors->has('lastname'))
                                        <span class="red">{{ $errors->first('lastname') }}</span>
                                    @endif</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email"><span class="red">*</span> Email Address</label>
                                        <input type="text" id="email" name="email" class="form-control" size="60" maxlength="60" value="{{old('email')}}"
                                        data-parsley-trigger="change" data-parsley-maxlength="60" data-parsley-type="email" data-parsley-required="true"/>
                                    @if($errors->has('email'))
                                        <span class="red">{{ $errors->first('email') }}</span>
                                    @endif</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password"><span class="red">*</span> Password</label>
                                        <input type="password" id="password" name="password" class="form-control" size="40" maxlength="40"
                                        data-parsley-trigger="change" data-parsley-minlength="6" data-parsley-maxlength="40" data-parsley-pattern="/^[a-zA-Z0-9.-_~!@#%^&]+$/" data-parsley-required="true"/>
                                    @if($errors->has('password'))
                                        <span class="red">{{ $errors->first('password') }}</span>
                                    @endif</div>
                                </div>
                                <div class="col">
                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <label for="password_confirmation"><span class="red">*</span> Confirm Password</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" size="40" maxlength="40"
                                        data-parsley-trigger="change" data-parsley-equalto="#password" data-parsley-minlength="6" data-parsley-maxlength="40" data-parsley-pattern="/^[a-zA-Z0-9.-_~!@#%^&]+$/" data-parsley-required="true"/>
                                    @if($errors->has('password_confirmation'))
                                        <span class="red">{{ $errors->first('confPassword') }}</span>
                                    @endif</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group{{ $errors->has('question1') ? ' has-error' : '' }}">
                                        <label for="question1"><span class="red">*</span> Security Question</label>
                                        <select id="question1" name="question1" class="form-control" data-parsley-range="[1,5]" data-parsley-required="true">
                                            <option value="0"> --- Please Select --- </option>
                                            <option value="1">What was the name of your elementary school?</option>
                                            <option value="2">In what city were you born?</option>
                                            <option value="3">What is your pet name?</option>
                                            <option value="4">In what month did you get married?</option>
                                            <option value="5">What is the name of your favorite teacher?</option>
                                        </select>
                                    @if($errors->has('question1'))
                                        <span class="red">{{ $errors->first('question1') }}</span>
                                    @endif</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group{{ $errors->has('answer1') ? ' has-error' : '' }}">
                                        <label for="answer1"><span class="red">*</span> Answer</label>
                                        <input type="text" id="answer1" name="answer1" class="form-control" size="60" maxlength="60"
                                        data-parsley-trigger="change" data-parsley-maxlength="60" data-parsley-pattern="/^[a-zA-Z0-9 .-]*$/" data-parsley-required="true"/>
                                    @if($errors->has('answer1'))
                                        <span class="red">{{ $errors->first('answer1') }}</span>
                                    @endif</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group{{ $errors->has('question2') ? ' has-error' : '' }}">
                                        <label for="question2"><span class="red">*</span> Security Question</label>
                                        <select id="question2" name="question2" class="form-control" data-parsley-range="[1,5]" data-parsley-required="true">
                                            <option value="0"> --- Please Select --- </option>
                                            <option value="1">What is your favorite ice cream flavor?</option>
                                            <option value="2">In what city was your high school?</option>
                                            <option value="3">What is your mother middle name?</option>
                                            <option value="4">Who is your favorite cousin?</option>
                                            <option value="5">What is your favorite fruit?</option>
                                        </select>
                                    @if($errors->has('question2'))
                                        <span class="red">{{ $errors->first('question2') }}</span>
                                    @endif</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group{{ $errors->has('answer2') ? ' has-error' : '' }}">
                                        <label for="answer2"><span class="red">*</span> Answer</label>
                                        <input type="text" id="answer2" name="answer2" class="form-control" size="60" maxlength="60"
                                        data-parsley-trigger="change" data-parsley-maxlength="60" data-parsley-pattern="/^[a-zA-Z0-9 .-]*$/" data-parsley-required="true"/>
                                    @if($errors->has('answer2'))
                                        <span class="red">{{ $errors->first('answer2') }}</span>
                                    @endif</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
                                </div>
                                <div class="col">
                                    <div class="form-group right">
                                        <button type="submit" id="register" class="btn btn-primary">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
