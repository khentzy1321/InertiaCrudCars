<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        
        $data = Car::get();
        $user = User::get();
     
        $count = Car::count();
        $countUser = User::count();

    
        return Inertia::render('Dashboard', [
            'carCount' => $count,
            'userCount' => $countUser,
        ])->withViewData(['data' => $data, 'user' => $user]);
    }
}
