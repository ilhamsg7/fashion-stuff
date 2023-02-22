<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FundamentalController extends Controller {

    public function about() {
        return view('User.about', [
            'title' => 'About'
        ]);
    }

    public function contact() {
        return view('User.contact', [
            'title' => 'Contact'
        ]);
    }
}
