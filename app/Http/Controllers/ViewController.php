<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewLoginForm(){
        return view('login');
    }
    public function viewRegistrationForm(){
        return view('register');
    }

    public function studentHome() {
        if(auth()->user()->role=='student'){
            return view('student.home');
        }
        abort(403, 'Unauthorized action.');
    }

    public function guestHome() {
        if(auth()->user()->role=='guest'){
            return view('guest.home');
        }
        abort(403, 'Unauthorized action.');
    }

    /*public function adminDashboard() {
        if(auth()->user()->role=='admin'){
            return view('admin.home');
        }
        abort(403, 'Unauthorized action.');
    }*/
}
