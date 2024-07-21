<?php

namespace App\Http\Controllers;

class LegalPagesController extends Controller
{
    public function terms()
    {
        return view ('legal.terms');
    }

    public function privacy()
    {
        return view('legal.privacy');
    }

    public function cookies()
    {
        return view('legal.cookies');
    }
        
    public function refund()
    {
        return view('legal.refund');
    }
    
    public function disclaimer()
    {
        return view('legal.disclaimer');
    }
}
