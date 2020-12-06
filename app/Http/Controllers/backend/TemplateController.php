<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        return view('backend.home');
    }
    public function charts()
    {
        return view('backend.partials.charts');
    }
}
