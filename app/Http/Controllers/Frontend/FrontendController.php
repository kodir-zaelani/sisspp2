<?php

namespace App\Http\Controllers\Frontend;

use Midtrans\Snap;
use App\Models\Donation;
use Illuminate\Support\Str;
use App\Models\Tagihansiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
     /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        // Set midtrans configuration
        \Midtrans\Config::$serverKey    = config('services.midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        \Midtrans\Config::$isSanitized  = config('services.midtrans.isSanitized');
        \Midtrans\Config::$is3ds        = config('services.midtrans.is3ds');
    }

    public function index()
    {
        return view('frontend.home.index');
    }

    public function donasi()
    {
        return view('frontend.home.donasi');
    }

    public function listdonasi()
    {
        //get data donations
        $donations = Donation::latest()->paginate(10);

        return view('frontend.home.listdonasi', compact('donations'));
    }

      /**
     * create
     *
     * @return void
     */
    public function create()
    {
        //render view
        return view('frontend.home.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'amount'    => 'required',
            'note'      => 'required',
        ]);

        //insert donation to database
        $donation = Donation::create([
            'invoice'   => 'INV-'.Str::upper(Str::random(9)),
            'name'      => $request->name,
            'email'     => $request->email,
            'amount'    => $request->amount,
            'note'      => $request->note,
            'status'    => 'PENDING',
        ]);

        // Buat transaksi ke midtrans kemudian save snap tokennya.
        $payload = [
            'transaction_details' => [
                'order_id'      => $donation->invoice,
                'gross_amount'  => $donation->amount,
            ],
            'customer_details' => [
                'first_name'       => $donation->name,
                'email'            => $donation->email,
            ]
        ];

        //create snap token
        $snapToken = Snap::getSnapToken($payload);
        $donation->snap_token = $snapToken;
        $donation->save();

        if ($donation) {
            return redirect()->route('donasi')->with('success', 'Donation created successfully');
        }
    }

}