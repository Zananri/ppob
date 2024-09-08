<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depo;
use Illuminate\Support\Facades\Auth;

class DepoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('dashboard.depo.create');
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
            'nominal' => 'required',
            'payment' => 'required',
        ]);


        $validatedData['user_id'] = auth()->id();

        Depo::create($validatedData);

        return redirect('/dashboard');
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
// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Depo;
// use Illuminate\Support\Facades\Auth;

// class DepoController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $apiKey = env('API_KEY_TRIPAY');
//         if (isset($_GET['tripay_reference'])) {

//             $payload = ['reference'    => $_GET['tripay_reference']];

//             $curl = curl_init();

//             curl_setopt_array($curl, [
//                 CURLOPT_FRESH_CONNECT  => true,
//                 CURLOPT_URL            => 'https://tripay.co.id/api/transaction/detail?' . http_build_query($payload),
//                 CURLOPT_RETURNTRANSFER => true,
//                 CURLOPT_HEADER         => false,
//                 CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $apiKey],
//                 CURLOPT_FAILONERROR    => false,
//                 CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
//             ]);

//             $response = curl_exec($curl);
//             $error = curl_error($curl);
//             $res = json_decode($response, true);

//             curl_close($curl);
//             if ($res['success']) {
//                 if ($res['data']['status'] == 'PAID') {
//                     $saldo_before = Depo::where('user_id', Auth::user()->id)->where('merchant_ref', '!=', $_GET['tripay_reference'])->orderByDesc('id')->limit(1)->first();
//                     if ($saldo_before) {
//                         Depo::where('merchant_ref', $_GET['tripay_reference'])->first()->update(['status' => 1, 'nominal' => $saldo_before->nominal + $res['data']['amount']]);
//                     } else {
//                         Depo::where('merchant_ref', $_GET['tripay_reference'])->first()->update(['status' => 1, 'nominal' => $res['data']['amount']]);
//                     }
//                 }
//             }
//         }

//         $curl = curl_init();

//         curl_setopt_array($curl, array(
//             CURLOPT_FRESH_CONNECT  => true,
//             CURLOPT_URL            => 'https://tripay.co.id/api/merchant/payment-channel',
//             CURLOPT_RETURNTRANSFER => true,
//             CURLOPT_HEADER         => false,
//             CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $apiKey],
//             CURLOPT_FAILONERROR    => false,
//             CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
//         ));

//         $response = curl_exec($curl);
//         curl_close($curl);
//         $payment = json_decode($response, true);

//         return view('dashboard.depo.create', compact('payment'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         $validatedData = $request->validate([
//             'nama_barang' => 'required',
//             'nominal' => 'required',
//             'payment' => 'required',
//         ]);

//         $privateKey   = env('PRIVATE_KEY_TRIPAY');
//         $merchantCode = env('MERCHANT_CODE_TRIPAY');
//         $merchantRef  = Auth::user()->name . $request->nominal . rand(1000, 9999);
//         $amount       = $request->nominal;
//         $signature = hash_hmac('sha256', $merchantCode . $merchantRef . $amount, $privateKey);

//         $apiKey       = env('API_KEY_TRIPAY');
//         $data = [
//             'method'         => $request->payment,
//             'merchant_ref'   => $merchantRef,
//             'amount'         => $amount,
//             'customer_name'  => Auth::user()->name,
//             'customer_email' => Auth::user()->email,
//             'customer_phone' => Auth::user()->no_hp,
//             'return_url'   => 'http://localhost:8000/depo',
//             'expired_time' => (time() + (24 * 60 * 60)), // 24 jam
//             'signature'    => $signature,
//             'order_items'    => [
//                 [
//                     'sku'         => $request->nama_barang,
//                     'name'        => $request->nama_barang,
//                     'price'       => $request->nominal,
//                     'quantity'    => 1,
//                     'product_url' => 'https://tokokamu.com/product/nama-produk-1',
//                     'image_url'   => 'https://tokokamu.com/product/nama-produk-1.jpg',
//                 ],
//             ],
//         ];

//         $curl = curl_init();

//         curl_setopt_array($curl, [
//             CURLOPT_FRESH_CONNECT  => true,
//             CURLOPT_URL            => 'https://tripay.co.id/api/transaction/create',
//             CURLOPT_RETURNTRANSFER => true,
//             CURLOPT_HEADER         => false,
//             CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $apiKey],
//             CURLOPT_FAILONERROR    => false,
//             CURLOPT_POST           => true,
//             CURLOPT_POSTFIELDS     => http_build_query($data),
//             CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
//         ]);

//         $response = curl_exec($curl);
//         curl_close($curl);
//         $res = json_decode($response, true);

//         $validatedData['user_id'] = auth()->id();

//         $saldo_before = Depo::where('user_id', Auth::user()->id)->orderByDesc('id')->limit(1)->first();

//         if ($saldo_before) {
//             $validatedData['nominal'] += $saldo_before->nominal;
//         }

//         $validatedData['status'] = 0;
//         $validatedData['merchant_ref'] = $res['data']['reference'];
//         $validatedData['checkout_url'] = $res['data']['checkout_url'];

//         Depo::create($validatedData);

//         if ($res['success']) {
//             return redirect($res['data']['checkout_url']);
//         } else {
//             return redirect('/dashboard')->with('error', 'Transaksi Berhasil!');
//         }
//     }


//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         //
//     }
// }
