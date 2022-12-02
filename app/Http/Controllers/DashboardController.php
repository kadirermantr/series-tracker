<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('dashboard', [
            'seriesAll' => Series::where('user_id', Auth::id())->get(),
        ]);
    }
}
