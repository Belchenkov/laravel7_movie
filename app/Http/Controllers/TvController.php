<?php

namespace App\Http\Controllers;

use App\ViewModels\TvViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    protected const POPULAR_TV_URL = 'https://api.themoviedb.org/3/tv/popular';
    protected const TOP_RATED_TV = 'https://api.themoviedb.org/3/tv/top_rated';
    protected const GENRE_TV_URL = 'https://api.themoviedb.org/3/genre/tv/list';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularTv = Http::withToken(config('services.tmdb.token'))
            ->get(self::POPULAR_TV_URL)
            ->json()['results'];

        $genres = Http::withToken(config('services.tmdb.token'))
            ->get(self::GENRE_TV_URL)
            ->json()['genres'];

        $topRatedTv = Http::withToken(config('services.tmdb.token'))
            ->get(self::TOP_RATED_TV)
            ->json()['results'];

        $viewModel = new TvViewModel(
            $popularTv,
            $topRatedTv,
            $genres
        );

        return view('tv.index', $viewModel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
