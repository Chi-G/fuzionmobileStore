<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsPrivacyController extends Controller
{
    public function term()
    {
        return view('terms.index');
    }

    public function privacy()
    {
        return view('privacy.index');
    }
}
