<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class DashboardController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('Backend.dashboard');
    }
}
