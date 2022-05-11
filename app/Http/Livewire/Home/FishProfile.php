<?php

namespace App\Http\Livewire\Home;

use App\Models\Fish;
use Livewire\Component;

class FishProfile extends Component
{
    public $search;

    public function mount() {
        $this->search = request('search');
    }

    public function render()
    {
        $search1 = '%'. $this->search .'%';
        if ($search1 == null || $this->search == "" || $this->search == null) {
            $fish = Fish::all();
        } else {
            $fish = Fish::where('fish_name', 'like', $search1)->orWhere('local_name', 'like', $search1)->get();
        }

        $topFish = Fish::where('top_fish', 'top')->get();


        return view('livewire.home.fish-profile', ['topFish' => $topFish, 'fishes' => $fish])->layout('layouts.home');
    }
}
