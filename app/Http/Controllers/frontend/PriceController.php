<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Price;
use App\Models\backend\Service;
use Illuminate\Http\Request;


class PriceController extends Controller
{
    public function index()
    {
        $data['packeges'] = Price::all();
        return view('frontend.packege', $data);
    }

    public function service()
    {
        $data['services'] = Service::all();
        return view('frontend.services', $data);
    }


}
