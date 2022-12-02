<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesRequest;
use App\Models\Series;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SeriesController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SeriesRequest $request
     * @return View
     */
    public function store(SeriesRequest $request)
    {
        Series::create([
            'name' => $request->name,
            'season' => $request->season,
            'episode' => $request->episode,
            'time' => $request->time,
            'user_id' => Auth::id(),
        ]);

        return view('dashboard', [
            'seriesAll' => Series::where('user_id', Auth::id())->get(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @return View
     */
    public function show(Series $series)
    {
        return view('series.show', [
            'series' => $series,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SeriesRequest $request
     * @param Series $series
     * @return View
     */
    public function update(SeriesRequest $request, Series $series)
    {
        $series->update([
            'name' => $request->name,
            'season' => $request->season,
            'episode' => $request->episode,
            'time' => $request->time,
        ]);

        return view('dashboard', [
            'seriesAll' => Series::where('user_id', Auth::id())->get(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy(int $id)
    {
        // TODO: add function body
    }
}
