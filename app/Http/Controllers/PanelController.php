<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;

class PanelController extends Controller
{
    public function admin()
    {
        if(!Gate::allows('view-admin-panel')) {
            abort(403, 'This action is unauthorized.');
        }
        return view('panel.admin-panel');
    }
}
