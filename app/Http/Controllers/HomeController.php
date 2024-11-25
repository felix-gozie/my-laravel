<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }
    public function help(){
        return view('help');
    }
    public function inbox(){
        return view('inbox');
    }
    public function myaccount(){
        return view('myaccount');
    }
    public function orders(){
        return view('orders');
    }
    public function save(){
        return view('save');
    }
    public function voucher(){
        return view('voucher');
    }
    public function select(){
        return view('select');
    }
    public function placeorder(){
        return view('placeorder');
    }
    public function payment(){
        return view('payment');
    }
    public function track(){
        return view('track');
    }
    public function edit(){
        return view('edit');
    }
    public function delete(){
        return view('delete');
    }
}

