<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $totalProducts = Product::count();
        // $totalCategories = Category::count();


        $totalAllUser = User::count();
        // $totalUser = User::where('role_as', '0')->count();
        // $totalAdmin = User::where('role_as', '1')->count();


        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonth = Carbon::now()->format('m');
        $thisYear = Carbon::now()->format('Y');

        $totalOrder = Order::count();
        $todayOrder = Order::whereDate('created_at', $todayDate)->count();
        $thisMonthOrder = Order::whereMonth('created_at', $thisMonth)->count();
        $todayOrder = Order::whereYear('created_at', $thisYear)->count();

        $totalRevenue = DB::table('orders')->sum('total_amount');

        

        return view('backend.dashboard', compact('totalOrder', 'totalRevenue', 'totalAllUser', 'todayOrder'));
    }

    public function reports()
    {
       // $totalProducts = Product::count();
        // $totalCategories = Category::count();


        $totalAllUser = User::count();
        // $totalUser = User::where('role_as', '0')->count();
        // $totalAdmin = User::where('role_as', '1')->count();


        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonth = Carbon::now()->format('m');
        $thisYear = Carbon::now()->format('Y');

        $totalOrder = Order::count();
        $todayOrder = Order::whereDate('created_at', $todayDate)->count();
        $thisMonthOrder = Order::whereMonth('created_at', $thisMonth)->count();
        $todayOrder = Order::whereYear('created_at', $thisYear)->count();

        $totalRevenue = DB::table('orders')->sum('total_amount');

        return view('backend.reports', compact('totalOrder', 'totalRevenue', 'totalAllUser', 'todayOrder', 'thisMonthOrder'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
