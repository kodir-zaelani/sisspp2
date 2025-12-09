<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceDetailController extends Controller
{
     /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function detailinvoice(Request $request): View
    {
        return view('backend.keuangan.detailinvoice', [
            'invoice' => Invoice::where('id', $request->segment(3))->first(),
            'title' => 'Invoice'
        ]);
    }

    public function detailinvoice_pdf(Request $request)
    {
        $mpdf = new Mpdf();
        $invoice = Invoice::where('id', $request->segment(3))->first();
        // $qrcodeid = QrCode::size(50)->generate($invoice->id);
        $mpdf->WriteHTML(view('backend.keuangan.detailinvoice-pdf', [
            'invoice' => $invoice,
            // 'qrcode' => $qrcodeid,
            'title' => 'Invoice PDF'
        ]));
        $mpdf->Output();
    }
    public function detailinvoice_pdf_download(Request $request)
    {
        $mpdf = new Mpdf();
        $invoice = Invoice::where('id', $request->segment(3))->first();
        // $qrcodeid = QrCode::size(50)->generate($invoice->id);
        $mpdf->WriteHTML(view('backend.keuangan.detailinvoice-pdf', [
            'invoice' => $invoice,
            // 'qrcode' => $qrcodeid,
            'title' => 'Invoice PDF'
        ]));
        $mpdf->Output('Invoice-pdf.pdf', 'D');
    }
}