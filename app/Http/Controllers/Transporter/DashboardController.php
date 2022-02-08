<?php

namespace App\Http\Controllers\Transporter;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $deliveries = Delivery::latest()->active()->paginate(6);
        return view('transporter.dashboard', compact('deliveries'));
    }
}
