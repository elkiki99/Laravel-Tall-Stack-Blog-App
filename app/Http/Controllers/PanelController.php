<?php

namespace App\Http\Controllers;

class PanelController extends Controller
{
    public function admin()
    {
        return view('panel.admin-panel');
    }
}
