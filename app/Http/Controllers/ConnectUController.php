<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
}
