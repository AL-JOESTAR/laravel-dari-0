<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $data = [
            'nama' => 'al',
            'umur' => '20',
        ];

        return view ('pages.about', $data);
    }
}
