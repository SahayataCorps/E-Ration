<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
	public function area()
    {
    	return view('area');
    }

    public function index()
    {
    	return view('index', ['products' => products::paginate(3)]);
    }

    public function index1()
    {
    	return view('index1', ['products' => products::paginate(3)]);
    }

    public function index2()
    {
    	return view('index2', ['products' => products::paginate(3)]);
    }

    public function singleProduct($id)
    {
    	return view('single', ['product' => products::find($id)]);
    }
}
