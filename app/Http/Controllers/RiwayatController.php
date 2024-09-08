<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Aov;
use App\Models\Opbr;
use App\Models\Ff;
use App\Models\Hayday;
use App\Models\Cr;
use App\Models\Cod;
use App\Models\Valo;
use App\Models\Honkai;
use App\Models\Pb;
use App\Models\Dragon;
use App\Models\Lol;
use App\Models\Pubg;
use App\Models\Genshin;
use App\Models\Coc;
use App\Models\Ml;
use App\Models\Pulsa;
use App\Models\Internet;
use App\Models\Listrik;
use App\Models\Depo;

class RiwayatController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Mengumpulkan transaksi dari setiap model
        $transactions = collect([
            Aov::where('user_id', $user->id)->get(),
            Opbr::where('user_id', $user->id)->get(),
            Ff::where('user_id', $user->id)->get(),
            Hayday::where('user_id', $user->id)->get(),
            Cr::where('user_id', $user->id)->get(),
            Cod::where('user_id', $user->id)->get(),
            Valo::where('user_id', $user->id)->get(),
            Honkai::where('user_id', $user->id)->get(),
            Pb::where('user_id', $user->id)->get(),
            Dragon::where('user_id', $user->id)->get(),
            Lol::where('user_id', $user->id)->get(),
            Pubg::where('user_id', $user->id)->get(),
            Genshin::where('user_id', $user->id)->get(),
            Coc::where('user_id', $user->id)->get(),
            Ml::where('user_id', $user->id)->get(),
            Pulsa::where('user_id', $user->id)->get(),
            Internet::where('user_id', $user->id)->get(),
            Listrik::where('user_id', $user->id)->get(),
            Depo::where('user_id', $user->id)->where('nama_barang', 'Depo Saldo')->get(),
        ])->flatten()->filter();

        return view('dashboard.riwayat.index', compact('transactions'));
    }
}
