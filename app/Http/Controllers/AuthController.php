<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function generateUniqueUsername(User $user)
{
    $unique = false;
    $randomString = '';
    $max=10;
    while (!$unique) {
        // Generate random number
        $randomNumber = mt_rand(1, $max); // Menghasilkan nomor acak antara 1 dan 999
        // Update minor: $max bakal mencegah dia ngulang beberapa kali
        
        // Generate random string
        $fruitNames = ['tomato', 'broccoli', 'cabbage', 'carrot','garlic','leek','onion','pumpkin','longbeans','potato','mushroom','redpepper','tomatoes','spinach']; // Daftar nama buah
        $randomFruit = $fruitNames[array_rand($fruitNames)]; // Pilih nama buah secara acak
        $user->category=$randomFruit.".png";
        // Gabungkan nama buah dengan nomor acak
        $randomString = $randomFruit . $randomNumber;
        
        // Check if the string already exists in the database
        $existingUser = User::where('username', $randomString)->first();
        
        // If the string doesn't exist, set $unique to true to exit the loop
        if (!$existingUser) {
            $unique = true;
        } else {
            $max=$max*10;
        }
    }
    return $randomString;
}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()) {
            return redirect('/dashboard');
        }
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
            return redirect('/login')->with("error","Wrong Email or Password!");
        }
    }
    /**
     * Register View
     */

    public function register()
    {
        if(auth()->user()) {
            return redirect('/dashboard');
        }
        return view('home.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email"=> "required|email|unique:users,email",
            "password"=>"required"
        ]);
        $data=new User;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->status="Inactive";
        $data->role="User";
        $data->username=$this->generateUniqueUsername($data);
        $data->save();
        return redirect("/login")->with("success","Account has been created!");
    }
    public function profile()
    {
        $user=User::find(auth()->user()->id);
        return view('user.profile',compact('user'));
    }
    
    public function handleUsername()
    {
        $user=User::find(auth()->user()->id);
        $user->username=$this->generateUniqueUsername($user);
        $user->save();
        return redirect()->back();
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
