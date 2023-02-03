<?php

namespace App\Http\Controllers\AdminPanel\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomePage extends Controller
{
  public function index()
  {
    return view('content.dashboard.dashboards-analytics');
  }
}
