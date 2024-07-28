<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{

    /**
     * Display my account page
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('page.account');
    }

    /**
     * Login user in to the system
     *
     * @param Request $request
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/success')->with('success', 'You have successfully logged in');
        }

        return redirect()->back()->with('error' , 'Password or e-mail is incorrect!');
    }


    /**
     * Logout user from the system
     *
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'You have successfully logged out');
    }

    /**
     * Register user in the system
     *
     * @param Request $request
     */
    public function register(Request $request)
    {
        $request->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => [
                'required',
                'confirmed',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
            ],
            'subscribed' => 'nullable|boolean',
        ]);

        User::create([
            'firstname' => $request->firstName,
            'lastname' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'subscribed' => $request->subscribed ? 1 : 0,
        ]);

        return redirect('/')->with('success', 'User registered successfully!');
    }

    public function success()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('page.success')->with([
                'firstname' => $user->firstname,
                'lastname' => $user->lastname
            ]);
        }

        return redirect('/')->with('error', 'You must be logged in to view this page.');
    }
}
