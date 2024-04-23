<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.login');
    }

    /**
     * Create a custom function for login: only used on login panel
     */

    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (auth()->attempt($request->only('email', 'password'))) {
            // Role validation
            // if (auth()->user()->role==="user") {
            //     return redirect()->intended('/user');
            // } else if (auth()->user()->role==="vendor") {
            //     return redirect()->intended('/vendor');
            // } else if (auth()->user()->role==="admin") {
            //     return redirect()->intended('/admin');
            // }
            return redirect()->intended('/dashboard');
        } else {
            // Login failed
            return redirect('/login')->with("error","Wrong Email or Password");
        }
    }
    /**
     * Register View
     */

    public function register()
    {
        return view('home.register');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            "name" => "required",
            "email"=> "required|email",
            "password"=>"required"
        ]);

        User::create($data);
        return redirect("/login")->with("success","Account has been created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
