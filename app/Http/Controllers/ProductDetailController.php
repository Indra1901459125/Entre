<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index($slug = 'NoName')
    {
    	return view('teknisi.detail-product', ['productName' => $slug]);
    }
}
