<?php

namespace App\Http\Controllers;

use App\Http\Controllers\StoreuserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search_email;
        $users = User::all();
        if ($search) {
            $users = User::where('email', 'like', "%$search%")
                ->orwhere('name', 'like', "%$search%")->get();
        }
        return view('/admin/user_index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'rol'=>['required','string']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function show(Request $request)
    {
        $id = $request->id;
    }

    public function create(){
        return view('userViews.forms.formRegister');
    }

    public function store(Request $request){
        User::create($request->all());
        return redirect()->back();
    }
}
