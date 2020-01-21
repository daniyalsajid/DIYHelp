<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GetService;
use App\OfferService;

class ServicesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index()
    {

        $services = GetService::latest()->get();
        return view('/services', ['services' => $services]);
    }

    public function specificServices($specific)
    {

        $services = OfferService::latest()->where('sub_categories_id', '=', $specific)->get();
        return view('/offers', ['services' => $services]);
    }

    public function serviceDetails($selectedService)
    {

        $services = GetService::latest()->where('id', '=', $selectedService)->get();
        return view('/details', ['services' => $services]);
    }

}
