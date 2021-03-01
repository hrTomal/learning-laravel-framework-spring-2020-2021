<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function adminIndex(){
        return view('home.adminIndex');
    }
    public function customerIndex(){
        return view('home.customerIndex');
    }
    public function accountantIndex(){
        return view('home.accountantIndex');
    }
    public function salesIndex(){
        return view('home.salesIndex');
    }
    public function partnerIndex(){
        return view('home.partnerIndex');
    }
    public function vendorIndex(){
        return view('home.vendorIndex');
    }

}
