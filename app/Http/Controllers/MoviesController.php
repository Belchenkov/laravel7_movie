<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    protected const POPULAR_MOVIES_URL = 'https://api.themoviedb.org/3/movie/popular';
    protected const GENRE_MOVIES_URL = 'https://api.themoviedb.org/3/genre/movie/list';
    protected const NOW_PLAYING_MOVIES_URL = 'https://api.themoviedb.org/3/movie/now_playing';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $popularMovies = Http::withToken(config('services.tmdb.token'))
                            ->get(self::POPULAR_MOVIES_URL)
                            ->json()['results'];

        $genresArray = Http::withToken(config('services.tmdb.token'))
                            ->get(self::GENRE_MOVIES_URL)
                            ->json()['genres'];

        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))
                            ->get(self::NOW_PLAYING_MOVIES_URL)
                            ->json()['results'];

        $genres = collect($genresArray)->mapWithKeys(static function ($genre) {
            return [
                $genre['id'] => $genre['name']
            ];
        });

        return view('index', compact(
            'popularMovies',
            'genres',
            'nowPlayingMovies'
        ));
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
        return view('show');
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
