<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listrik;
use App\Models\Depo;
use Illuminate\Support\Facades\Auth;

class ListrikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pembelian.listrik.create', [
            "title" => "Listrik"
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
            'nama_barang' => 'required',
            'no_token' => 'required',
            'jum' => 'required',
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

        Listrik::create($validatedData);
        return redirect('/')->with('success', 'Transaksi Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}