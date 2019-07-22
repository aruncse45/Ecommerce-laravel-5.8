<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product_details extends Controller
{
    public function product_info(){
    	return view('admin.product.input_product_info');
    }
}
