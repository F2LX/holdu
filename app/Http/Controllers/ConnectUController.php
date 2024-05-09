<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ConnectUController extends Controller
{
    /**
     * Display connectU main pages
     */
    public function index()
    {
        return view('user.connectu.home');
    }
    
    public function userinfo(User $user)
    {
        return view('user.connectu.info',compact('user'));
    }
}
