<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smartphone;
use App\Noutbook;
use App\Monoblok;
use App\Naushniki;

class ProductsController extends Controller
{
    public function listProducts() {
        $smartphones = Smartphone::all();
        return view('site.products', ['smartphones' => $smartphones]);
    }

    public function productNoutbooks() {
        $noutbooks = Noutbook::all();
        return view('site.product_noutbooks', ['noutbooks' => $noutbooks]);
    }

    public function productMonobloks() {
        $monobloks = Monoblok::all();
        return view('site.product_monobloks', ['monobloks' => $monobloks]);
    }

    public function productNaushniki() {
        $naushniki = Naushniki::all();
        return view('site.product_naushniki', ['naushniki' => $naushniki]);
    }
}
