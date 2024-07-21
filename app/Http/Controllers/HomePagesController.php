<?php

namespace App\Http\Controllers;

class HomePagesController extends Controller
{
    public function welcome()
    {
        return view ('homepages.welcome');
    }
    public function about()
    {
        return view ('homepages.about');
    }
    public function contact()
    {
        return view ('homepages.contact-us');
    }
    public function newsletter()
    {
        return view ('homepages.newsletter');
    }
}
