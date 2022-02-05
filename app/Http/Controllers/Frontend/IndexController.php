<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Core;
use App\Models\Backend\Feature;
use App\Models\Backend\Galary;
use App\Models\Backend\Header;
use App\Models\Backend\Slider;
use App\Models\Backend\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $header = Header::get()->first();
        $sliders = Slider::latest()->get();
        $cores = Core::latest()->get();
        $gallery = Galary::latest()->get();
        $features = Feature::latest()->get();
        $services = Service::latest()->get();
        return view('frontend.index', compact('header', 'sliders','cores','gallery','features','services'));
    }

    public function dashboard(){
        return view('frontend.dashboard');
    }
}
