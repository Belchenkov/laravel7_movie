<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{
    public $popularMovies;
    public $nowPlayingMovies;
    public $genres;

    public function __construct($popularMovies, $nowPlayingMovies, $genres)
    {
        $this->popularMovies = $popularMovies;
        $this->nowPlayingMovies = $nowPlayingMovies;
        $this->genres = $genres;
    }


    public function popularMovies()
    {
        return collect($this->popularMovies)->map(static function ($movie) {
            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500' . $movie['poster_path'],
                'vote_average' => $movie['vote_average'] * 10 . '%',
                'release_date' =>  \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')
            ]);
        });
    }

    public function nowPlayingMovies()
    {
        return $this->nowPlayingMovies;
    }

    public function genres()
    {
        return $this->genres;
    }
}