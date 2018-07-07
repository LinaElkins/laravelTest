<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
    public function index() {
        $first = "Lina";
    $last =  "Li";
    $email = "linali@gmail.com";
    // Note that we do NOT write the $ in the string
    //   we pass to compact!
    return view('about', compact('first','last','email'));
    }
}
