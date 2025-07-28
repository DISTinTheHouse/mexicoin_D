<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index() {

        // Fetch the authenticated user
        $user = auth()->user();
        return view('users.dashboard', compact('user'));
    }
}
