<?php

namespace App\Http\Controllers;

use App\Models\Fabrics;
use App\Models\Gum;
use App\Models\Line;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function create()
    {
        $gums = Gum::all();
        $lines = Line::all();
        $f = Fabrics::all();
        return view('dashboard.products.craete',['gums'=>$gums,'lines'=>$lines,'f'=>$f]);
    }
}
