<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hayday;
use App\Models\Depo;
use Illuminate\Support\Facades\Auth;

class HaydayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('topup.hayday.create', [
            'title' => 'Hayday'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_game' => 'required',
            'player_tag' => 'required',
            'jum' => 'required', // Pastikan jum adalah nama yang sesuai dengan form
            'payment' => 'required',
        ]);

        $validatedData['user_id'] = auth()->id(); 

        if ($validatedData['payment'] == 'Saldo Akun') {
            $saldo = Depo::where('user_id', Auth::user()->id)->orderByDesc('id')->limit(1)->first();
            if ($saldo->nominal <= $request->jum) {
                return redirect()->back()->with('error', 'Saldo tidak mencukupi!');
            }
            Depo::create([
                'user_id' => Auth::user()->id,
                'nama_barang' => "Pembelian $request->nama_game",
                'nominal' => $saldo->nominal - $request->jum,
                'payment' => 'Saldo Akun'
            ]);
        }

        Hayday::create($validatedData);
        return redirect('/')->with('success', 'Transaksi Berhasil!');
    }
}
