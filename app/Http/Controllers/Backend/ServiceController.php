<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServicesCategory;

class ServiceController extends Controller
{
    public function index()
    {        
        $services = Service::get();
        return view('backend.manage-services.services.index', compact('services'));
    }

    public function create()
    {        
        $serviceCategories = ServicesCategory::get();
        return view('backend.manage-services.services.create', compact('serviceCategories'));
    }
}
