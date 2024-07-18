<?php

namespace App\Http\Controllers;

use App\Models\TourismService;
use Illuminate\Http\Request;

class TourismServiceController extends Controller
{
    public function index()
    {
        $services = TourismService::all();
        return view('tourism_services.index', compact('services'));
    }

    public function show($id)
    {
        $service = TourismService::findOrFail($id);
        return view('tourism_services.show', compact('service'));
    }
}
