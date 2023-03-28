<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Auth;



class PdfOutputController extends Controller
{
    public function output(Request $request, PDF $pdf)
    {
        // リクエストから商品情報を取得
        $data = $request->only(['name', 'category', 'brand', 'condition', 'kaitori_price', 'price', 'comment']);

        $pdf->loadView('product.kaitori_pdf', compact('data'));
        $pdf->setPaper('A4');
        return $pdf->stream();
    }
}
