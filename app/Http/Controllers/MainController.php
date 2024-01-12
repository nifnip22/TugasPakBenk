<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    public function index(Request $req)
    {
        $notice = $req->input('notice');

        return view('app', 
        [
            'notice' => $notice,
        ]);
    }
}
