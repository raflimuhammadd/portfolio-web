<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectOrder;
use App\Models\Tool;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProjects = Project::count();
        $totalTools = Tool::count();
        $totalOrders = ProjectOrder::count();
        $revenue = ProjectOrder::sum('budget');
        $recentOrders = ProjectOrder::latest()->limit(5)->get();

        return view('dashboard', compact('totalProjects', 'totalTools', 'totalOrders', 'revenue', 'recentOrders'));
    }
}
