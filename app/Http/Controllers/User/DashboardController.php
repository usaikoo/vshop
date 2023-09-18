<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{

    function index()
    {
        $orders = Order::with('order_items.product.brand', 'order_items.product.category')->get();
        return Inertia::render('User/Dashboard', ['orders' => $orders]);
    }
}
