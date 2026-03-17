<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|max:20'
        ], [
            'email.required' => __('validation.email_required'),
            'email.email' => __('validation.email_email'),
            'email.exists' => __('validation.email_exists'),

            'password.required' => __('validation.password_required'),
            'password.min' => __('validation.password_min'),
            'password.max' => __('validation.password_max'),
        ]);

        $credentials = $request->only('email', 'password');
        if(!Auth::validate($credentials)):
            return redirect(route('login'))
                        ->withErrors(__('validation.badlogin'))
                        ->withInput();
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return redirect()->intended(route('student.index'))->withSuccess(__('lang.success_login'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request){
        $locale = session('locale');

        Session::flush();
        Auth::logout();

        session(['locale' => $locale]);

        return redirect()->intended(route('login'))->withSuccess(__('lang.succes_logout'));
    }
}
