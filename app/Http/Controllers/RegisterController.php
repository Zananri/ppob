<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\Depo;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register.create', [
            'title' => 'Register'
        ]);
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

        $validatedData = $request->validate([
            'image' => 'image|file|max:10000',
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'no_hp' => 'required|max:15',
            'password' => 'required|min:5|max:255'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration Success!');
        return redirect('/login')->with('success', 'Registration Success!');
    }

    /**
     * Display the specified resource.
     */

     
}
