<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use App\Models\Route;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $routes = Route::all();
        $services = Service::all();
        $deliveries = Delivery::where('user_id', Auth::id())->latest()->paginate(6);
        return view('customer.dashboard', compact('routes', 'services', 'deliveries'));
    }
}
