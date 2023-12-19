<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        $projects = Project::whereNotNull('location')->orderBy('location', 'asc')->get();
        return view('/guest/home', compact('projects'));
    }
}
