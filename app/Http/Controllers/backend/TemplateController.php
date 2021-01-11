<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\PlanTourist;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $list=Plan::count();
        $list=PlanTourist::count();
        $list=Plan::count();
        return view('backend.home',compact('list'));
    }
    public function charts()
    {
        return view('backend.partials.charts');
    }
}
