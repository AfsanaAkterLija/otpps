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
        $listap=Plan::where('is_approved','=','approved')->count();
        $list=PlanTourist::count();
        $listpp=Plan::where('is_approved','=','not approved')->count();
        return view('backend.home',compact('listap','list','listpp'));
    }
    public function charts()
    {
        return view('backend.partials.charts');
    }
}
