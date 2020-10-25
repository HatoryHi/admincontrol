<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class EcommerceController extends BaseController
{
    function dashboard(){
    	return view('admin.ecommerce.dashboard');
    }

    function product(){
    	return view('admin.ecommerce.product');
    }

    function productList(){
        return view('admin.ecommerce.product-list');
    }

    function productDetail(){
    	return view('admin.ecommerce.product-detail');
    }
}
