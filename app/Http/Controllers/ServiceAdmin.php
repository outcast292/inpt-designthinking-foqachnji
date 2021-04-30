<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceAdmin extends Controller {
    //
    public function show() {
        # code...
        return view("service.adminShow");
    }

    public function login() {
        # code...
        return view("service.adminlogin");
    }
}
