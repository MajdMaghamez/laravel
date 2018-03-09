<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\AppMailer\PostMan;
use Illuminate\Http\request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view ('auth.register');
    }

    /**
     * @param Request $request
     * @param PostMan $postMan
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(Request $request, PostMan $postMan)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        $postMan->sendEmailConfirmationTo($user);

        flash( 'Please confirm your email address' );

        event(new Registered($user));

        // $this->guard()->login($user);

        // return $this->registered($request, $user) ?: redirect($this->redirectPath());

        return redirect()->back ();
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:40|regex:/^[a-zA-Z .-]*$/',
            'lastname'  => 'required|string|max:40|regex:/^[a-zA-Z   .-]*$/',
            'email'     => 'required|string|email|max:60|unique:users',
            'password'  => 'required|string|min:6|max:40|confirmed|regex:/^[a-zA-Z0-9.-_~!@#%^&]+$/',
            'question1' => 'required|integer',
            'answer1'   => 'required|string|regex:/^[a-zA-Z0-9 .-]*$/',
            'question2' => 'required|integer',
            'answer2'   => 'required|string|regex:/^[a-zA-Z0-9 .-]*$/'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname'  => $data['lastname'],
            'email'     => $data['email'],
            'password'  => password_hash ($data['password'], PASSWORD_DEFAULT),
            'question1' => $data['question1'],
            'answer1'   => $data['answer1'],
            'question2' => $data['question2'],
            'answer2'   => $data['answer2']
        ]);
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }

}
