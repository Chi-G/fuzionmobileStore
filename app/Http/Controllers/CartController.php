<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Service $service)
    {
        return redirect()->route('services.show', $service)->with('success', 'Service added to cart!');
    }
}
