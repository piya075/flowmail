<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Input;
use Laravel\Socialite\Contracts\Factory as Socialite; 

class AuthController extends Controller
{
    
    public function __construct(Socialite $socialite)
    {
           $this->socialite = $socialite;
    }
    
    public function Login()
    {
        // Login page
        return View('auth.login');
    }

    public function Logout()
    {
        // Logout System
        Session::flush();
        return redirect('/login')->withErrors(['error'=>['You are Logout']])->withInput();
    }

    public function Authentication(Request $request)
    {
        // Authen
        $inputs = $request->only(['username', 'password']);
        if($inputs['username'] === 'admin' && $inputs['password'] === '9999'){
            session(['member' => 'admin']);
            return redirect('/');
        }else{
            return redirect('/login')->withErrors(['error'=>['password not correct']])->withInput();
        }
    }
    
    public function APIAuthentication(Request $request)
    {
        // Authen
        $inputs = $request->only(['username', 'password']);
        if($inputs['username'] === 'admin' && $inputs['password'] === '9999'){
            return response()->json(['status'=>200,'token'=>csrf_token()]);
        }else{
            return response()->json(['status'=>401]);
        }
    }
    
    public function test(Request $request)
    {
        $pass = '';
        $file = $request->all();
        if(!empty($request->file('images')))
        {
            $request->file('images')->move('../public/assets/img/',time().$request->file('images')->getClientOriginalName());
            dd($request->file('images')->getClientOriginalName());
        }
        foreach(['beam','9999'] as $item)
        {
            $pass .= md5($item);
        }
        return response()->json(['data'=>$request->all(),'token'=>csrf_token(),'status'=>200,'pass'=>$pass,'file'=>$file]);
    }
    
    public function upload()
    {
        return View('backend.upload');
    }
    
    public function Facebook($provider=null)
    {
        if(!config("services.$provider")) abort('503'); //just to handle providers that doesn't exist
        return $this->socialite->with($provider)->redirect();
    }
    
    public function callbackFacebook($provider=null)
    {
        if($user = $this->socialite->with($provider)->user()){
            $data = ['email'=>$user['email'],'name'=>$user['name'],'id'=>$user['id'],'avatar'=>$user->avatar];
            dd($data);
        }else{
             return 'something went wrong';
        }
    }
    
    public function face()
    {
        return View('facebook');
    }
}