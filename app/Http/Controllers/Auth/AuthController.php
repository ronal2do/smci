<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        // dd($data);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'perm' => 'user',
            'password' => bcrypt($data['password']),
        ]);
    }
    
    /**
     * Redirect the user to GitHub.
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

     /**
     * Handle GitHub's callback.
     */
    public function handleProviderCallback()
    {
        $user = $this->findOrCreateGitHubUser(
            Socialite::driver('facebook')->user()
        );
        auth()->login($user);

        return redirect('/home');
    }
    /**
     * Fetch the GitHub user.
     *
     * @param  object $facebookUser
     * @return \App\User
     */
    protected function findOrCreateGitHubUser($facebookUser)
    {
        $user = User::firstOrNew(['email' => $facebookUser->email]);
        
        if ($user->exists) return $user;
        
        $user->fill([
            'name'        => $facebookUser->name,
            'email'       => $facebookUser->email,
            'facebook_id' => $facebookUser->id,
            'perm' => 'user',
        ])->save();
        return $user;
    }
}