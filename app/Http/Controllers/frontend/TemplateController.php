<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
class TemplateController extends Controller
{
    public function index()
    {
        $packages= Plan::where('is_approved','=' ,'approved')->get();
        return view('frontend.home',compact('packages'));
    }
}
