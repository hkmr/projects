<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserSetting;
use App\UserAchievement;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Socialite;

class RegisterController extends Controller
{

    use RegistersUsers;


    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {   
        // generating substring from email
        $loc = strpos($data['email'],'@');
        $username = substr($data['email'],0,$loc);
        $usercount = 0;
        // checking for username
        $allUsers = User::where('username',$username)->get();
        
        if($allUsers != null)
        {
            $username = $username.$allUsers->count();
        }
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'username' => $username,
            'avatar' => 'https://www.gravatar.com/avatar/'.md5($data['email']).'?f=v&d=wavatar',
        ]);

        // creating setting table for user
        $setting = new UserSetting;
        $setting->user_id = $user->id;
        $setting->save();

        // creating achievement table for user
        $achieve = new UserAchievement;
        $achieve->user_id = $user->id;
        $achieve->save();
        
        return $user;
    }
    
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }


    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('email', $user->email)->first();
        if ($authUser) {
            return $authUser;
        }

        $loc = strpos($data['email'],'@');
        $createUser = User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id,
            'username' => substr($data['email'],0,$loc),
            'avatar'   => $user->public_profile,
        ]);

        $setting = new UserSetting;
        $setting->user_id = $createUser->id;
        $setting->save();

        return $createUser;
    }
}
