<?php

namespace App\Http\Controllers;

use App\Models\Pulsa;
use Illuminate\Http\Request;
use App\Models\Depo;
use Illuminate\Support\Facades\Auth;

class PulsaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pembelian.pulsa.create', [
            "title" => "Pulsa"
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
            'no_telp' => 'required|max:15',
            'jum' => 'required',
            'payment' => 'required',
        ]);
    
        $validatedData['user_id'] = auth()->id();
    
        if ($validatedData['payment'] == 'Saldo Akun') {
            // Ambil saldo terkini pengguna
            $saldo = Depo::where('user_id', Auth::user()->id)->orderByDesc('id')->limit(1)->first();
    
            // Periksa apakah saldo mencukupi
            if ($saldo->nominal < $request->jum) {
                return redirect()->back()->with('error', 'Saldo tidak mencukupi!');
            }
    
            // Kurangi saldo berdasarkan nilai "jum" yang dimasukkan pengguna
            $saldo->update(['nominal' => $saldo->nominal - $request->jum]);
            
            // Tambahkan entri ke database untuk transaksi pulsa
            Pulsa::create([
                'user_id' => Auth::user()->id,
                'nama_barang' => $validatedData['nama_barang'],
                'no_telp' => $validatedData['no_telp'],
                'jum' => $request->jum,
                'payment' => 'Saldo Akun'
            ]);
    
            return redirect('/')->with('success', 'Transaksi Berhasil!');
        }
    
        // Jika bukan pembayaran menggunakan saldo akun, langsung tambahkan entri pulsa
        Pulsa::create($validatedData);
        return redirect('/')->with('success', 'Transaksi Berhasil!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Pulsa $pulsa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pulsa $pulsa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pulsa $pulsa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pulsa $pulsa)
    {
        //
    }
}
