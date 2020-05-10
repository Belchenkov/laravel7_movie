<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';

    private const SEARCH_MOVIES_URL = 'https://api.themoviedb.org/3/search/movie?query=';

    public function render()
    {
        $searchResults = [];

        if (strlen($this->search) > 2) {
            $searchResults = Http::withToken(config('services.tmdb.token'))
                ->get(self::SEARCH_MOVIES_URL . $this->search)
                ->json()['results'];
        }

        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7)
        ]);
    }
}
