<?php

namespace App\Http\Controllers\Wali;

use Mpdf\Mpdf;
use App\Models\Invoice;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class WaliKeuanganController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index(): View
    {
        return view('wali.keuangan.index', [
            'title' => 'Keuangan'
        ]);
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function orderbayar(): View
    {
        return view('wali.keuangan.orderbayar', [
            'title' => 'Order Bayar'
        ]);
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function pembayaran(): View
    {
        return view('wali.keuangan.pembayaran', [
            'title' => 'Pembayaran'
        ]);
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function detailinvoice(Request $request): View
    {
        return view('wali.keuangan.detailinvoice', [
            'invoice' => Invoice::where('id', $request->segment(3))->first(),
            'title' => 'Invoice'
        ]);
    }

    public function detailinvoice_pdf(Request $request)
    {
        $mpdf = new Mpdf();
        $invoice = Invoice::where('id', $request->segment(3))->first();
        $qrcodeid = QrCode::format('png')->size(50)->generate($invoice->id);
        $mpdf->WriteHTML(view('wali.keuangan.detailinvoice-pdf', [
            'invoice' => $invoice,
            'qrcode' => $qrcodeid,
            'title' => 'Invoice PDF'
        ]));
        $mpdf->Output();
    }
    public function detailinvoice_pdf_download(Request $request)
    {
        $mpdf = new Mpdf();
        $invoice = Invoice::where('id', $request->segment(3))->first();
        $qrcodeid = QrCode::format('png')->size(50)->generate($invoice->id);
        $mpdf->WriteHTML(view('wali.keuangan.detailinvoice-pdf', [
            'invoice' => Invoice::where('id', $request->segment(3))->first(),
            'qrcode' => $qrcodeid,
            'title' => 'Invoice PDF'
        ]));
        $mpdf->Output('Invoice-pdf.pdf', 'D');
    }
}
