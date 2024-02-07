<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generate_pdf($order_number)
    {        
        $orders = Order::all()->where('order_number', $order_number);
        // $data = [
        //     'title' => "Invoice of PESTKIT",
        //     'date' => date('m/d/Y'),
        //     'orders' => $orders
        // ];

        $pdf = Pdf::loadView('backend.billing_invoice', compact('orders'));
        return $pdf->stream('billing-invoice');
    }

    // public function download_pdf()
    // {
    //     $data = 'webjourney.dev';
    //     $pdf = Pdf::loadView('backend.billing_invoice', $data);
    //     return $pdf->download('billing-invoice.pdf');
    // }
}
