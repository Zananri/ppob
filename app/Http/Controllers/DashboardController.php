<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $depo = $user->depo;

        return view('dashboard.index', compact('user', 'depo'));
    }



    public function edit()
    {
        $id = Auth::id();

        $user = User::find($id);

        if (!$user) {
            abort(404);
        }

        return view('dashboard.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'no_hp' => 'required|max:15',
            'password' => 'required|min:5|max:255'
        ];

        if ($request->hasFile('image')) {
            $rules['image'] = 'image|file|max:10000';
        }

        $validatedData = $request->validate($rules);

        $oldImagePath = User::find($id)->image;

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');

            if ($oldImagePath) {
                Storage::delete($oldImagePath);
            }
        }

        User::find($id)->update($validatedData);

        return redirect('/dashboard')->with('success', 'Profil berhasil diperbarui');
    }
}
